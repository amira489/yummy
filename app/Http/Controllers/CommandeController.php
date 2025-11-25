<?php

namespace App\Http\Controllers;

use App\Models\Commande;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Auth; // ✅ CORRECTION ICI

class CommandeController extends Controller
{
    public function create()
    {
        return view('commande');
    }

    public function store(Request $request)
{
    if (!Auth::check()) {
        return redirect()->route('login')->with('error', 'Veuillez vous connecter.');
    }

    $validated = $request->validate([
        'first_name' => 'required',
        'last_name' => 'required',
        'phone' => 'required',
        'livraison' => 'required|in:surplace,domicile',
        'adresse' => 'nullable|string',
        'ville' => 'nullable|string',
        'menu_items' => 'nullable|array',
        'email' => 'required|email',
    ]);

    $menuPrices = [
        1 => 5.95, 2 => 14.95, 3 => 17.95,
        4 => 20.95, 5 => 12.95, 6 => 21.95
    ];

    $selectedItems = $validated['menu_items'] ?? [];
    $total = array_reduce($selectedItems, function ($sum, $id) use ($menuPrices) {
        return $sum + ($menuPrices[$id] ?? 0);
    }, 0);

    $commande = new Commande([
        'first_name' => $validated['first_name'],
        'last_name' => $validated['last_name'],
        'phone' => $validated['phone'],
        'livraison' => $validated['livraison'],
        'adresse' => $validated['adresse'] ?? null,
        'ville' => $validated['ville'] ?? null,
        'menu_items' => json_encode($selectedItems),
        'total_price' => $total,
        'email' => Auth::user()->email,
        'user_id' => Auth::id()
    ]);
    $commande->save();

    $specialCode = strtoupper(Str::random(10));

    $data = [
        'commande' => $commande,
        'special_code' => $specialCode
    ];

    $receiptsPath = public_path('receipts');
    if (!File::exists($receiptsPath)) {
        File::makeDirectory($receiptsPath, 0755, true);
    }

    $fileName = 'receipt_' . $specialCode . '.pdf';
    $pdf = Pdf::loadView('pdf.recu', $data);
    $pdf->save($receiptsPath . '/' . $fileName);

    return redirect()->route('commande.form')->with([
        'success' => 'Commande enregistrée avec succès!',
        'receipt' => asset('receipts/' . $fileName)
    ]);
}

    public function index()
    {
        $userId = Auth::id(); // ✅
        $commandes = Commande::where('user_id', $userId)->get();
        return view('client.index', compact('commandes'));
    }

    public function edit($id)
    {
        $commande = Commande::findOrFail($id);

        if ($commande->user_id !== Auth::id()) {
            abort(403, 'Accès interdit');
        }

        return view('client.edit', compact('commande'));
    }

    public function update(Request $request, $id)
    {
        $commande = Commande::findOrFail($id);

        if ($commande->user_id !== Auth::id()) {
            abort(403, 'Accès interdit');
        }

        $validated = $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'phone' => 'required',
            'livraison' => 'required|in:surplace,domicile',
            'adresse' => 'nullable|string',
            'ville' => 'nullable|string',
            'menu_items' => 'nullable|array',
            'email' => 'required|email',
        ]);

        $menuPrices = [
            1 => 5.95, 2 => 14.95, 3 => 17.95,
            4 => 20.95, 5 => 12.95, 6 => 21.95
        ];

        $selectedItems = $validated['menu_items'] ?? [];
        $total = array_reduce($selectedItems, function ($sum, $id) use ($menuPrices) {
            return $sum + ($menuPrices[$id] ?? 0);
        }, 0);

        $commande->update([
            'first_name' => $validated['first_name'],
            'last_name' => $validated['last_name'],
            'phone' => $validated['phone'],
            'livraison' => $validated['livraison'],
            'adresse' => $validated['adresse'] ?? null,
            'ville' => $validated['ville'] ?? null,
            'menu_items' => json_encode($selectedItems),
            'total_price' => $total,
            'email' => Auth::user()->email,
        ]);

        return redirect()->route('commandes.index')->with('success', 'Commande mise à jour avec succès!');
    }

    public function destroy($id)
    {
        $commande = Commande::findOrFail($id);

        if ($commande->user_id !== Auth::id()) {
            abort(403, 'Accès interdit');
        }

        $commande->delete();

        return redirect()->route('commandes.index')->with('success', 'Commande supprimée avec succès.');
    }
}

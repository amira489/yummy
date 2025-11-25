<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;
use App\Models\Commande;
use App\Models\Conge;

class EmployeController extends Controller
{
    public function employees()
    {
        return view('employe.employe');
    }

    public function commandes()
    {
        $commandes = Commande::orderBy('created_at', 'desc')->get();
        return view('employe.commandes', compact('commandes'));
    }

    public function reservations()
    {
        $reservations = Booking::all();
        return view('employe.reservation', compact('reservations'));
    }

    public function create()
    {
        return view('employe.conge');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nom' => 'required|string|max:255',
            'prenom' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'type' => 'required|string',
            'date_debut' => 'required|date',
            'date_fin' => 'required|date|after_or_equal:date_debut',
            'motif' => 'nullable|string',
        ]);

        Conge::create([
            'nom' => $request->nom,
            'prenom' => $request->prenom,
            'email' => $request->email,
            'type' => $request->type,
            'date_debut' => $request->date_debut,
            'date_fin' => $request->date_fin,
            'motif' => $request->motif,
            'etat' => 'en_attente',
            'user_id' => auth()->id(),
        ]);

        return redirect()->back()->with('success', 'Votre demande de congé a été envoyée avec succès.');
    }

    public function mesDemandes()
    {
        $user = auth()->user();
        $conges = $user->conges()->get();

        return view('employe.demande', compact('conges'));
    }

    public function edit($id)
    {
        $conge = Conge::findOrFail($id);

        if (auth()->id() !== $conge->user_id) {
            abort(403, 'Accès non autorisé.');
        }

        return view('employe.edit', compact('conge'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'type' => 'required|string',
            'date_debut' => 'required|date',
            'date_fin' => 'required|date|after_or_equal:date_debut',
            'motif' => 'nullable|string',
        ]);

        $conge = Conge::findOrFail($id);

        if (auth()->id() !== $conge->user_id) {
            abort(403, 'Accès non autorisé.');
        }

        $conge->type = $request->type;
        $conge->date_debut = $request->date_debut;
        $conge->date_fin = $request->date_fin;
        $conge->motif = $request->motif;

        $conge->save();

        return redirect()->back()->with('success', 'Demande mise à jour avec succès.');
    }

    public function destroy($id)
    {
        $conge = Conge::findOrFail($id);

        if (auth()->id() !== $conge->user_id) {
            abort(403, 'Accès non autorisé.');
        }

        $conge->delete();

        return redirect()->back()->with('success1', 'Demande de congé supprimée avec succès.');
    }
}

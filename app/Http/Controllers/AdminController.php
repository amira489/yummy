<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Conge;
use App\Models\Commande;
use App\Models\Booking;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function index()
    {
        // Get statistics
        $totalEmployes = User::where('role', 'employe')->count();
        $totalCommandes = Commande::count();
        $totalReservations = Booking::count();

        // Get recent employees
        $recentEmployes = User::where('role', 'employe')
            ->latest()
            ->take(5)
            ->get();

        // Get pending vacation requests
        $pendingConges = Conge::where('etat', 'en_attente')
            ->with('user')
            ->latest()
            ->take(5)
            ->get();

        return view('admin.admin', compact(
            'totalEmployes',
            'totalCommandes',
            'totalReservations',
            'recentEmployes',
            'pendingConges'
        ));
    }

    public function users()
    {
        $users = User::all();
        return view('admin.users', compact('users'));
    }

    // Get statistics
    public function getStatistics()
    {
        $totalEmployes = User::where('role', 'employe')->count();
        $totalCommandes = Commande::count();
        $totalReservations = Booking::count();

        return response()->json([
            'totalEmployes' => $totalEmployes,
            'totalCommandes' => $totalCommandes,
            'totalReservations' => $totalReservations
        ]);
    }

    // Employee management
    public function employes()
    {
        $employes = User::where('role', 'employe')
            ->with('conges')
            ->get();

        return view('admin.employes.index', compact('employes'));
    }

    public function createEmploye()
    {
        return view('admin.employes.create');
    }

    public function storeEmploye(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8|confirmed',
            'role' => 'required|in:employe'
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'role' => $request->role
        ]);

        return redirect()->route('admin.admin')
            ->with('success', 'Employé créé avec succès');
    }

    public function editEmploye($id)
    {
        $employe = User::findOrFail($id);
        return view('admin.employes.edit', compact('employe'));
    }

    public function updateEmploye(Request $request, $id)
    {
        $employe = User::findOrFail($id);

        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $employe->id,
            'password' => 'nullable|min:8|confirmed',
            'role' => 'required|in:employe'
        ]);

        $employe->update([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password ? bcrypt($request->password) : $employe->password,
            'role' => $request->role
        ]);

        return redirect()->route('admin.admin')
            ->with('success', 'Employé mis à jour avec succès');
    }

    public function destroyEmploye($id)
    {
        $employe = User::findOrFail($id);
        $employe->delete();

        return redirect()->route('admin.admin')
            ->with('success', 'Employé supprimé avec succès');
    }

    public function conges()
    {
        $conges = Conge::with('user')
            ->latest()
            ->get();

        return view('admin.conges.index', compact('conges'));
    }

    public function approveConge($id)
    {
        $conge = Conge::findOrFail($id);
        $conge->etat = 'accepte';
        $conge->save();

        return redirect()->back()->with('success', 'Congé accepté avec succès');
    }

    public function rejectConge($id)
    {
        $conge = Conge::findOrFail($id);
        $conge->etat = 'refuse';
        $conge->save();

        return redirect()->back()->with('success', 'Congé refusé avec succès');
    }
}

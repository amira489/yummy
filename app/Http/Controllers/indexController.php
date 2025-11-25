<?php

namespace App\Http\Controllers;
use App\Models\Commande;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class indexController extends Controller
{
    public function index(){
        return view(('layouts.home'));
    }
    public function client(){
         $email = Auth::user()->email;

    // Récupérer les commandes du client connecté
    $commandes = Commande::where('email', $email)->get();

    return view('client.index', compact('commandes'));

    }

    public function menu()
    {
        return view('layouts.menu');
    }

}

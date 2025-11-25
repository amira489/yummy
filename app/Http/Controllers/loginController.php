<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use App\Models\User;

class LoginController extends Controller
{
    // Show login form
    public function showLoginForm()
    {
        if (Auth::check()) {
            $user = Auth::user();
            return match($user->role) {
                'admin' => redirect()->route('admin.admin'),
                'employe' => redirect()->route('employe'),
                default => redirect()->route('home')
            };
        }

        return view('auth.login');
    }

    // Handle login securely
    public function login(Request $request)
    {
        $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        $user = User::where('email', $request->email)->first();
        
        Log::info('Login attempt', [
            'email' => $request->email,
            'user_exists' => $user ? 'yes' : 'no',
        ]);

        if ($user) {
            // Debug: Afficher les informations de l'utilisateur
            $debug_info = [
                'user_found' => true,
                'user_id' => $user->id,
                'user_email' => $user->email,
                'user_role' => $user->role,
                'password_length' => strlen($request->password),
                'hash_length' => strlen($user->password)
            ];
            
            // Debug information
            $passwordMatch = Hash::check($request->password, $user->password);
            $debug_info['password_match'] = $passwordMatch;

            if ($passwordMatch) {
                Auth::login($user);
                $request->session()->regenerate();

                Log::info('User logged in successfully', [
                    'user_id' => $user->id,
                    'role' => $user->role
                ]);

                return match($user->role) {
                    'admin' => redirect()->route('admin.admin'),
                    'employe' => redirect()->route('employe'),
                    default => redirect()->route('home')
                };
            }
            
            // Si le mot de passe ne correspond pas, afficher plus d'informations
            return back()
                ->withErrors([
                    'email' => 'Email ou mot de passe incorrect.',
                    'debug' => json_encode($debug_info)
                ])
                ->withInput($request->only('email'));
        }

        return back()
            ->withErrors([
                'email' => 'Email ou mot de passe incorrect.',
                'debug' => 'Utilisateur non trouvé avec l\'email : ' . $request->email
            ])
            ->withInput($request->only('email'));
    }

    // Logout
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login');
    }

    // Show registration form
    public function showRegistrationForm()
    {
        return view('auth.register');
    }

    // Handle registration with password hashing
    public function perform(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|confirmed|min:6',
        ]);

        User::create([
            'name' => $request->name,
            'email' => strtolower($request->email),
            'password' => Hash::make($request->password), // sécurise le mot de passe
            'role' => 'client',
            'email_verified_at' => now(),
        ]);

        return redirect()->route('login')->with('success', 'Inscription réussie. Connectez-vous.');
    }
}

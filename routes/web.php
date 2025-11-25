<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CommandeController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\EmployeController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\AdminController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return redirect()->route('login');
});

// Login route
Route::get('/login', [loginController::class, 'showLoginForm'])->name('login');

Route::post('/login', [loginController::class, 'login'])->name('login.perform');

Route::get('/register', [loginController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [loginController::class, 'perform'])->name('register.perform');
Route::post('/logout', [loginController::class, 'logout'])->name('logout');

// Routes accessibles uniquement si connecté
Route::middleware('auth')->group(function () {

    // Admin routes with admin middleware
    Route::middleware('admin')->group(function () {
        Route::get('/admin', [AdminController::class, 'index'])->name('admin.admin');
        Route::get('/admin/employes', [AdminController::class, 'employes'])->name('admin.employes');
        Route::get('/admin/employes/create', [AdminController::class, 'createEmploye'])->name('admin.employes.create');
        Route::post('/admin/employes', [AdminController::class, 'storeEmploye'])->name('admin.employes.store');
        Route::get('/admin/employes/{id}/edit', [AdminController::class, 'editEmploye'])->name('admin.employes.edit');
        Route::put('/admin/employes/{id}', [AdminController::class, 'updateEmploye'])->name('admin.employes.update');
        Route::delete('/admin/employes/{id}', [AdminController::class, 'destroyEmploye'])->name('admin.employes.destroy');
        
        // Congés routes
        Route::get('/admin/conges', [AdminController::class, 'conges'])->name('admin.conges');
        Route::put('/admin/conges/{id}/approve', [AdminController::class, 'approveConge'])->name('admin.conges.approve');
        Route::put('/admin/conges/{id}/reject', [AdminController::class, 'rejectConge'])->name('admin.conges.reject');
    });

    // Page d'accueil après login
    Route::get('/home', [IndexController::class, 'index'])->name('home');
    
    // Menu page
    Route::get('/menu', [IndexController::class, 'menu'])->name('menu');
    Route::get('/client', [IndexController::class, 'client'])->name('client');

    // Employé dashboard et routes associées
    Route::get('/employe', [EmployeController::class, 'employees'])->name('employe');
    Route::get('/employe/commandes', [EmployeController::class, 'commandes'])->name('employe.commandes');
    Route::get('/employe/reservations', [EmployeController::class, 'reservations'])->name('employe.reservations');

    // Congé routes
    Route::get('/conges/create', [EmployeController::class, 'create'])->name('conges.create');
    Route::post('/conges', [EmployeController::class, 'store'])->name('conges.store');
Route::get('/mes-conges', [EmployeController::class, 'mesDemandes'])->name('conges.mesdemandes');    Route::get('/conges/{id}/edit', [employeController::class, 'edit'])->name('conges.edit');
    Route::delete('/conges/{id}', [EmployeController::class, 'destroy'])->name('conges.destroy');
    Route::put('/conges/{id}', [EmployeController::class, 'update'])->name('conges.update');


    // Commande routes pour clients
    Route::get('/commande/create', [CommandeController::class, 'create'])->name('commande.form');
    Route::post('/commande/store', [CommandeController::class, 'store'])->name('commande.store');
    Route::get('commandes', [CommandeController::class, 'index'])->name('commandes.index');
    Route::get('commandes/{id}/edit', [CommandeController::class, 'edit'])->name('commandes.edit');
    Route::put('commandes/{id}', [CommandeController::class, 'update'])->name('commandes.update');
    Route::delete('commandes/{id}', [CommandeController::class, 'destroy'])->name('commandes.destroy');


    // Booking routes
    Route::get('/booking/form', [BookingController::class, 'form'])->name('booking.form');
    Route::post('/booking/store', [BookingController::class, 'store'])->name('booking.store');

    // Admin routes
    Route::prefix('admin')->middleware(['auth', 'admin'])->group(function () {
        Route::get('/', [AdminController::class, 'index'])->name('admin.admin');
        
        // Employee management
        Route::get('/employes', [AdminController::class, 'employes'])->name('admin.employes');
        Route::get('/employes/create', [AdminController::class, 'createEmploye'])->name('admin.employes.create');
        Route::post('/employes', [AdminController::class, 'storeEmploye'])->name('admin.employes.store');
        Route::get('/employes/{id}/edit', [AdminController::class, 'editEmploye'])->name('admin.employes.edit');
        Route::put('/employes/{id}', [AdminController::class, 'updateEmploye'])->name('admin.employes.update');
        Route::delete('/employes/{id}', [AdminController::class, 'destroyEmploye'])->name('admin.employes.destroy');
        
        // Vacation request management
        Route::get('/conges', [AdminController::class, 'conges'])->name('admin.conges');
        Route::put('/conges/{id}/validate', [AdminController::class, 'validateConge'])->name('admin.conges.validate');
        Route::put('/conges/{id}/reject', [AdminController::class, 'rejectConge'])->name('admin.conges.reject');
    });

});

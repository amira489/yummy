<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

require __DIR__.'/vendor/autoload.php';
$app = require_once __DIR__.'/bootstrap/app.php';
$app->make(Illuminate\Contracts\Console\Kernel::class)->bootstrap();

echo "=== Structure de la table users ===\n";
$columns = Schema::getColumnListing('users');
print_r($columns);

echo "\n\n=== Utilisateurs existants ===\n";
$users = DB::table('users')->get();
foreach ($users as $user) {
    echo "ID: {$user->id}, Email: {$user->email}, Nom: {$user->name}, Rôle: " . ($user->role ?? 'non défini') . "\n";
}

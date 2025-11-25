<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\User;

class CreateUserSeeder extends Seeder
{
    public function run()
    {
        User::create([
            'name' => 'Employe1',
            'email' => 'employe@gmail.com',
            'role' => 'employe',
            'email_verified_at' => now(),
            'password' => Hash::make('monSuperMdp123'),
            'remember_token' => Str::random(10),
        ]);

        $this->command->info('Utilisateur Employe1 créé avec succès.');
    }
}

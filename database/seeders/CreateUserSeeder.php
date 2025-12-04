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
        // Create employee user if not exists
        if (!User::where('email', 'employe@gmail.com')->exists()) {
            User::create([
                'name' => 'Employe1',
                'email' => 'employe@gmail.com',
                'role' => 'employe',
                'email_verified_at' => now(),
                'password' => Hash::make('monSuperMdp123'),
                'remember_token' => Str::random(10),
            ]);
            $this->command->info('Employee user created: employe@gmail.com / monSuperMdp123');
        } else {
            $this->command->info('Employee user already exists');
        }

        // Create admin user if not exists
        if (!User::where('email', 'admin@yummy.com')->exists()) {
            User::create([
                'name' => 'Admin',
                'email' => 'admin@yummy.com',
                'role' => 'admin',
                'email_verified_at' => now(),
                'password' => Hash::make('admin123'),
                'remember_token' => Str::random(10),
            ]);
            $this->command->info('Admin user created: admin@yummy.com / admin123');
        } else {
            $this->command->info('Admin user already exists');
        }
    }
}

<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Create Administrator
        User::create([
            'name' => 'Oliver Reinking',
            'email' => 'admin@newspilot.de',
            'email_verified_at' => now(),
            'password' => Hash::make('12345678'),
            'is_admin' => true,
            'is_employee' => false,
            'is_customer' => true,
        ]);
    }
}

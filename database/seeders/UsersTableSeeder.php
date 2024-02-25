<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Menggunakan factory untuk membuat data palsu
        User::factory()->count(5)->create();

        // Atau langsung membuat data tanpa factory
        // User::create([
        //     'name' => 'John Doe',
        //     'email' => 'john@example.com',
        //     'password' => Hash::make('password'),
        //     // Tambahkan kolom lain sesuai kebutuhan
        // ]);
    }
}


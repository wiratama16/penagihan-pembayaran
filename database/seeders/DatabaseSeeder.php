<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        \App\Models\Admin::create([
            'username' => 'admin1',
            'nama_lengkap' => 'Imanuel Tegar Wiiratama',
            'email' => 'admin1@gmail.com',
            'no_telepon' => '123',
            'kata_sandi' => Hash::make('admin_teknik1'),
        ]);
    }
}

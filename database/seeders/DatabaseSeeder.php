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
     */
    public function run()
    {
        // Buat akun admin
        User::create([
            'nama' => 'Ghaida Fasya Yuthika Afifah',
            'username' => 'ghaida',
            'password' => Hash::make('admin12345'),
            'no_telp' => '081908915320', // Tambahkan kolom role jika perlu
            'role' => 'admin', // Tambahkan kolom role jika perlu
        ]);

        User::create([
            'nama' => 'M Fachriza Farhan',
            'username' => 'ichika',
            'password' => Hash::make('admin12345'),
            'no_telp' => '081908915320', // Tambahkan kolom role jika perlu
            'role' => 'customer', // Tambahkan kolom role jika perlu
        ]);

        // Tambahkan logika lainnya jika diperlukan
    }
}

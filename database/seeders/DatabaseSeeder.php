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
            'nama_admin' => 'Ghaida Fasya Yuthika Afifah',
            'username' => 'ghaida',
            'password' => Hash::make('admin12345'),
            'no_telp' => '081908915320', // Tambahkan kolom role jika perlu
        ]);

        // Tambahkan logika lainnya jika diperlukan
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Menjalankan seed database.
     *
     * @return void
     */
    public function run()
    {
        // Menyisipkan data ke dalam tabel 'admins'
        DB::table('admins')->insert([
            'nama_admin' => 'Cristina',
            'email' => 'ctina056@gmail.com',
            'password' => Hash::make('password_anda'), // Password di-hash
        ]);
    }
}


<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KonsumenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Insert data into 'konsumens' table
        DB::table('konsumens')->insert([
            [
                'kode_konsumen' => 'ID001',
                'nama_konsumen' => 'Cristina',
                'alamat' => 'Jungkat',
                'no_telepon' => '0812121212',
                'terakhir_pembelian' => '2024-06-30', 
            ],
        ]);
    }
}


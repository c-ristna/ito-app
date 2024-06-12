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
                'nama_konsumen' => 'Cristina',
                'alamat' => 'Jungkat',
                'no_telepon' => '0812121212',
                'terakhir_pembelian' => '2024-06-30', // Use ISO 8601 format for dates
            ],
        ]);
    }
}

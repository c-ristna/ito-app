<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProdukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('produks')->insert([
            [
                'nama_produk' => 'Puding',
                'harga' => '10.000',
                'stok' => '20',
                'deskripsi' => 'Dessert', 
                'status_produk' => 'Sisa 4',
            ],
        ]);
    }
}

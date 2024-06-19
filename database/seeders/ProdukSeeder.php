<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProdukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('produks')->insert([
            [
                'kode_produk' => 'IP001',
                'nama_produk' => 'Pudding',
                'harga' => 'Rp. 5.000',
                'stok' => '20',
                'deskripsi' => 'Tersedia rasa cokelat, taro, dan strawberry', 
                'status' => 'Sisa 3 rasa taro', 
            ],
        ]);
    }
}

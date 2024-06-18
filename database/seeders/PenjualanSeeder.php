<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenjualanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('penjualans')->insert([
            [
                'tanggal_penjualan' => '10/06/2024',
                'list_produk' => '5',
                'total_harga' => '100.000',
                'metode_pembayaran' => 'Cash', 
                'status_penjualan' => 'Terkirim',
            ],
        ]);
    }
}

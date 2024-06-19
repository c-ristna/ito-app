<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class KeuanganSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('keuangans')->insert([
            [
                'tanggal' => '18/06/2024',
                'kode_keuangan' => 'IK001',
                'pemasukan' => 'Rp. 1.200.000',
                'pengeluaran' => 'Rp. 200.000',
                'saldo' => 'Rp. 1.000.000',
            ],
        ]);
    }
}

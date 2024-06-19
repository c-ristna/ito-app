<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKeuangansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('keuangans', function (Blueprint $table) {
            $table->id(); 
            $table->date('tanggal');
            $table->string('kode_keuangan');
            $table->string('pemasukan');
            $table->string('pengeluaran');
            $table->string('saldo');
            $table->string('total');
            $table->timestamps();

        //    $table->foreignId('penjualan_id')->constrained('penjualan');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('keuangans');
    }
}
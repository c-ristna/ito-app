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
            $table->float('pemasukan');
            $table->float('pengeluaran');
            $table->float('saldo');
            //$table->string('total');
            $table->timestamps();
            
            $table->unsignedBigInteger('penjualans_id');
            $table->foreign('penjualans_id')->references('id')->on('penjualans');
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
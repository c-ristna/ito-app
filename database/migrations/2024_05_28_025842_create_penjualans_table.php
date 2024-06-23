<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePenjualansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penjualans', function (Blueprint $table) {
            $table->id();
            $table->date('tanggal');
            $table->string('kode_penjualan', 30);
            $table->text('list_produk')->nullable(); // Mengubah tipe data menjadi text untuk menghindari eror konversi array ke string
            $table->float('total_harga');
            $table->string('metode_pembayaran', 20);
            $table->string('status', 20);
            $table->unsignedBigInteger('konsumens_id');
            //$table->unsignedBigInteger('produks_id');
            $table->timestamps();

            // Define foreign keys
            $table->foreign('konsumens_id')->references('id')->on('konsumens');
            //$table->foreign('produks_id')->references('id')->on('produks');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('penjualans');
    }
}
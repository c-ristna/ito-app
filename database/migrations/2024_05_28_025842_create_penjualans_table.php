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
            $table->date('tanggal_penjualan');
            $table->json('list_produk');
            $table->decimal('total_harga', 20);
            $table->string('metode_pembayaran', 20);
            $table->string('status_penjualan', 20);
            $table->timestamps();

            // Define foreign keys
            $table->foreignId('produk_id')->constrained('produks'); // Note the plural form 'produks'
            $table->foreignId('konsumen_id')->constrained('konsumen'); // Note the plural form 'konsumens'
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

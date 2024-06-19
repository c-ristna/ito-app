<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProduksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produks', function (Blueprint $table) {
            $table->id();
            $table->string('kode_produk')->unique(); // Membuat kode produk unik dan tidak nullable
            $table->string('nama_produk')->nullable();
            $table->decimal('harga', 15, 2)->nullable(); // Menyesuaikan format harga dengan presisi yang lebih baik
            $table->integer('stok')->unsigned()->default(0); // Menetapkan nilai default untuk stok
            $table->text('deskripsi')->nullable();
            $table->string('status')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('produks');
    }
}

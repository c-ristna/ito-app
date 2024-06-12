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
            $table->date('tanggal_keuangan');
            $table->decimal('pemasukan', 20);
            $table->decimal('pengeluaran', 20);
            $table->decimal('saldo', 20);
            $table->decimal('total', 20);
            
            $table->timestamps();

<<<<<<< HEAD
            $table->foreignId('id_penjualans')->references('id')->on('penjualans');
=======
           // $table->foreignId('penjualan_id')->constrained('penjualan');
>>>>>>> 66f4414ba9394b9ad259b9dc73dbd633e5e3b42f
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
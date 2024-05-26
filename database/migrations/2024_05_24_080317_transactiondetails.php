<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('transactionDetails', function (Blueprint $table) {
            $table->id();
            $table->text('idTransaksi');
            $table->text('idProduk');
            $table->string('image');
            $table->string('name_produk', 200);
            $table->integer('jumlah')->unsigned();
            $table->decimal('harga', 10, 2);
            $table->string('metode');
            $table->string('alamat', 255);
            $table->timestamps();


        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};

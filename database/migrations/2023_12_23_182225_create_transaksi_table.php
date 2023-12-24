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
        Schema::create('transaksi', function (Blueprint $table) {
            $table->id('id_transaksi');
            $table->string('durasi_sewa');
            $table->string('nama_pemegang_kartu');
            $table->bigInteger('nomor_kartu');
            $table->string('bukti_pembayaran');
            $table->bigInteger('total_bayar');
            $table->unsignedBigInteger('id_customer');
            $table->unsignedBigInteger('id_sewa');
            $table->unsignedBigInteger('id_mobil');
            $table->timestamps();

            // $table->foreign('id_customer')->references('id_customer')->on('customer');
            $table->foreign('id_sewa')->references('id_sewa')->on('sewa');
            // $table->foreign('id_mobil')->references('id_mobil')->on('cars');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transaksi');
    }
};

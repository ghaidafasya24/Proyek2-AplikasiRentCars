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
        Schema::create('sewa', function (Blueprint $table) {
            $table->id('id_sewa');
            $table->string('tanggal_sewa');
            $table->string('tanggal_pengembalian');
            $table->string('waktu_pengembalian');
            $table->string('lokasi_pengambilan');
            $table->unsignedBigInteger('id_customer');
            $table->unsignedBigInteger('id_mobil');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sewa');
    }
};

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
        Schema::create('customer', function (Blueprint $table) {
            $table->id('id_customer');
            $table->string('nama_customer');
            $table->bigInteger('no_telp');
            $table->string('ktp');
            $table->string('email');
            $table->text('alamat');
            $table->string('nama_orang_terdekat');
            $table->string('email_darurat');
            $table->bigInteger('no_telp_darurat');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customer');
    }
};

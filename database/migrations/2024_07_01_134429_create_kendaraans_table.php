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
        Schema::create('kendaraans', function (Blueprint $table) {
            $table->id();
            $table->string('merk');
            $table->string('pemilik');
            $table->string('nopol');
            $table->year('thn_beli');
            $table->text('deskripsi');
            $table->unsignedBigInteger('jenis_kendaraan');
            $table->integer('kapasitas_kursi');
            $table->integer('rating');
            $table->timestamps();

            $table->foreign('jenis_kendaraan')->references('id')->on('jenis')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kendaraans');
    }
};

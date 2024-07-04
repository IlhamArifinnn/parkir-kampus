<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('kendaraans', function (Blueprint $table) {
            $table->id();
            $table->string('merk', 30);
            $table->string('pemilik', 40);
            $table->string('nopol', 20);
            $table->integer('thn_beli');
            $table->string('deskripsi', 200);
            $table->foreignId('jenis_kendaraan_id')->constrained('jenis')->onDelete('cascade');
            $table->integer('kapasitas_kursi');
            $table->integer('rating');
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
        Schema::dropIfExists('kendaraans');
    }
};

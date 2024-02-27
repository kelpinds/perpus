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
        Schema::create('buku',function(Blueprint $tabel){
            $tabel->integer('bukuid')->autoIncrement();
            $tabel->string('judul', 100);
            $tabel->string('penulis', 100);
            $tabel->string('penerbit', 100);
            $tabel->integer('tahun_terbit');
            $tabel->integer('stok');
            $tabel->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        schema::dropIfExists('buku');
    }
};

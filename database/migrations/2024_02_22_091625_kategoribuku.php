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
        Schema::create('kategoti',function(Blueprint $tabel){
            $tabel->integer('kategoriid')->autoIncrement();
            $tabel->string('nama_kategori', 100);
            $tabel->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        schema::dropIfExists('kategori');
    }
};

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
        Schema::create('ulasanbuku',function(Blueprint $tabel){
            $tabel->integer('ulasanid')->autoIncrement();
            $tabel->integer('userid');
            $tabel->integer('bukuid');
            $tabel->text('ulasan');
            $tabel->integer('rating',);
            $tabel->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ulasanbuku');
    }
};

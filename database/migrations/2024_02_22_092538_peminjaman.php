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
        Schema::create('peminjaman',function(Blueprint $tabel){
            $tabel->integer('peminjamanid')->autoIncrement();
            $tabel->integer('userid');
            $tabel->integer('bukuid');
            $tabel->date('tanggalpeminjaman');
            $tabel->date('tanggalpengambalian');
            $tabel->timestamps();
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

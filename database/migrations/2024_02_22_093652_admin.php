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
        Schema::create('admin',function(Blueprint $tabel){
            $tabel->integer('id')->autoIncrement();
            $tabel->string('email', 100);
            $tabel->string('username', 100);
            $tabel->string('password', 100);
            $tabel->string('nama_lengkap');
            $tabel->enum('status',['admin','petugas']);
            $tabel->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        schema::dropIfExists('admin');
    }
};

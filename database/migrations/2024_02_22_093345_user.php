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
        Schema::create('user',function(Blueprint $tabel){
            $tabel->integer('userid')->autoIncrement();
            $tabel->string('username', 100);
            $tabel->string('password', 100);
            $tabel->string('nama_lengkap', 100);
            $tabel->text('alamat');
            $tabel->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user');
    }
};

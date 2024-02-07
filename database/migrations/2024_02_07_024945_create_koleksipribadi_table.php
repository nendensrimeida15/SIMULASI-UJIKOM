<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up()
    {
        Schema::create('koleksipribadi', function (Blueprint $table) {
            $table->id();
<<<<<<< HEAD:database/migrations/2024_02_07_024945_create_koleksipribadi_table.php
            $table->integer('KoleksiID');
            $table->integer('UserID');
            $table->integer('BukuID');
=======
            $table->string('username');
            $table->string('password');
            $table->string('email')->unique();
            $table->string('nama_lengkap');
            $table->text('alamat');
            $table->enum('role', ['administrator', 'petugas', 'peminjam']);
            $table->rememberToken();
>>>>>>> e90c8959c2aefec595ca5a5596c023abf37096c7:database/migrations/2014_10_12_000000_create_users_table.php
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
        Schema::dropIfExists('koleksipribadi');
    }
};

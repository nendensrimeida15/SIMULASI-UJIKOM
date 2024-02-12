<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
<<<<<<<< HEAD:database/migrations/2024_02_04_033837_create_kategoribuku_relasi_table.php
        Schema::create('kategoribuku_relasi', function (Blueprint $table) {
            $table->id();
            $table->foreignId('buku_id')->constrained('buku');
            $table->foreignId('kategori_id')->constrained('kategori_buku');
========
        Schema::create('kategoribuku', function (Blueprint $table) {
            $table->id();
            $table->string('nama_kategori');
>>>>>>>> 7dcc9b9c646c5a679e692c7a284e5991f979ac36:database/migrations/2024_02_10_004539_create_kategoribukus_table.php
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
<<<<<<<< HEAD:database/migrations/2024_02_04_033837_create_kategoribuku_relasi_table.php
        Schema::dropIfExists('kategoribuku_relasi');
========
        Schema::dropIfExists('kategoribuku');
>>>>>>>> 7dcc9b9c646c5a679e692c7a284e5991f979ac36:database/migrations/2024_02_10_004539_create_kategoribukus_table.php
    }
};

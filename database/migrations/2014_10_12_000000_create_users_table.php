<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
<<<<<<< HEAD
            $table->String('UserName');
            $table->String('Password');
            $table->String('Email')->unique();
            $table->String('NamaLengkap');
            $table->Enum('Role', ['Administrator', 'Petugas', 'Peminjam']);
            $table->RememberToken();
            $table->TimesTamps();
        
=======
            $table->string('Username');
            $table->string('Password');
            $table->string('Email')->unique();
            $table->string('NamaLengkap');
            $table->text('Alamat');
            $table->enum('Role', ['administrator', 'petugas', 'peminjam']);
            $table->rememberToken();
            $table->timestamps();
>>>>>>> 1f2ac1a95ec0b2a3465757d822118dcd76596763
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
};

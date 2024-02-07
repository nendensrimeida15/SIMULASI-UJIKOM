<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
<<<<<<< HEAD

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        User::create([
            'username' => 'cica',
            'email' => 'cicapurnamasari@gmail.com',
            'password' => bcrypt('password'),
            'nama_lengkap' => 'cica',
            'alamat' => 'Subang',
            'namerole' => 'administrator',
=======
        User::create([
           'username' => 'nenden',
           'password' => bcrypt('12345678'),
           'email' => 'nenden@gmail.com',
           'nama_lengkap' => 'nenden',
           'role' => 'administrator',
           'alamat' => 'subang',
           
            
>>>>>>> 05ca72caf3eacdaf840128d3f0631d4c89d0b21f
        ]);
    }
}

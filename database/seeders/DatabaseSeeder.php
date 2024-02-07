<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        User::create([
           'username' => 'rik',
           'password' => bcrypt('12345'),
           'email' => '1@gmail.com',
           'namaLengkap' => 'rik',
           'role' => 'administrator'
           
            
        ]);
    }
}

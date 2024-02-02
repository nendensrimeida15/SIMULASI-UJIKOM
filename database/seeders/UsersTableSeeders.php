<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\DSupport\Facades\DB;
use Illuminate\DSupport\Facades\Hash;

class UsersTableSeeders extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name'=> 'nenden',
            'email'=> 'nendensrmda05@example.com',
            'password'=> Hash::make('123456')
        ]);
    }
}

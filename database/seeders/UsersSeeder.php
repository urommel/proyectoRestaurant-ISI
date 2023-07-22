<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert([
            [
                'name' => 'Administrador',
                'email' => 'admin@test.com',
                'email_verified_at' => NULL,
                'password' => bcrypt('password'),
                'remember_token' => NULL,
                'created_at' => '2021-06-25 22:21:11',
                'updated_at' => '2021-06-25 23:57:13',
            ]
        ]);
    }
}

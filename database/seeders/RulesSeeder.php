<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RulesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('roles')->insert([
            [
            'name' => 'Admin del Sistema',
            'guard_name' => 'web',
            ],
            [
            'name' => 'Jefe del Personal',
            'guard_name' => 'web',
            ],
            [
            'name' => 'Mesero',
            'guard_name' => 'web',
            ],
            [
            'name' => 'Cocinero',
            'guard_name' => 'web',
            ],
            [
            'name' => 'Cajero',
            'guard_name' => 'web',
            ],
        ]);
    }
}

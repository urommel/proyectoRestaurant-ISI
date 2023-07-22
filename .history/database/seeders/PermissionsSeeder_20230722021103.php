<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('permissions')->insert([
            ['name' => 'ver-rol', 'guard_name' => 'web'],
            ['name' => 'crear-rol', 'guard_name' => 'web'],
            ['name' => 'editar-rol', 'guard_name' => 'web'],
            ['name' => 'borrar-rol', 'guard_name' => 'web'],

            ['name' => 'ver-usuario', 'guard_name' => 'web'],
            ['name' => 'crear-usuario', 'guard_name' => 'web'],
            ['name' => 'editar-usuario', 'guard_name' => 'web'],
            ['name' => 'borrar-usuario', 'guard_name' => 'web'],

            ['name' => 'ver-personal', 'guard_name' => 'web'],
            ['name' => 'crear-personal', 'guard_name' => 'web'],
            ['name' => 'editar-personal', 'guard_name' => 'web'],
            ['name' => 'borrar-personal', 'guard_name' => 'web']

            
        ]);
    }
}

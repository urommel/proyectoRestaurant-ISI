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

            //Personal

            ['name' => 'ver-personal', 'guard_name' => 'web'],
            ['name' => 'crear-personal', 'guard_name' => 'web'],
            ['name' => 'editar-personal', 'guard_name' => 'web'],
            ['name' => 'borrar-personal', 'guard_name' => 'web'],

            ['name' => 'ver-horario', 'guard_name' => 'web'],
            ['name' => 'crear-horario', 'guard_name' => 'web'],
            ['name' => 'editar-horario', 'guard_name' => 'web'],
            ['name' => 'borrar-horario', 'guard_name' => 'web'],

            ['name' => 'ver-asistencia', 'guard_name' => 'web'],
            ['name' => 'crear-asistencia', 'guard_name' => 'web'],
            ['name' => 'editar-asistencia', 'guard_name' => 'web'],
            ['name' => 'borrar-asistencia', 'guard_name' => 'web'],

            //Comanda

            ['name' => 'ver-mesa', 'guard_name' => 'web'],
            ['name' => 'crear-mesa', 'guard_name' => 'web'],
            ['name' => 'editar-mesa', 'guard_name' => 'web'],
            ['name' => 'borrar-mesa', 'guard_name' => 'web'],

            ['name' => 'ver-cliente', 'guard_name' => 'web'],
            ['name' => 'crear-cliente', 'guard_name' => 'web'],
            ['name' => 'editar-cliente', 'guard_name' => 'web'],
            ['name' => 'borrar-cliente', 'guard_name' => 'web'],

            ['name' => 'ver-plato', 'guard_name' => 'web'],
            ['name' => 'crear-plato', 'guard_name' => 'web'],
            ['name' => 'editar-plato', 'guard_name' => 'web'],
            ['name' => 'borrar-plato', 'guard_name' => 'web'],

            ['name' => 'ver-categoria', 'guard_name' => 'web'],
            ['name' => 'crear-categoria', 'guard_name' => 'web'],
            ['name' => 'editar-categoria', 'guard_name' => 'web'],
            ['name' => 'borrar-categoria', 'guard_name' => 'web'],

            ['name' => 'ver-tipo', 'guard_name' => 'web'],
            ['name' => 'crear-tipo', 'guard_name' => 'web'],
            ['name' => 'editar-tipo', 'guard_name' => 'web'],
            ['name' => 'borrar-tipo', 'guard_name' => 'web'],

            ['name' => 'ver-producto', 'guard_name' => 'web'],
            ['name' => 'crear-producto', 'guard_name' => 'web'],
            ['name' => 'editar-producto', 'guard_name' => 'web'],
            ['name' => 'borrar-producto', 'guard_name' => 'web'],

            ['name' => 'ver-comanda', 'guard_name' => 'web'],
            ['name' => 'crear-comanda', 'guard_name' => 'web'],
            ['name' => 'editar-comanda', 'guard_name' => 'web'],
            ['name' => 'borrar-comanda', 'guard_name' => 'web'],

            ['name' => 'ver-detallecomanda', 'guard_name' => 'web'],
            ['name' => 'crear-detallecomanda', 'guard_name' => 'web'],
            ['name' => 'editar-detallecomanda', 'guard_name' => 'web'],
            ['name' => 'borrar-detallecomanda', 'guard_name' => 'web'],

            ['name' => 'ver-distrito', 'guard_name' => 'web'],
            ['name' => 'crear-distrito', 'guard_name' => 'web'],
            ['name' => 'editar-distrito', 'guard_name' => 'web'],
            ['name' => 'borrar-distrito', 'guard_name' => 'web'],

            ['name' => 'ver-provincia', 'guard_name' => 'web'],
            ['name' => 'crear-provincia', 'guard_name' => 'web'],
            ['name' => 'editar-provincia', 'guard_name' => 'web'],
            ['name' => 'borrar-provincia', 'guard_name' => 'web'],

            ['name' => 'ver-tipocliente', 'guard_name' => 'web'],
            ['name' => 'crear-tipocliente', 'guard_name' => 'web'],
            ['name' => 'editar-tipocliente', 'guard_name' => 'web'],
            ['name' => 'borrar-tipocliente', 'guard_name' => 'web']
        ]);
    }
}

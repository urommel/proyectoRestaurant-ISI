<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PersonalsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        // insertar varios datos en la tabla users

        DB::table('personals')->insert(
            [
                [
                    'nombre' => 'Administrador',
                    'apellido' => 'del Sistema',
                    'cedula' => '00000000000',
                    'telefono' => '00000000000',
                    'direccion' => '00000000000',
                    'email' => ''
                ]
            ]
        );
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ClientesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        (1, 1, '73772919', 'José Sebastián', 'Arce Machuca', '2023-07-17 02:31:15', '2023-07-17 02:31:15'),
(2, 1, '73772918', 'Rosymar', 'Arce Machuca', '2023-07-17 03:01:00', '2023-07-17 03:01:00');

        DB::table('clientes')->insert(
            [
                'id' => 1,
                'id_tipocliente' => 1,
                'dni' => '73772919',
                'nombres' => 'José Sebastián',
                'apellidos' => 'Arce Machuca',
                'created_at' => '2023-07-17 02:31:15',
                'updated_at' => '2023-07-17 02:31:15'
            ],
            [
                'id' => 2,
                'id_tipocliente' => 1,
                'dni' => '73772918',
                'nombres' => 'Rosymar',
                'apellidos' => 'Arce Machuca',
                'created_at' => '2023-07-17 03:01:00',
                'updated_at' => '2023-07-17 03:01:00'
            ]


        );
        }
    }


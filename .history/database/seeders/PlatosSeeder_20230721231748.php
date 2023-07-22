<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PlatosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('platos')->insert(
            [
                [
                    'idPlato' => 1,
                    'nombre' => 'Cafe',
                    'precio' => 1.5,
                    'categoria_id' => 1,
                    'created_at' => '2023-06-26 06:40:12',
                    'updated_at' => '2023-06-26 06:40:12'
                ],
                [
                    'id' => 2,
                    'nombre' => 'Chocolate Caliente',
                    'precio' => 1.5,
                    'categoria_id' => 1,
                    'created_at' => '2023-06-28 06:49:14',
                    'updated_at' => '2023-06-28 06:49:14'
                ],
                [
                    'id' => 3,
                    'nombre' => 'Arroz con Pato',
                    'precio' => 15,
                    'categoria_id' => 2,
                    'created_at' => '2023-07-16 03:33:47',
                    'updated_at' => '2023-07-16 03:33:47'
                ]
            ]
        );
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        DB::table('categorias')->insert(
            [
                [
                'id' => 1,
                'categoria' => 'Desayuno',
                'descripcion' => 'para las mañanas pe',
                'created_at' => '2023-06-26 06:26:59',
                'updated_at' => '2023-06-26 06:26:59'
                ],
                [
                    'id' => 2,
                    'categoria' => 'Almuerzo',
                    'descripcion' => 'pa la tarde pe',
                    'created_at' => '2023-06-26 08:10:31',
                    'updated_at' => '2023-06-26 08:10:31'
                ]
            ]
        );
    }
}

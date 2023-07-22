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

        INSERT INTO `platos` (`idPlato`, `nombre`, `precio`, `idCategoria`, `created_at`, `updated_at`) VALUES
(1, 'Cafe', 1.5, 1, '2023-06-26 06:40:12', '2023-06-26 06:40:12'),
(2, 'chocolate caliente', 1.5, 1, '2023-06-28 06:49:14', '2023-06-28 06:49:14'),
(3, 'arroz con pato', 15, 2, '2023-07-16 03:33:47', '2023-07-16 03:33:47');

        DB::table('platos')->insert(
            [
                'id' => 1,
                'nombre' => 'Cafe',
                'precio' => 1.5,
                'categoria_id' => 1,
                'created_at' => '2023-06-26 06:40:12',
                'updated_at' => '2023-06-26 06:40:12'
            ],
            [
                'id' => 2,
                'nombre' => 'chocolate caliente',
                'precio' => 1.5,
                'idCategoria' => 1,
                'created_at' => '2023-06-28 06:49:14',
                'updated_at' => '2023-06-28 06:49:14'
            ],
            [
                'id' => 3,
                'nombre' => 'arroz con pato',
                'precio' => 15,
                'idCategoria' => 2,
                'created_at' => '2023-07-16 03:33:47',
                'updated_at' => '2023-07-16 03:33:47'
            ]
        );
    }

}

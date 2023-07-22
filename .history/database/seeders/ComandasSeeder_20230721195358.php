<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ComandasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        (1, 1, 1, '2023-06-25', 'PAGADO', '2023-06-26 09:52:03', '2023-07-16 03:39:46'),
(10, 1, 1, '2023-07-17', 'SIN PAGAR', '2023-07-17 10:16:14', '2023-07-17 10:16:14');

        DB::table('comandas')->insert(
            [
                'id' => 1,
                'id_cliente' => 1,
                'id_mesa' => 1,
                'fecha' => '2023-06-25',
                'estado' => 'PAGADO',
                'created_at' => '2023-06-26 09:52:03',
                'updated_at' => '2023-07-16 03:39:46'
            ],
            [
                'id' => 2,
                'id_cliente' => 1,
                'id_mesa' => 1,
                'fecha' => '2023-06-25',
                'estado' => 'PAGADO',
                'created_at' => '2023-06-26 09:52:03',
                'updated_at' => '2023-07-16 03:39:46'
            ],
            [
                'id' => 3,
                'id_cliente' => 1,
                'id_mesa' => 1,
                'fecha' => '2023-06-25',
                'estado' => 'PAGADO',
                'created_at' => '2023-06-26 09:52:03',
                'updated_at' => '2023-07-16 03:39:46'
            ],
            [
                'id' => 4,
                'id_cliente' => 1,
                'id_mesa' => 1,
                'fecha' => '2023-06-25',
                'estado' => 'PAGADO',
                'created_at' => '2023-06-26 09:52:03',
                'updated_at' => '2023-07-16 03:39:46'
            ],
            [
                'id' => 5,
                'id_cliente' => 1,
                'id_mesa' => 1,
                'fecha' => '2023-06-25',
                'estado' => 'PAGADO',
                'created_at' => '2023-06-26 09:52:03',
                'updated_at' => '2023-07-16 03:39:46'
            ]

        );
    }
}

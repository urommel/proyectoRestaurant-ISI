<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DetalleProductosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('detalleproductos')->insert(
            [
                [
                    'id' => 1,
                    'comanda_id' => 1,
                    'producto_id' => 1,
                    'precio' => 1.5,
                    'cantidad' => 15,
                    'created_at' => '2023-06-29 09:03:48',
                    'updated_at' => '2023-06-29 09:03:48'
                ],
                // [
                //     'id' => 2,
                //     'comanda_id' => 4,
                //     'producto_id' => 1,
                //     'precio' => 1.6,
                //     'cantidad' => 3,
                //     'created_at' => '2023-07-17 07:37:46',
                //     'updated_at' => '2023-07-17 07:37:46'
                // ],
                [
                    'id' => 2,
                    'comanda_id' => 10,
                    'producto_id' => 1,
                    'precio' => 12,
                    'cantidad' => 1,
                    'created_at' => '2023-07-17 10:29:41',
                    'updated_at' => '2023-07-17 10:29:41'
                ],
            ]
        );
    }
}

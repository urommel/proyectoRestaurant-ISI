<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DetalleComandasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        (1, 1, 1.5, 15, '2023-06-29 09:03:48', '2023-06-29 09:03:48'),
(10, 1, 23, 2, '2023-07-17 10:27:52', '2023-07-17 10:27:52');

        DB::table('detallecomandas')->insert(
            [
                'id' => 1,
                'id_comanda' => 1,
                'idPlato'
                'precio' => 1.5,
                'cantidad' => 15,
                'created_at' => '2023-06-29 09:03:48',
                'updated_at' => '2023-06-29 09:03:48'
            ],
            [
                'id' => 10,
                'id_comanda' => 1,
                'precio' => 1,
                'cantidad' => 2,
                'created_at' => '2023-07-17 10:27:52',
                'updated_at' => '2023-07-17 10:27:52'
            ],
        );

    }
}

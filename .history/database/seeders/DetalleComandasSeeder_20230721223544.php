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
        DB::table('detallecomandas')->insert(
            [
            [
                'id' => 1,
                'comandas_id' => 1,
                'platos_id' => 1,
                'precio' => 1.5,
                'cantidad' => 15,
                'created_at' => '2023-06-29 09:03:48',
                'updated_at' => '2023-06-29 09:03:48'
            ],
            [
                'id' => 10,
                'comandas_id' => 1,
                'platos_id' => 1,
                'precio' => 23,
                'cantidad' => 2,
                'created_at' => '2023-07-17 10:27:52',
                'updated_at' => '2023-07-17 10:27:52'
            ]
            ]
        );
    }
}

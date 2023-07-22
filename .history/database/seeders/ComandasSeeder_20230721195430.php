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
                'estado' => 'SIN PAGAR',
                'created_at' => '2023-06-26 09:52:03',
                'updated_at' => '2023-07-16 03:39:46'
            ],
        );
    }
}

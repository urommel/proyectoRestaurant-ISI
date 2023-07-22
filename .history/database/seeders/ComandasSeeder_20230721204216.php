<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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
                'comanda_id' => 1,
                'mesa_id' => 1,
                'dni' => 1,
                'fecha' => '2023-06-25',
                'estado' => 'PAGADO',
                'created_at' => '2023-06-26 09:52:03',
                'updated_at' => '2023-07-16 03:39:46'
            ],
            [
                'id' => 10,
                'comanda_id' => 1,
                'mesa_id' => 1,
                'fecha' => '2023-06-25',
                'estado' => 'SIN PAGAR',
                'created_at' => '2023-06-26 09:52:03',
                'updated_at' => '2023-07-16 03:39:46'
            ],
        );
    }
}

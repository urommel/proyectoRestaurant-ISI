<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TipoClientesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        DB::table('tipoclientes')->insert(
            [
                []'id' => 1,
                'nombre' => 'Natural',
                'created_at' => '2023-07-17 02:31:15',
                'updated_at' => '2023-07-17 02:31:15'
            ],
            [
                'id' => 2,
                'nombre' => 'Juridica',
                'created_at' => '2023-07-17 03:01:00',
                'updated_at' => '2023-07-17 03:01:00'
            ]
        );
    }
}

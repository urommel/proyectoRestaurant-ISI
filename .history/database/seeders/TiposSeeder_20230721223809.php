<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TiposSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        DB::table('tipos')->insert(
            [
                [
                    'id' => 1,
                    'tipo' => 'bebida',
                    'descripcion' => 'gaseosa',
                    'created_at' => '2023-07-01 08:51:01',
                    'updated_at' => '2023-07-01 08:51:01'
                ]
            ]
        );
    }
}

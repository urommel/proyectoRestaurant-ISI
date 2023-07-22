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

        INSERT INTO `tipos` (`idTipo`, `tipo`, `descripcion`, `created_at`, `updated_at`) VALUES
(1, 'bebida', 'gaseosa', '2023-07-01 08:51:01', '2023-07-01 08:51:01');

        DB::insert('tipos', [1, 'Dayle'])
    }
}

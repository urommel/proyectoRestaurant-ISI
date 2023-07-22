<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MesasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        INSERT INTO `mesas` (`id`, `nombre`, `estado`, `created_at`, `updated_at`) VALUES
(1, 'Mesa 1', 'Abierta', '2023-07-17 02:36:46', '2023-07-17 02:36:46');

DB::table('mesas')->insert(
    [
        'id' => 1,
        'nombre' => 'Mesa 1',
        'estado' => 'Abierta',
        'created_at' => '2023-07-17 02:36:46',
        'updated_at' => '2023-07-17 02:36:46'
    ]
);
    }
}

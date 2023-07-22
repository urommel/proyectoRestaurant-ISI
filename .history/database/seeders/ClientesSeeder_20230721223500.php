<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClientesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('clientes')->insert(
            [
            [
                'id' => 1,
                'tipoclientes_id' => 1,
                'documento' => '73772919',
                'nombre' => 'José Sebastián',
                'apellido' => 'Arce Machuca',
                'created_at' => '2023-07-17 02:31:15',
                'updated_at' => '2023-07-17 02:31:15'
            ],
            [
                'id' => 2,
                'tipoclientes_id' => 1,
                'documento' => '73772918',
                'nombre' => 'Rosymar',
                'apellido' => 'Arce Machuca',
                'created_at' => '2023-07-17 03:01:00',
                'updated_at' => '2023-07-17 03:01:00'
            ]
        );
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('productos')->insert(
            [
            [
                'id' => 1,
                'nombre' => 'coca cola',
                'descripcion' => 'gase',
                'medida' => 'litros',
                'stock' => 12,
                'tipo_id' => 1,
                'created_at' => '2023-07-01 08:51:40',
                'updated_at' => '2023-07-01 08:51:40',
                'precio' => 2.5
            ]
        );

    }
}

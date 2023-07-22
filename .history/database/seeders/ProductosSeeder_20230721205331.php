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
        INSERT INTO `productos` (`idproducto`, `nombre`, `descripcion`, `medida`, `stock`, `idTipo`, `created_at`, `updated_at`, `precio`) VALUES
(1, 'coca cola', 'gase', 'litros', 12, 1, '2023-07-01 08:51:40', '2023-07-01 08:51:40', 2.5);

        DB::table('productos')->insert(
            
        );

    }
}

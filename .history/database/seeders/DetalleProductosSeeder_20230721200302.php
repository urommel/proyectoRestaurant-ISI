<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DetalleProductosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        INSERT INTO `detalleproductos` (`idComanda`, `idProducto`, `precio`, `cantidad`, `created_at`, `updated_at`) VALUES
(1, 1, 2.5, 3, '2023-07-01 08:56:47', '2023-07-01 08:56:47'),
(4, 1, 1.6, 3, '2023-07-17 07:37:46', '2023-07-17 07:37:46'),
(10, 1, 12, 1, '2023-07-17 10:29:41', '2023-07-17 10:29:41');

        DB::table('detalleproducto')->insert(
            [
                'id' => 1,
                'id_comanda' => 1,
                'idProducto' => 1,
                'precio' => 1.5,
                'cantidad' => 15,
                'created_at' => '2023-06-29 09:03:48',
                'updated_at' => '2023-06-29 09:03:48'
            ],
            [
                'id' => 2
        );
    }
}

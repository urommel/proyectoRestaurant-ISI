<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoriasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        (1, 'Desayuno', 'para las mañanas pe', '2023-06-26 06:26:59', '2023-06-26 06:26:59'),
(2, 'Almuerzo', 'pa la tarde pe', '2023-06-26 08:10:31', '2023-06-26 08:10:31');

        DB::table('categorias')->insert([
            'id' => 1,
            'nombre' => 'Desayuno',
            'descripcion' => 'para las mañanas pe',
            'created_at' => '2023-06-26 06:26:59',
            'updated_at' => '2023-06-26 06:26:59'
        ],
        

    );
    }
}

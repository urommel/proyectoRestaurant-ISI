<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // insertar datos en la tabla role

        $this->call(RulesSeeder::class);

        // insertar datos en la tabla permissions

        $this->call(PermissionsSeeder::class);

        // insertar varios datos en la tabla users

        $this->call(UsersSeeder::class);

        // insertar datos en la tabla role_has_permissions

        $this->call(Role_has_PermissionsSeeder::class);

        // // insertar datos en la tabla model_has_roles
        $this->call(Model_has_RolesSeeder::class);

        $this->call(ComandasSeeder::class);
        
    }
}

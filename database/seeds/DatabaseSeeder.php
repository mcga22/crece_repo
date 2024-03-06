<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('rols')->insert([
            'nombre_rol' => 'municipio',
        ]);
        
        DB::table('rols')->insert([
            'nombre_rol' => 'admin',
        ]);
    }
}

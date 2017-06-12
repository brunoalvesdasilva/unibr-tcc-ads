<?php

use Illuminate\Database\Seeder;

class DepartamentoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('usuario')->delete();
        DB::table('departamento')->delete();
        
        DB::table('departamento')->insert([
            'nm_departamento' => "Administrativo",
        ]);
    }
}

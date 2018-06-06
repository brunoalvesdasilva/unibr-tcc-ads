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
        DB::insert('REPLACE INTO departamento (cd_departamento, nm_departamento) VALUES (?, ?)', [
            1, 
            "Administrativo"
        ]);
    }
}

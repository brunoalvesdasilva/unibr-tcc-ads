<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(ContaTableSeeder::class);
        $this->call(DepartamentoTableSeeder::class);
        $this->call(UsuarioTableSeeder::class);
        $this->call(FormaPagamentoTableSeeder::class);
    }
}

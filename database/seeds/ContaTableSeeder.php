<?php

use Illuminate\Database\Seeder;

class ContaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('conta')->delete();
        
        DB::table('conta')->insert([
            'nm_conta' => "Caixa",
            'cd_agencia_conta' => "0001",
            'cd_numero_conta' => "0001",
            'vl_inicial_conta' => 1000.00,
            'vl_atual_conta' => 0,
            'dt_registro_conta' => date('Y-m-d H:i:s'),
            'nm_tipo_conta' => "caixa",
        ],[
            'nm_conta' => "Poupança",
            'cd_agencia_conta' => "0002",
            'cd_numero_conta' => "0002",
            'vl_inicial_conta' => 5000.00,
            'vl_atual_conta' => 0,
            'dt_registro_conta' => date('Y-m-d H:i:s'),
            'nm_tipo_conta' => "poupanca",
        ]);
    }
}

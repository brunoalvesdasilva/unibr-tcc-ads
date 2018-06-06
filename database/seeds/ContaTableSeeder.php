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
        DB::insert('REPLACE INTO conta 
            (cd_conta, nm_conta, cd_agencia_conta, cd_numero_conta, vl_inicial_conta, vl_atual_conta, dt_registro_conta, nm_tipo_conta) 
        VALUES 
            (?, ?, ?, ?, ?, ?, ?, ?)', 
        [
             1,
            "Caixa",
            "0001",
            "0001",
            1000.00,
            1000.00,
            date('Y-m-d H:i:s'),
            "caixa",
        ]);
        DB::insert('REPLACE INTO conta 
            (cd_conta, nm_conta, cd_agencia_conta, cd_numero_conta, vl_inicial_conta, vl_atual_conta, dt_registro_conta, nm_tipo_conta) 
        VALUES 
            (?, ?, ?, ?, ?, ?, ?, ?)', 
        [
            2,
            "Poupança",
            "0002",
            "0002",
            1000.00,
            1000.00,
            date('Y-m-d H:i:s'),
            "caixa",
        ]);
    }
}

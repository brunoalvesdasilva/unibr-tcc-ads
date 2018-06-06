<?php

use Illuminate\Database\Seeder;

class UsuarioTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $departamento = App\Http\Controllers\Departamento::first();

        DB::insert('REPLACE INTO usuario (cd_usuario, nm_usuario, nm_email, nm_senha, cd_departamento) VALUES (?, ?, ?, ?, ?)', [
            1,
            "Administrador",
            "adm@sig.com.br",
            "senhaadm",
            $departamento['cd_departamento'],
        ]);
        
        DB::insert('REPLACE INTO usuario (cd_usuario, nm_usuario, nm_email, nm_senha, cd_departamento) VALUES (?, ?, ?, ?, ?)', [
            2,
            "Usuário",
            "user@sig.com.br",
            "senhauser",
            $departamento['cd_departamento'],
        ]);
    }
}

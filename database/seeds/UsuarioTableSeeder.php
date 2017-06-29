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
        
        DB::table('usuario')->delete();
        
        DB::table('usuario')->insert([
            'nm_usuario' => "Administrador",
            'nm_email' => "adm@sig.com.br",
            'nm_senha' => "senhaadm",
            'cd_departamento' => $departamento['cd_departamento'],
        ]);
        
        DB::table('usuario')->insert([
            'nm_usuario' => "Usuário",
            'nm_email' => "user@sig.com.br",
            'nm_senha' => "senhauser",
            'cd_departamento' => $departamento['cd_departamento'],
        ]);
    }
}

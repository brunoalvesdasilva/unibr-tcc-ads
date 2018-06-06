<?php

use Illuminate\Database\Seeder;

class FormaPagamentoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::insert('REPLACE INTO forma_pagamento (cd_forma_pagamento, nm_forma_pagamento) VALUES (?, ?)', [
            1, 
            "Em dinheiro"
        ]);

        DB::insert('REPLACE INTO forma_pagamento (cd_forma_pagamento, nm_forma_pagamento) VALUES (?, ?)', [
            2, 
            "Em cheque"
        ]);

        DB::insert('REPLACE INTO forma_pagamento (cd_forma_pagamento, nm_forma_pagamento) VALUES (?, ?)', [
            3, 
            "Cartão de crédito"
        ]);

        DB::insert('REPLACE INTO forma_pagamento (cd_forma_pagamento, nm_forma_pagamento) VALUES (?, ?)', [
            4, 
            "Cartão de débito"
        ]);
    }
}

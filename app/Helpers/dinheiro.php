<?php

if (!function_exists('dinheiro')) {

    /**
     * Função que estiliza um valor float em formato de dinheito
     *
     * @param float $dinheiro
     * @return string
     */
    function dinheiro($dinheiro=0.0)
    {
        $dinheiro = (float) $dinheiro;
        return number_format($dinheiro, 2, ',', '.');
    }
}

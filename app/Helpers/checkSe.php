<?php

if (!function_exists('checkSe')) {

    /**
     * Retorna checked se o valor 1 for igual ao valor 2
     *
     * @param string valorOriginal Valor que será comparado
     * @param string valorSe Valor que se for igual ao valorOriginal irá 'checkar'
     * @return string
     */
    function checkSe($valorOriginal, $valorSe)
    {
        return $valorOriginal==$valorSe ? "checked":"";
    }
}

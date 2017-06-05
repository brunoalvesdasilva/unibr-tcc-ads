<?php

if (!function_exists('money2float')) {

    /**
     * Tranforma uma string no padrão de mdeda brasileiro em float
     *
     * @param string money
     * @return float
     */
    function money2float($money="")
    {
        $money = preg_replace("@[^,.\d]@", "", $money);
        $money = preg_replace("@[\.,](\d{2})$@", "#$1", $money);
        $money = preg_replace("@[\.,]@", "", $money);
        $money = preg_replace("@#(\d{2})$@", ".$1", $money);
        
        return (float) $money;
    }
}

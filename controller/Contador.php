<?php

class contador {
    var $i = 0;
    var $saida = '';

    function realizarContagem ($de, $ate) {
        $i = $de;
        for ($i = 1; $i <= $ate; $i++) {
            $saida = '';
            if ($i % 3 == 0) {
                $saida .= 'Fizz';
            } 
            if ($i % 5 == 0) {
                $saida .= 'Buzz';
            }    
            if (!$saida) {
                $saida .=  $i;
            }
            echo $saida . PHP_EOL;
        }
    }
}
?>
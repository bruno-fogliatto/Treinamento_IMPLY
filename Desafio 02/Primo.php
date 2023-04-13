<?php
    $num = (int) readline('Informe um número: ');

    if($num < 3){
        throw new Exception('Número precisa ser maior que 3.');
    }

    $resultado = '';
    for($i = 2; $i < $num; $i++){
        $cont = 0;
        for($j = 1; $j <= $i; $j++){
            if($i % $j == 0){
                $cont++;
            }
        }

        if($cont == 2){
            $resultado.= $i.' ';
        }
    }

    echo($resultado."\n");
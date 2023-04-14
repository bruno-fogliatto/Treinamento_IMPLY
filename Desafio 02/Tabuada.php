<?php
    $num = (int) readline('Digite um número inteiro: ');
    $index = 0;

    tabuada($num,$index);

    function tabuada($num, $index){
        if($index <= 10){
            $valor = $num*$index;
            echo($index." x ".$num." = ".$valor)."\n";
            $index++;
            tabuada($num, $index);
        }else{
            exit;
        }
    }

    
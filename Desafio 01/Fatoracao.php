<?php
    $num =  (int)readline("Informe um valor:");


    $fator = fatorar($num);

    echo ("O resultado da fatorial é:  ".$fator."\n");


    function fatorar ($num){
        if($num < 0){
            return -1;
        }else if($num == 0){
            return 1;
        }else{
            return ($num * fatorar($num -1));
        }
    }
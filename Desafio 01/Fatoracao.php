<?php
    $num = 10;


    $fator = fatorar($num);

    var_dump($fator);


    function fatorar ($num){
        if($num < 0){
            return -1;
        }else if($num == 0){
            return 1;
        }else{
            return ($num * fatorar($num -1));
        }
    }
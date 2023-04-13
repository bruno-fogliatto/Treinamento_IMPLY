<?php
    $array = [10,7,8,3,5,6,4,0,1,2,9];

    var_dump(ordenar($array));

    function ordenar($arr){
        for($i = 0; $i < count($arr); $i++){
            $index = $i;
            $min = $arr[$i];

            for($j = $i+1; $j < count($arr); $j++){
                $min = ($arr[$j] < $arr[$index]) ? $arr[$j] : $min;
                $index = ($arr[$j] < $arr[$index]) ? $j : $index;
            }

            $troca = $arr[$index];
            $arr[$index] = $arr[$i];
            $arr[$i] = $troca;

        }

        return $arr;
    }
    
<?php
    $valor = (int) readline("Informe um valor: ");

    while($valor < 0){
        echo "Por favor, insira um valor positivo... \n";
        $valor = (int) readline();
    }

    $sequencia = "";
    foreach(sequenciaFibo($valor) as $seq){
        $sequencia .= " ".$seq;
    }

    echo $sequencia."\n";

    function sequenciaFibo ($valor){
        $seq = [];
        $seq[0] = 0;
        $seq[1] = 1;

        for($i=2; $i < $valor; $i++){
            $fibo = $seq[$i-1] + $seq[$i-2];
            if($fibo < $valor){
                $seq[$i] = $fibo; 
            }else{
                break;
            }
        }

        return $seq;
    }
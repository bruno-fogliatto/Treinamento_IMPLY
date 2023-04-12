<?php
    $mail = readline('Informe seu e-mail: ');

    if(validar($mail)){
        echo "E-mail válido! \n";
    }else{
        echo "E-mail inválido! \n";
    }

    function validar($mail){
        if(!empty($mail)){
            $regexp = "/^([a-zA-Z0-9\.]+@+[a-zA-Z]+(\.)+[a-zA-Z]{2,3})$/";

            if(preg_match($regexp, $mail)){
                return true;
            }else{
                return false;
            }
        }
        return false;
    }
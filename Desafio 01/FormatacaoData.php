<?php
    $data = strtotime(readline("Informe a data no formato americano (yyyy-mm-dd) que deseja formatar: "));

    echo "Data padrão brasileiro: ".formatarData($data)."\n";

    function formatarData($data){
        return date('d/m/Y', $data);
    }
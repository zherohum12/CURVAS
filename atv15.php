<?php
    function ordenarArray($array, $ordem) {
        if ($ordem == 'asc') {
            sort($array);
        } elseif ($ordem == 'desc') {
            rsort($array);
        } else {
            echo "Erro: A ordem de ordenação informada é inválida.";
            return;
        }
    
        echo "Array ordenado em ordem $ordem: ";
        print_r($array);
    }

$arra = array(4,2,5,6,2,3,7,9,45,64,32);
ordenarArray($arra,"asc");

?>
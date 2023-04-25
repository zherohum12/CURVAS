<?php

function combinarArrays($array1, $array2) {
    $combinacao = array_merge($array1, $array2); 
    return $combinacao; 
}


$array1 = array(1, 2, 3, 4, 5);
$array2 = array('a', 'b', 'c', 'd', 'e');

$resultado = combinarArrays($array1, $array2);
echo "O resultado da combinação dos arrays é: " . implode(", ", $resultado);

?>

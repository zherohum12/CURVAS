<?php

function diferencaArrays($arrayA, $arrayB) {
    $diferenca = array_diff($arrayA, $arrayB); 
    return $diferenca; 
}


$arrayA = array(1, 2, 3, 4, 5);
$arrayB = array(4, 5, 6, 7, 8);


$resultado = diferencaArrays($arrayA, $arrayB);
echo "A diferença entre os arrays é: " . implode(", ", $resultado);

?>

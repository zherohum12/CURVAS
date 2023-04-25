<?php

function intersecaoArrays($arrayA, $arrayB) {
    $intersecao = array_intersect($arrayA, $arrayB); 
    return $intersecao; 
}


$arrayA = array(1, 2, 3, 4, 5);
$arrayB = array(4, 5, 6, 7, 8);


$resultado = intersecaoArrays($arrayA, $arrayB);
echo "A interseção dos arrays é: " . implode(", ", $resultado);

?>

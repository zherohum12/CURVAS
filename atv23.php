<?php

function obterDivisores($n) {
    $divisores = array(); 
    for ($i = 1; $i <= $n; $i++) {
        if ($n % $i == 0) { 
            $divisores[] = $i; 
        }
    }
    return $divisores; 
}


echo "Digite um valor para N: ";
$num = intval(readline()); 
$resultado = obterDivisores($num);
echo "Os divisores de $num são: " . implode(", ", $resultado);

?>

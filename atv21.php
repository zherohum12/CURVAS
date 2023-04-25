<?php

function mostrarSerie($n) {
    $serie = "";
    $numerador = 37;
    $denominador = 1;
    for ($i = 1; $i <= $n; $i++) {
        $termo = "(" . $numerador . " * " . ($numerador + 1) . ")/" . $denominador;
        $serie .= $termo . ($i < $n ? " + " : ""); 
        $numerador--;
        $denominador++;
    }
    return "S = " . $serie;
}

echo "Digite o valor de n: ";
$num = intval(readline()); 
echo mostrarSerie($num);

?>
<?php

function mostrarSerie($n) {
    $serie = "";
    $numerador = 1;
    $denominador = 1;
    for ($i = 1; $i <= $n; $i++) {
        $termo = $numerador . "/" . $denominador;
        $serie .= $termo . ($i < $n ? " + " : ""); 
        $numerador++;
        $denominador += 2; 
    }
    return "S = " . $serie;
}

echo "Digite o valor de n: ";
$num = intval(readline()); 
echo mostrarSerie($num);

?>
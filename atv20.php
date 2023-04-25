<?php

function calcularFatorial($numero) {
    if ($numero <= 0) {
        return "O número deve ser maior que zero.";
    } else {
        $resultado = 1;
        $fatorial = "";
        for ($i = $numero; $i > 0; $i--) {
            $resultado *= $i;
            $fatorial .= $i . ($i > 1 ? " * " : ""); 
        }
        return $numero . "! = " . $fatorial . " = " . $resultado;
    }
}


echo "Digite um número inteiro para calcular o fatorial: ";
$num = intval(readline()); 
echo calcularFatorial($num);

?>
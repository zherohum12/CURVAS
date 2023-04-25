<?php
function gerarNumerosAleatorios($a, $b, $n) {
if ($a > $b) {
        $temp = $a;
        $a = $b;
        $b = $temp;
    }

    $numeros = array();
    for ($i = 0; $i < $n; $i++) {
        $numero = rand($a, $b);
        array_push($numeros, $numero);
    }

    echo "Números gerados: ";
    print_r($numeros);

    return $numeros;
}
$R = gerarNumerosAleatorios(20,50,100);
?>
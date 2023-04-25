<?php
function gerarProgressao($a1, $r, $q, $tipo) {
    $progressao = array(); 
    if ($tipo == 'PA') {
        for ($i = 0; $i < $q; $i++) {
            $progressao[] = $a1 + ($i * $r);
        }
    } elseif ($tipo == 'PG') {
        for ($i = 0; $i < $q; $i++) {
            $progressao[] = $a1 * pow($r, $i);
        }
    } else {
        echo "Tipo de progressão inválido. Use 'PA' para Progressão Aritmética ou 'PG' para Progressão Geométrica.";
        return array();
    }
    echo "Progressão $tipo: " . implode(', ', $progressao);
    return $progressao;
}

$a1 = 2;
$r = 3; 
$q = 5; 
$tipo = 'PA'; 

$progressao = gerarProgressao($a1, $r, $q, $tipo);
?>
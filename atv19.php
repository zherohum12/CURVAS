<?php

echo "Digite o número de linhas: ";
$numLinhas = intval(readline()); 
echo "Digite o número de colunas: ";
$numColunas = intval(readline()); 


$numElementos = $numLinhas * $numColunas;


$valorAtual = 1;


echo "Matriz:\n";
for ($i = 0; $i < $numLinhas; $i++) {
    for ($j = 0; $j < $numColunas; $j++) {
        echo $valorAtual . " "; 
        $valorAtual++; 
    }
    echo "\n";
}
?>
<?php
function gerarOptions($palavras) {
    echo "Options gerados do array: ";
    echo "<br>";
    foreach ($palavras as $palavra) {
        echo "<option value='$palavra'>$palavra</option>";
    }
}

$arrayPalavras = array("Maçã", "Banana", "Laranja", "Abacaxi", "Morango");

gerarOptions($arrayPalavras);
?>
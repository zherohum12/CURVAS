<?php
function verificaValor($numero) {
    return $numero > 0 ? 'P' : ($numero < 0 ? 'N' : 'Z');
}

$resultado = verificaValor(2);
echo $resultado;
?>
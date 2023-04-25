<?php
function reversoNumero($numero) {
    $reverso = 0;
    while ($numero != 0) {
        $reverso = $reverso * 10 + $numero % 10;
        $numero = (int)($numero / 10);
    }
    return $reverso;
}
$rev = reversoNumero(123);
echo $rev;
?>
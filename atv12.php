<?php
function criptografarPalavra($palavra) {
    $criptografado = sha1($palavra);

    return $criptografado;
}
$R = criptografarPalavra("SENHA MUITO DIFICIL");
echo $R;
?>
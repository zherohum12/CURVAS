<?php

function verificaAprovacao($nota) {
    return $nota >= 6 ? 'APROVADO' : 'REPROVADO';
}


echo verificaAprovacao(8); 
echo verificaAprovacao(4); 

?>
<?php
function converterMinusculas($palavra) {
    return strtolower($palavra);
}
$palavra = converterMinusculas("AbCdEfG");
echo $palavra;
?>
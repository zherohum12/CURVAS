<?php
function dataPorExtenso($data) {
    // Explode a data em dia, mês e ano
    $parts = explode("/", $data);
    if (count($parts) != 3) {
        return "ERROR";
    }

    $dia = intval($parts[0]);
    $mes = intval($parts[1]);
    $ano = intval($parts[2]);

    // Validar se a data é válida
    if (!checkdate($mes, $dia, $ano)) {
        return "ERROR";
    }

    // Obter o nome do mês por extenso
    $mesesPorExtenso = array(
        1 => "Janeiro",
        2 => "Fevereiro",
        3 => "Março",
        4 => "Abril",
        5 => "Maio",
        6 => "Junho",
        7 => "Julho",
        8 => "Agosto",
        9 => "Setembro",
        10 => "Outubro",
        11 => "Novembro",
        12 => "Dezembro"
    );

    $mesPorExtenso = $mesesPorExtenso[$mes];

    // Retornar a data no formato "D de mesPorExtenso de AAAA"
    return $dia . " de " . $mesPorExtenso . " de " . $ano;
}

$data1 = dataPorExtenso("12/11/2006");
echo $data1;
?>
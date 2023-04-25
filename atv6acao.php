<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $hora = $_POST['hora'];
    $hora_convertida = '';

        if (preg_match('/^([0-1][0-9]|2[0-3]):[0-5][0-9]$/', $hora)) {
        $hora_partes = explode(':', $hora);
        $hora_num = intval($hora_partes[0]);
        $minutos = $hora_partes[1];

        if ($hora_num === 0) {
            $hora_convertida = '12:' . $minutos . ' AM';
        } elseif ($hora_num === 12) {
            $hora_convertida = '12:' . $minutos . ' PM';
        } elseif ($hora_num > 12) {
            $hora_convertida = ($hora_num - 12) . ':' . $minutos . ' PM';
        } else {
            $hora_convertida = $hora . ' AM';
        }
    } else {
        $hora_convertida = '00:00 ER';
    }

    echo 'Hora convertida: ' . $hora_convertida;
}

?>
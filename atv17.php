<?php
function gerarTabelaHTML($linhas, $colunas, $name, $id, $class, $border) {
    echo "<table name='$name' id='$id' class='$class' border='$border'>";
    echo "<thead>";
    echo "<tr>";
    for ($i = 1; $i <= $colunas; $i++) {
        echo "<th>Cabeçalho $i</th>";
    }
    echo "</tr>";
    echo "</thead>";
    echo "<tbody>";
    for ($i = 1; $i <= $linhas; $i++) {
        echo "<tr>";
        for ($j = 1; $j <= $colunas; $j++) {
            echo "<td>Linha $i, Coluna $j</td>";
        }
        echo "</tr>";
    }
    echo "</tbody>";
    echo "</table>";
}

$linhas = 3;
$colunas = 4;
$name = "tabela1";
$id = "tabela-1";
$class = "tabela";
$border = 1;
gerarTabelaHTML($linhas, $colunas, $name, $id, $class, $border);
?>
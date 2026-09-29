<?php

$valor = 25;

if ($valor < 10) {
    echo "Valor inválido. O saque mínimo é R$10.";

} elseif ($valor > 600) {
    echo "Valor inválido. O saque máximo é R$600.";

} else {

    $notas100 = intdiv($valor, 100);
    $valor = $valor % 100;

    $notas50 = intdiv($valor, 50);
    $valor = $valor % 50;

    $notas10 = intdiv($valor, 10);
    $valor = $valor % 10;

    $notas5 = intdiv($valor, 5);
    $valor = $valor % 5;

    $notas1 = $valor;

    echo "Notas de R$100 $notas100
    ";
    echo "Notas de R$50: $notas50
    ";
    echo "Notas de R$10: $notas10
    ";
    echo "Notas de R$5: $notas5
    ";
    echo "Notas de R$1: $notas1
    ";
}

?>
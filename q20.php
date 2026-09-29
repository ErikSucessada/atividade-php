<?php

$horaspordia = 60;
$diastrabalhados = 4;
$horastrabalhadas = 240; 
$horasextras=3;

if ($horasextras > 0) {
    $horasdescanso = $horasextras * 1.5;
} else {
    $horasextras = 0;
    $horasdescanso = 0;
}

echo "horas extras: " . $horasextras . " horas
";
echo "descanso adicional: " . $horasdescanso . " horas
";
?>

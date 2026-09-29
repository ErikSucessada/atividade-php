<?php
$salario=500;
$hora=60;


if ($hora<=40){
echo "nao ganhou nenhum adicional";
}elseif ($hora>40 and $hora<=60){
    $bonus=($salario*50)/100;
    $total=$salario+$bonus;
    echo"voce ganhou um bonus de $bonus e ficou com $total";
}
 elseif ($hora>60){
    $bonus = ($salario*100)/100;
    $total=$salario+$bonus;
    echo"parabens vocee ganhou $bonus de bonus e ficou com $total de reaaais";
 }else{
    echo "trabalhe mais e ganhe o bonus";
 }
 ?>

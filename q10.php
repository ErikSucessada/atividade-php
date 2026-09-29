<?php
$kwh=200;

if ($kwh <=100){
    $total=$kwh*0.50;
    echo "voce gastou $kwh de energia e sua conta foi de $total reais";
}
elseif ($kwh>=101 and $kwh<=200){
     $total=$kwh*0.70;
    echo "voce gastou $kwh de energia e sua conta foi de $total reais";
}elseif($kwh>=201 and $kwh<=300){
    $total=$kwh*0.90;
    echo "voce gastou $kwh de energia e sua conta foi de $total reais";
}else{
    $total=$kwh*1.10;
    echo "voce gastou $kwh de energia e sua conta foi de $total reais";
}













?>
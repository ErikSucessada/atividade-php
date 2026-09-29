<?php
$s1 = 99999;


if ($s1<=280){
    echo ("seu salario era de $s1 e com o aumento de 20% seu salario agora é de ".(($s1*20)/100)+$s1);
}
if ($s1>=280 and $s1 <= 700){
     echo ("seu salario era de $s1 e com o aumento de 15% seu salario agora é de ".(($s1*15)/100)+$s1);
}
if ($s1>= 700 and $s1 <= 1500){
    echo ("seu salario era de $s1 e com o aumento de 10% seu salario agora é de ".(($s1*10)/100)+$s1);
}
if ($s1>=1500){
    echo ("seu salario era de $s1 e com o aumento de 5% seu salario agora é de ".(($s1*5)/100)+$s1);
}

<?php
$peso=50;
$altura=1.67;
$imc= $peso / ( $altura * $altura);

if ($imc<18.5){
    echo"abaixo do peso";
}
elseif ($imc>=18.5 and $imc<25){
    echo"peso Normal";
}
elseif ($imc>=25 and $imc<30){
    echo"Acima do peso";
}
elseif ($imc>=30 and $imc<40){
    echo"obeso";
}
else{
    echo"Obesidade Grave";
}

echo "

seu imc é $imc";














?>
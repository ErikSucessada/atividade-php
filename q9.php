<?php

$respostas=4;

echo"Telefonou para a vítima?
Esteve no local do crime?
Mora perto da vítima?
Devia para a vítima?
Já trabalhou com a vítima?

";

if($respostas==2){
    echo"suspeita";
}
elseif ($respostas==3 or $respostas==4){
echo"cumplice";
}
elseif ($respostas==5){
    echo"assasino";
}
else{
    echo"inocente";
}
?>
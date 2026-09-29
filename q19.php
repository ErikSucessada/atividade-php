<?php

$clima="chuva";
$cansada="sim";
$velocidade=17;

if ($cansada=="sim" and $velocidade<=15){   
    echo"Ta de boa filha
sua velocidade esta $velocidade km/h";
}elseif($clima=="chuva" and $velocidade<=12){
    echo"eitcha corra bb
sua velocidade esta $velocidade km/h";
}else{
    echo"a velocidade nao esta adequada ";
}


?>  
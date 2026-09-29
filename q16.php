<?php

$força=6;
$inteligencia= 7;
$agilidade=7;

if ($força>$inteligencia and $força>$agilidade){
    echo" voce é um guerreiro";
} 
elseif($inteligencia>$força and $inteligencia>$agilidade){
    echo"  voce é um mago";
}
elseif($agilidade>$força and $agilidade>$inteligencia){
    echo"voce é um arqueiro";
}
else{
    echo"voce é a classe hibrida";
}

?>
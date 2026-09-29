<?php
$roupa=100;
$avista= $roupa-($roupa*10)/100;
$avistacartao= $roupa-($roupa*5)/100;
$tresvezescartao= $roupa;
$seisvezes= $roupa + ($roupa*10)/100;

$pagamento=$seisvezes;

if($pagamento==$avista){
    echo"À vista em dinheiro, recebe 10% de desconto e o valor será $avista";
}elseif($pagamento==$avistacartao){
    echo"À vista no cartão de crédito, recebe 5% de desconto e o valor será $avistacartao";
}elseif($pagamento==$tresvezescartao){
    echo"Em 3 vezes no cartão, preço normal de etiqueta sem juros e o valor será $tresvezescartao ";
}elseif($pagamento==$seisvezes){
    echo"Em 6 vezes, preço normal de etiqueta mais juros de 10% e o valor será $seisvezes";
}else{
    echo"Escolha a forma de pagamento";
}


















?>
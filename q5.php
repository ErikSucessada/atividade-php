<?php
$qh = 21;
$sh = 10;
$fgts = ((($qh * $sh)*11)/100);
$sal= ($qh * $sh );
$vl = 0;
$imp = ($qh * $sh)-((($qh * $sh)*$vl)/100);


if( $qh * $sh <=899){
    $vl = 3;
    echo  "O valor do seu fgts é de $fgts do seu salario que é de $sal";
    echo "O valor do seu salario ja descontado é de ".$imp;
}
else if ( $qh * $sh <= 1499){
    $vl= 8;
        echo  "O valor do seu fgts é de $fgts , o valor do seu salario é de $sal";
    echo ". O valor do seu salario apos o desconto é de ".$imp;
}
else if ( $qh * $sh <= 2499){
    $vl = 13;
    echo  "O valor do seu fgts é de $fgts , o valor do seu salario é de $sal";
    echo ". O valor do seu salario apos o desconto é de ".$imp;
}
else{
    $vl = 23;
    echo  "O valor do seu fgts é de $fgts , o valor do seu salario é de $sal";
    echo ". O valor do seu salario apos o desconto é de ".$imp;
}

?>
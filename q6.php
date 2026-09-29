<?php
$nota1=2;
$nota2= 1;
$media= ($nota1 + $nota2)/2;


if ($media >=9 and $media <=10){
    echo "Suas notas foram $nota1 e $nota2, sua media é $media.Você ficou com A,  parabéns você foi aprovado!";
}
else if ($media >=7.5 and $media <9){
    echo "Suas notas foram $nota1 e $nota2, sua media é $media.Você ficou com B parabéns você foi aprovado!";
}
else if ($media >=6 and $media <7.5){
    echo "Suas notas foram $nota1 e $nota2, sua media é $media. Você ficou com C, aprovado!";
}
else if ($media >=4 and $media <6){
    echo "Suas notas foram $nota1 e $nota2, sua media é $media. Você ficou com D, reprovado!";
}
else{
    echo "Suas notas foram $nota1 e $nota2, sua media é $media. Você ficou com E, reprovado!";
}
?>

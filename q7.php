<?php
$lado1 = 3;
$lado2 = 4;
$lado3 = 4;


if ($lado1 == $lado2 and $lado1 == $lado3) {
    echo "O triangulo é equilatero";
} else if ($lado1 == $lado2 or $lado1 == $lado3 or $lado2 == $lado3) {
    echo "O triangulo é isosceles";
} else {
    echo "O triangulo é escaleno";
}

?>
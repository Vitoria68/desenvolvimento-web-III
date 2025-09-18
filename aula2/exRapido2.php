<?php

$x = $_GET['x'];
$y = $_GET['y'];

echo "Os valores de x e y são, respectivamente, $x e $y";


$soma = 0;

if ($x > $y) {
    $valor = $y;
    $y = $x;
    $x = $valor;
}

for ($i = $x; $i <= $y; $i++) {
    $soma += $i;
}

echo "<br>A soma dos números entre eles é $soma.";

?>
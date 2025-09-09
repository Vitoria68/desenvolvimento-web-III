<?php

$num1 = rand(0,100);
$num2 = rand(0,100);
$num3 = rand(0,100);

$maior = 0;

if ($num1 > $num2) {
    $maior = $num1;
} else {
    $maior = $num2;
}

if ($num3 > $maior) {
    $maior = $num3;
}

$menor = $num1;
if ($menor > $num2) {
    $menor = $num2;
}

if ($num3 < $menor) {
    $menor = $num3;
}

echo "Maior: ";
echo $maior;

echo "<br> Menor: ";
echo $menor;

?>
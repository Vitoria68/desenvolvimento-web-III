<?php


$numa = rand(1, 100);
$numb = rand(1, 100);
$numc = rand(1, 100);
$numi = rand(1, 3);

echo "<br>numa: ";
echo $numa;
echo "<br>numb";
echo $numb;
echo "<br>numc";
echo $numc;
echo "<br>numi";
echo $numi;
echo "<br>";

$maior = 0;
$meio = 0;
$menor = $numa;

//maior
if ($numa > $numb) {
    $maior = $numa;
} else {
    $maior = $numb;
}

if ($numc > $maior) {
    $maior = $numc;
}

//menor
if ($menor > $numb) {
    $menor = $numb;
} elseif ($menor > $numc) {
    $menor = $numc;
}

//nenhum 
if ($numa != $maior && $numa != $menor) {
    $meio = $numa;
} elseif ($numb != $maior && $numb != $menor) {
    $meio = $numb;
} else {
    $meio = $numc;
}

if ($numi == 1) {
    echo "$menor , $meio, $maior";
} elseif ($numi == 2) {
    echo "$maior, $meio, $menor";
} else {
    echo "$menor, $maior, $meio";
}

?>
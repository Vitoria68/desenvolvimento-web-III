<?php

$x = rand(1,100);
$y = rand(1,100);

echo "Os numeros sorteado foram $x e $y <br >";

if ($x > $y) {
    echo "<br> O maior número é $x!";
} elseif ($y > $x) {
    echo "<br> O maior número é $y!";
} else {
    echo "Números iguais";
}
?>
<?php

$num = rand(1,100);
echo "Número = $num. <br>";

$soma = 0;

for ($x = 1; $x < $num; $x++) {
    if($num % $x == 0) {
        $soma += $x;
    }
}

echo "Soma = $soma. <br>";


if ($soma == $num) {
    echo "É um número perfeito.";
} else {
    echo "Não é um número perfeito.";
}

?>
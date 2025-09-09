<?php

$num = rand(1, 100);
echo "Número = $num. <br>";

$divisores = 0;

if ($num < 2) {
    echo "Não é número primo.";
} else {
    for($x = 1; $x <= $num; $x++) {
        if ($num % $x == 0){
            $divisores++;
        }
    }

    if ($divisores == 2) {
        echo "É primo.";
    } else {
        echo "Não é número primo.";
    }
}

 ?>   
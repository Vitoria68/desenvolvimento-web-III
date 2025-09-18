<?php

function numPar(array $vet) : int {
    $pares = 0;
    for ($i = 0; $i < count($vet); $i++) {
        if ($vet[$i]% 2 == 0) {
            $pares++;
        }
    }
    return $pares;
}

$vet = [1,2,3,4,6,8];
echo numPar($vet);


?>
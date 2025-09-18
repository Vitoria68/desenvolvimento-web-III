<?php

function normalizar(array &$vet) : void {
    $soma = 0;
    foreach ($vet as $valor) $soma += $valor;
    if ($soma == 0)
        return;
    foreach ($vet as $i => $valor) {
        $vet[$i] = $valor / $soma;
    }
}

$valores = [2, 3, 5];
normalizar($valores);

print_r($valores);


//echo "A soma normalizada dos elementos é $soma";
?>
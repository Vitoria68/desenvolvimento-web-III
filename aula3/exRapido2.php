<?php

function geraVetor(int $tamanho):array{
    for($i = 0; $i <= $tamanho; $i++) {
        $vet[] = rand(0,10);
    }
    return $vet;
}

function decrescenteVetor(array $vet) : bool {
    for ($i = 1; $i < count($vet); ++$i) {
        if ($vet[$i] > $vet[$i - 1]) {
            return false;
        } 
    }
     return true;
}

$x = geraVetor(10);
print_r($x);
if (decrescenteVetor($x) == false) {
    echo "Não é em ordem decrescente.";
} else {
    echo "È em ordem decrescente.";
}

?>
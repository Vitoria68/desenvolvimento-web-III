<?php

$idade = rand(0,90);

if ($idade < 16) {
    echo "Não pode  votar.";
} elseif ($idade >= 18 && $idade <= 64) {
    echo "Voto é obrigatório";
} else {
    echo "O voto é facultativo";
}

?>
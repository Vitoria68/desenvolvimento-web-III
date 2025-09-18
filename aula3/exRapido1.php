<?php

for($i = 0; $i <= 100; $i++){
    $num = rand(0, 2500);
    $vet[] = $num;
}

$maior = 0;
for($j = 0; $j < count($vet); $j++) {
    if($vet[$j] > $maior) {
        $maior = $vet[$j];
    }
}

echo "O maior número do vetor é $maior";


?>
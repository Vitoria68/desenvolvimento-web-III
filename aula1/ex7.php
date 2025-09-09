<?php

$num = rand(1, 100);
echo "num = $num";

for ($x = 1; $x < $num; $x++) {
    if ($num % $x == 0) {
        echo "<br> $x ";
    }
}

?>
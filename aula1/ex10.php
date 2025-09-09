<?php

$num = rand(1,10);
echo "Número = $num. <br>";

for ($x = 1;$x <= $num; $x++) {
    for ($y = 1; $y <= $x; $y++) {
        echo "*";        
    }
    echo "<br>";
}

?>
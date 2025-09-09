<?php
$numa = rand(1, 100);
$numb = rand(1, 100);
echo "numa = $numa, numb = $numb";

$x = 0;
if ($numa > $numb) {
    $x = $numa;
    $numa = $numb;
    $numb = $x;
}

for($x = $numa+1; $x < $numb; $x++) {
    echo "<br>$x, ";
}

?>
<?php
if (count($_GET)<3)
    die("Por favor, informe os valores A, B e C.");
if (isset ($_GET['a']) && isset ($_GET['b']) && isset ($_GET['c'])) {
    $a = $_GET['a'];
    $b = $_GET['b'];
    $c = $_GET['c'];

    $delta = ($b * $b) - 4 * $a * $c;
    echo "O valor de delta é ". $delta;
} else {
    echo "Digite os valores corretos. ";
}




?>
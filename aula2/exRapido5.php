<?php

$total=0;
if(isset($_GET['zerar'])){
    setcookie('soma', 0, time() + 3600*24*10);
    $_COOKIE['soma'] = 0;
}

if (!isset($_COOKIE['soma'])) {
    setcookie('soma', 0, time() + 3600*24*10);
    echo "Bem vindo, primeira vez por estas terras, certo?";
} else {
    $total=$_COOKIE['soma'];
}
if(isset($_POST['numero'])){
    $total +=$_POST['numero'];
    setcookie("soma", $total, time() + 3600*24*10);
}

?>

<DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Somador infinito</title>
</head>
<body>
    <form action="?" method="post">

        <input type="text" name="numero" placeholder="Digite um número">
        <br><br>

        <button type="submit">Somar</button><br>
    </form>
    <br><br>

    <strong>Total somado até agora: <?= $total;?> </strong>

    <br><br>

    <a href="?zerar=true">Zerar soma</a>
    
</body>
</html>
    
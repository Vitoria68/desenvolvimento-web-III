<?php
session_start();

if (isset($_GET['zerar'])){
    session_unset();
}


if (!isset($_SESSION['total'])) {
    $_SESSION['total'] = 0;
} else {
    $salario = $_POST['salario'];
    if ($salario <= 1518) {
        $_SESSION['total'] = "7.5%";
    } elseif (($salario > 1518) && ($salario <= 2793.88)) {
        $_SESSION['total'] = "9%";
    } elseif (($salario > 2793.88) && ($salario <= 4190.83)) {
        $_SESSION['total'] = "12%";
    } elseif (($salario > 4190.83) && ($salario <= 8157.41)) {
        $_SESSION['total'] = "14%";
    }
    
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcular INSS</title>
</head>
<body>
    <form action="?" method="post">
        <label for="nome"> Digite seu nome: </label>
        <br>
        <input type="text" name="nome"><br><br>

        <label for="salario"> Digite sua primeria nota: </label>
        <br>
        <input type="number" step="0.01" name="salario" min=0 max=8157.41><br><br>
        
        <button type="submit">Calcular</button>
    </form>
    <br><br>
    
    <strong>Seu INSS é: <?=$_SESSION['total'];?></strong>

    <br><br>

    <a href="?zerar=true">Zerar fatoração</a>
</body>
</html>
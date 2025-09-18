<?php
session_start();

if (isset($_GET['zerar'])){
    session_unset();
}


if (!isset($_SESSION['total'])) {
    $_SESSION['total'] = 1;
} else {
    $num = $_POST['num'];
    $total = 1;
    for ($i = $num; $i > 1; $i--) {
        $total *= $i;
        $_SESSION['total'] = $total;
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fatorial</title>
</head>
<body>
    <form action="?" method="post">
        <label for="num"> Digite um número: </label>
        <br><br>
        <input type="number" name="num"><br><br>
        
        <button type="submit">Fatorar</button>
    </form>
    <br><br>
    
    <strong>Resultado do número fatorado: <?=$_SESSION['total'];?></strong>

    <br><br>

    <a href="?zerar=true">Zerar fatoração</a>
</body>
</html>
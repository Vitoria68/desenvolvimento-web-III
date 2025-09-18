<?php
session_start();

if(isset($_GET['zerar'])){
    session_unset();
}

if(!isset($_SESSION['total']) && !isset($_SESSION['resultado'])){
    $_SESSION['total'] = 0;
    $_SESSION['resultado'] = "Sem dados suficientes para calcular";
} else {
    $_SESSION['total'] = $_POST['nota1'] + $_POST['nota2'] + $_POST['nota3'];
    if($_SESSION['total'] >= 6){
        $_SESSION['resultado'] = "Aprovado!";
    } elseif (($_SESSION['total'] < 6) && ($_SESSION['total'] >= 4)) {
        $_SESSION['resultado'] = "Você está de recuperação...";
    } else {
        $_SESSION['resultado'] = "Reprovado :(";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notas</title>
</head>
<body>
    <form action="?" method="post">
        <label for="nome"> Digite seu nome: </label>
        <br>
        <input type="text" name="nome"><br><br>

        <label for="nota1"> Digite sua primeria nota: </label>
        <br>
        <input type="number" name="nota1" min=0 max=3><br><br>

        <label for="nota2"> Digite sua segunda nota: </label>
        <br>
        <input type="number" name="nota2" min=0 max=3><br><br>

        <label for="nota3"> Digite sua terceira nota: </label>
        <br>
        <input type="number" name="nota3" min=0 max=4><br><br>
        
        <button type="submit">Fatorar</button>
    </form>
    <br><br>
    
    <strong>Sua nota final é: <?=$_SESSION['total'];?></strong>
    <strong><?=$_SESSION['resultado'];?></strong>

    <br><br>

    <a href="?zerar=true">Zerar fatoração</a>
</body>
</html>
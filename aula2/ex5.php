<?php

$result = "Ninguem acertou";
$num = 0;

if(isset($_GET['zerar'])) {
    setcookie('resultado', "Ninguem acertou", time() + 3600*24*10 );
    $_COOKIE['resultado'] = "Ninguem acertou";
}

if (!isset($_COOKIE['resultado'])) {
    setcookie('resultado', "Ninguem acertou", time() + 3600*24*10 );
} else {
    $result = $_COOKIE['resultado'];
}

if(isset($_POST['num1'], $_POST['num2'], $_POST['num3'], $_POST['num4'], $_POST['nome1'], $_POST['nome2'], $_POST['nome3'], $_POST['nome4'])) {
    $num = rand(1, 10);
    if( $num == $_POST['num1']) {
        $result = $_POST['nome1'];
    } elseif ($num == $_POST['num2']) {
        $result = $_POST['nome2'];
    }elseif ($num == $_POST['num3']) {
        $result = $_POST['nome3'];
    }elseif ($num == $_POST['num4']) {
        $result = $_POST['nome4'];
    } else {
        $result = "Ninguem acertou";
    }

    setcookie('resultado', $result, time() + 3600*24*10);
$_COOKIE['resultado'] = $result;}
/*Faça uma aplicação em PHP que receba o nome de quatro
apostadores e o número em que cada um aposta. Receba essas
informações, sorteie um número aleatório entre 1 e 10 e informe
o nome de quem acertou o número. Caso ninguém acerte, exiba
uma mensagem com esta informação.*/


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aposta</title>
</head>
<body>
    <form action="?" method="post">
        <input type="text" name="nome1" placeholder="Digite o nome do primeiro apostador"> <br>
        <input type="number" name="num1" placeholder="Digite o primeiro numero"> <br><br>

        <input type="text" name="nome2" placeholder="Digite o nome do segundo apostador"> <br>
        <input type="number" name="num2" placeholder="Digite o segundo numero"> <br><br>

        <input type="text" name="nome3" placeholder="Digite o nome do terceiro apostador"> <br>
        <input type="number" name="num3" placeholder="Digite o terceiro numero"> <br><br>

        <input type="text" name="nome4" placeholder="Digite o nome do quarto apostador"> <br>
        <input type="number" name="num4" placeholder="Digite o quarto numero"> <br><br>

        <button type="submit">Ver Resultado</button>
    </form>
    <br>
    <br>

    <strong>Numero sorteado: <?=$num;?></strong>
    <br>
    <strong>O vencedor foi: <?=$result;?></strong>

    <br><br>

    <a href="?zerar=true">Zerar disputa</a>
</body>
</html>
<?php
    session_start();
    if (isset($_GET['zerar'])) {
        session_unset();
    }
    if (!isset($_SESSION['total'])) {
        $_SESSION['total'] = 0;
    } else {
        $_SESSION['total'] +=$_POST['numero'];
    }
?>
<DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Somador infinito</title>
</head>
<body>
    <form action="?" method="post">

        <input type="text" name="numero" placeholder="Digite um número">
        <br><br>

        <button type="submit">Somar</button><br>
    </form>
    <br><br>

    <strong>Total somado até agora: <?= $_SESSION['total'];?> </strong>

    <br><br>

    <a href="?zerar=true">Zerar soma</a>
    
    </body>
    </html>
    
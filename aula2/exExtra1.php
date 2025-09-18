<?php
$cor = "#cccccc";

if(isset($_GET['corF'])){
    $cor = $_GET['corF'];
    setcookie('fundo', $cor, time() + 3600*24*10);
} else {
    if (isset($_COOKIE['fundo'])) {
        $cor=$_COOKIE['fundo'];
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body bgcolor="<?=$cor;?>">
    <a href="?corF=0000FF">Azul</a>
    <a href="?corF=00FF00">Verde</a>
    <a href="?corF=6959CD">Violeta</a>
    <a href="?corF=FF1493">Rosa</a>
    <a href="?corF=FFFF00">Amarelo</a>
    
    <br><br>

</body>
</html>


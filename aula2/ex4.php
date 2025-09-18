<?php

/*Faça uma aplicação em PHP que permita ao usuário informar as
medidas de uma forma geométrica com quatro lados. Identifique
e imprima se a figura é um quadrado, um retângulo ou um
quadrilátero.*/
$lado1 =0;
$lado2 =0;
$lado3 =0;
$lado4 =0;
//$figura = "Nao tem figura";

if(isset($_GET['zerar'])){
    setcookie('figura', "Nao tem figura", time() + 3600*24*10);
    $figura = "Nao tem figura";
}

if (!isset($_COOKIE['figura'])) {
    setcookie('figura', "Nao tem figura", time() + 3600*34*10);
} else {

    $lado1 =$_POST['lado1'];
    $lado2 =$_POST['lado2'];
    $lado3 =$_POST['lado3'];
    $lado4 =$_POST['lado4'];

    if ($lado1 == $lado2 && $lado2 == $lado3 && $lado3 == $lado4) {
        $figura = "quadrado";
    } elseif ($lado1 == $lado3 && $lado2 == $lado4) {
        $figura = "retângulo";
    } else {
        $figura = "quadrilátero";
    }

    setcookie('figura', $figura, time() + 3600 * 24 * 10);
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forma Geometrica</title>
</head>
<body>
    <form action="?" method="post">
        <label for="lado1">Digite o primeiro lado:  </label><br>
        <input type="number" name="lado1"><br><br>

         <label for="lado2">Digite o segundo lado:  </label><br>
        <input type="number" name="lado2"><br><br>

         <label for="lado3">Digite o terceiro lado:  </label><br>
        <input type="number" name="lado3"><br><br>

         <label for="lado4">Digite o quarto lado:  </label><br>
        <input type="number" name="lado4"><br><br>

        <button type="submit">Descobrir a forma geometrica</button>
    </form>
    <br><br>

    <strong>A figura eh um: <?=$figura;?> </strong>

    <br><br>

    <a href="?zerar=true">Zerar resultado</a>
</body>
</html>
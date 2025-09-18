<html>
    <body>
    <h1>Cálculo de Delta</h1>
    <form action="/vitoria/exRapido3.php" method="post">

    <label for="a">Digite o valor de A:</label>
    <input type="number" id="a" name="a"><br><br>

    <label for="b">Digite o valor de B:</label>
    <input type="number" id="b" name="b"><br><br>

    <label for="ac">Digite o valor de C:</label>
    <input type="number" id="c" name="c"><br><br>

    <input type="submit" value="Submit">

</form>
</body>
</html>

<?php

    $a = $_POST['a'];
    $b = $_POST['b'];
    $c = $_POST['c'];

    $delta = ($b * $b) - 4 * $a * $c;
?>
<html>
    <body>
        <h1>Delta</h1>
        <p>O valor de delta é <?=$delta?></p>
    </body>
</html>
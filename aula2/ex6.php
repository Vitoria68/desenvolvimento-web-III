<?php
/*Desenvolva uma aplicação para geração de declarações de par-
ticipação em projetos de pesquisa. 

O usuário deverá informar o número de matrícula, o nome do estudante, o título do projeto e o total de horas. !

Na frente de cada campo, coloque um check-
box para que o usuário indique se ele deseja que este campo
seja salvo. 

Caso o usuário marque o checkbox, nos acessos pos-
teriores, o campo correspondente deverá ser preenchido com o
último valor digitado. 

Ao enviar o formulário, deve-se exibir o texto: "Declaro para os devidos fins que, o discente <nome do
estudante>, matricula no <numero da matricula>, participou
do projeto de pesquisa <título do projeto> totalizando <total
de horas> horas".*/
$matricula = $_COOKIE['matricula'] ?? "";
$nome = $_COOKIE['nome'] ?? "";
$titulo = $_COOKIE['titulo'] ?? "";
$horas = $_COOKIE['horas'] ?? "";

$declaracao = " ";

if(isset($_GET['zerar'])){
    setcookie('declaracao', " ", time() + 3600*24*10);
    $_COOKIE['declaracao'] = " ";
    $matricula = "";
    $nome =  "";
    $titulo =  "";
    $horas =  "";
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $matricula_post = $_POST['matricula'] ?? "";
    $nome_post = $_POST['nome'] ?? "";
    $titulo_post = $_POST['titulo'] ?? "";
    $horas_post = $_POST['horas'] ?? "";

    if (isset($_POST['save_matricula'])) {
        setcookie("matricula", $matricula_post, time() + 3600);
        $matricula = $matricula_post;
    }
    if (isset($_POST['save_nome'])) {
        setcookie("nome", $nome_post, time() + 3600);
        $nome = $nome_post;
    }
    if (isset($_POST['save_titulo'])) {
        setcookie("titulo", $titulo_post, time() + 3600);
        $titulo = $titulo_post;
    }
    if (isset($_POST['save_horas'])) {
        setcookie("horas", $horas_post, time() + 3600);
        $horas = $horas_post;
    }

     $declaracao = "Declaro para os devidos fins que, o discente <b>$nome_post</b>, "
                . "matrícula no <b>$matricula_post</b>, participou do projeto de pesquisa "
                . "<b>$titulo_post</b> totalizando <b>$horas_post</b> horas.";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Declaração de Participação</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Participação</title>
</head>
<body>
     <h2>Gerar Declaração</h2>
    <form action="?" method="post">
        <label for="matricula">Digite a matrícula do estudante: </label>
        <input type="number" name="matricula" value="<?= htmlspecialchars($matricula) ?>">
        <input type="checkbox" name="save_matricula"> Salvar este campo<br><br>


        <label for="nome">Digite o nome do estudante: </label>
        <input type="text" name="nome" value="<?= htmlspecialchars($nome) ?>">
        <input type="checkbox" name="save_nome"> Salvar este campo<br><br>


        <label for="titulo">Digite o título do projeto: </label>
        <input type="text" name="titulo" value="<?= htmlspecialchars($titulo) ?>">
        <input type="checkbox" name="save_titulo"> Salvar este campo<br><br>


        <label for="horas">Digite o total de horas: </label>
        <input type="number" name="horas" value="<?= htmlspecialchars($horas) ?>">
        <input type="checkbox" name="save_horas"> Salvar este campo<br><br>


        <button type="submit">Gerar Declaração</button>

    </form>
    <br><br>

    <strong> <?= $declaracao;?> </strong>

    <br><br>

    <a href="?zerar=true">Zerar informações</a>
    
</body>
</html>
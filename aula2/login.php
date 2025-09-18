<?php
session_start();
$us= $_POST['usuario'];
$se= $_POST['senha'];

if ($us=="admin" && $se=="abacate"){
    $_SESSION['logado'] = true;
    header("Location: restrita.php");
} else {
    $_SESSION['logado'] = false;
    echo "Usuario ou senha incorretos";
    include("index.php");
}
?>
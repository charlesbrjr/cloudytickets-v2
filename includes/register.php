<?php
/* <!-- REGISTRO DE USUARIO --> */
include "config.php";

$registro = $_POST['registrar'];

// adicionar usuarios
if ($registro == "Registrar") {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    mysqli_query($dbOpen, "INSERT INTO usuario(nome, email, senha) VALUES('$nome', '$email', $senha)");
    mysqli_close($dbOpen);
    header("Location: ./src/home.php");
} else {
    header("Location: login.php");
}

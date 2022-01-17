<?php
/* <!-- REGISTRO DE USUARIO --> */
session_start();
include "config.php";
$registro = $_POST['Registrar'];
$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
$senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);

/* -----------VALIDADOR---------------- */
$query = mysqli_query($dbOpen, "SELECT * FROM usuario WHERE email='$email'");

if (mysqli_num_rows($query) == 0) {
    $erro = 0;

    //Verifica se o campo email é valido
    if (true) { /* FILTER_VALIDATE_EMAIL */
        echo "Seu e-mail é " . $email;

        //Verifica se o campo nome não está em branco.
        if (!empty($nome)) {

            //Verifica se o campo senha não está em branco.
            if (!empty($senha)) {
                // adiciona usuarios ao banco de dados 
                if (true) {
                    $senha = hash('md5', $_POST['senha']);
                    mysqli_query($dbOpen, "INSERT INTO usuario(nome, email, senha) VALUES('$nome', '$email', '$senha')");
                    $query = mysqli_query($dbOpen, "SELECT id_usuario FROM usuario WHERE email='$email'");
                    $row = mysqli_fetch_array($query);
                    $id = $row[0];
                    $_SESSION['id'] = $id;
                    mysqli_close($dbOpen);
                    header("Location: ./src/home.php");
                } else {
                    header("Location: login.php");
                }
            } else {
                echo "Digite a senha";
                echo $erro = 1;
            }
        } else {
            echo "Favor digitar seu nome";
            echo $erro = 1;
        }
    } else {
        echo "E-mail inválido.";
    }
    if ($erro == 0) {
        echo "Todos os dados foram preenchidos";
    }
} else {
    echo "<script type='text/javascript'>alert('Email já cadastrado');</script>";
    echo "<script>javascript:window.location='login.php';</script>";
}

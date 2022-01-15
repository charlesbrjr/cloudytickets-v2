<?php
/* <!-- REGISTRO DE USUARIO --> */
session_start();
include "config.php";
$registro = $_POST['Registrar'];
$entrar = filter_input(INPUT_POST, 'entrar', FILTER_SANITIZE_URL);
$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
$senha = filter_input(INPUT_POST, 'senha', FILTER_VALIDATE_INT);

/* -----------VALIDADOR---------------- */
if (true) {
    $erro = 0;

    //Verifica se o campo email é valido
    $email = $_POST['email'];
    if (true) { /* FILTER_VALIDATE_EMAIL */
        echo "Seu e-mail é " . $email;
        /* echo $erro = 0; */

        //Verifica se o campo nome não está em branco.
        $nome = $_POST['nome'];
        if (!empty($nome)) {

            //Verifica se o campo senha não está em branco.
            $senha = $_POST['senha'];
            if (!empty($senha)) {
                // adiciona usuarios ao banco de dados 
                if (true) {
                    $nome = $_POST['nome'];
                    $email = $_POST['email'];
                    $senha = hash('md5', $_POST['senha']);
                    mysqli_query($dbOpen, "INSERT INTO usuario(nome, email, senha) VALUES('$nome', '$email', $senha)");

                    $query = mysqli_query($dbOpen, "SELECT id_usuario FROM usuario WHERE email='$email'");
                    $result = mysqli_fetch_array($query);
                    $id = $result[0];
                    $_SESSION['id'] = $id;

                    mysqli_close($dbOpen);
                    /* header("Location: ./src/home.php"); */
                } else {
                    header("Location: login.php");
                }
            } else {
                echo ("Digite a senha");
                echo $erro = 1;
            }
        } else {
            echo ("Favor digitar seu nome");
            echo $erro = 1;
        }
    } else {
        echo "E-mail inválido.";
    }

    if ($erro == 0) {
        echo "Todos os dados foram preenchidos";
    }
} else {
    $_SESSION['msg'] = "Página não encontrada";
    header("Location: login.php");
}

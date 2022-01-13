<?php
/* <!-- REGISTRO DE USUARIO --> */
include "./includes/config.php";

$registro = $_POST['registrar'];

// adicionar usuarios
if ($registro == "Registrar") {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = hash('md5', $_POST['senha']);
    mysqli_query($dbOpen, "INSERT INTO usuario(nome, email, senha) VALUES('$nome', '$email', $senha)");
    mysqli_close($dbOpen);
    header("Location: ./src/home.php");
} else {
    header("Location: login.php");
}

/* -----------VALIDADOR---------------- */
/* 
$entrar = filter_input(INPUT_POST, 'entrar', FILTER_SANITIZE_URL);
$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
$senha = filter_input(INPUT_POST, 'senha', FILTER_VALIDATE_INT);

if ($entrar) {
    $erro = 0;

    //Verifica se o campo email e valido
    $email = $_POST["email"];
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "E-mail inválido.";
    } else {
        echo "Seu e-mail é " . $email;
        echo $erro = 1;
    }

    //Verifica se o campo nome não está em branco.
    $nome = $_POST["nome"];
    if (empty($nome) or trim($nome, '') == false) {
        echo ("Favor digitar seu nome");
        echo $erro = 1;
    }

    //Verifica se o campo nome não está em branco.
    $senha = $_POST["senha"];
    if ($senha) {
        $senha = $_POST['senha'];
        if ($senha == "") {
            $mensagem = "<span class='aviso'><b>Aviso</b>: Senha não foi alterada!</span>";
        }
        echo "<p id='mensagem'>" . $mensagem . "</p>";
    }

    if ($erro == 0) {
        echo "Todos os dados foram preenchidos";
    }
} else {
    $_SESSION['msg'] = "Página não encontrada";
    header("Location: login.php");
}
 */
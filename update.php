<!-- ATUALIZAÇÃO DE DADOS -->
<?php
session_start();
include "config.php";

$id = $_SESSION['id'];
$query = mysqli_query($dbOpen, "SELECT * FROM usuario WHERE id_usuario=$id");
$row = mysqli_fetch_array($query);
$nome = $row[1];
$email = $row[2];
$senha = $_SESSION['pwd'];

$novoNome = filter_input(INPUT_POST, 'novoNome', FILTER_SANITIZE_STRING);
$novoEmail = filter_input(INPUT_POST, 'novoEmail', FILTER_VALIDATE_EMAIL);
$novaSenha = filter_input(INPUT_POST, 'novaSenha', FILTER_SANITIZE_STRING);

$msg = "";

//verificar se o nome foi mudado
if ($nome != $novoNome) {
    mysqli_query($dbOpen, "UPDATE usuario SET nome = '$novoNome' WHERE id_usuario=$id");
    $msg = "Nome alterado\\n";
}

//verificar se o email foi mudado
if ($email != $novoEmail) {
    $query = mysqli_query($dbOpen, "SELECT * FROM usuario WHERE email='$novoEmail'");

    if (mysqli_num_rows($query) == 0) {
        mysqli_query($dbOpen, "UPDATE usuario SET email = '$novoEmail' WHERE id_usuario=$id");
        $msg = $msg . "Email alterado\\n";
    } else {
        echo "<script type='text/javascript'>alert('Email já cadastrado');</script>";
        echo "<script>javascript:window.location='./src/User.php';</script>";
    }
}

//verificar se a senha foi mudada
if ($senha != $novaSenha) {
    $_SESSION['pwd'] = $novaSenha;
    $novaSenha = hash('md5', $novaSenha);
    mysqli_query($dbOpen, "UPDATE usuario SET senha = '$novaSenha' WHERE id_usuario=$id");
    $msg = $msg . "Senha alterada";
}

//retorno
if ($msg != "") {
    echo "<script type='text/javascript'>alert('$msg');</script>";
    echo "<script>javascript:window.location='./src/home.php';</script>";
} else {
    echo "<script type='text/javascript'>alert('Nada alterado');</script>";
    echo "<script>javascript:window.location='./src/home.php';</script>";
}

//excluir user 



?>
<!-- LOGIN DE USUARIO -->
<?php
session_start();
include_once "config.php";

// Se a autenticação não foi enviada
if (empty($email)) {
    $response["success"] = 0;
    $response["error"] = "faltam parametros";
}
// Se houve envio dos dados
else {
    $query = mysqli_query($dbOpen, "SELECT senha FROM email WHERE email='$email'");

    if (mysqli_num_rows($query) > 0) {
        $row = mysqli_fetch_array($query);
        if (hash('md5', $senha) == $row['senha']) {
            $response["success"] = 1;
        } else {
            //senha ou usuario nao confere
            $response["success"] = 0;
            $response["error"] = "email ou senha não confere";
        }
    } else {
        // senha ou usuario nao confere
        $response["success"] = 0;
        $response["error"] = "email ou senha não confere";
    }
}


/* -----------senha criptografada---------------- */
/* if ((!empty($email)) && (!empty($senha))) {
    //Gerar a senha criptografa
    echo md5($senha, PASSWORD_DEFAULT);
    //Pesquisar o usuário no BD
    $result_usuario = "SELECT id, nome, email, senha FROM usuario WHERE email='$email' LIMIT 1";
    $resultado_usuario = mysqli_query($dbOpen, $result_usuario);
    if ($resultado_usuario) {
        $row_usuario = mysqli_fetch_assoc($resultado_usuario);
        if (md5($senha, $row_usuario['senha'])) {
            $_POST['id'] = $row_usuario['id'];
            $_POST['nome'] = $row_usuario['nome'];
            $_POST['email'] = $row_usuario['email'];
            $_POST['senha'] = $row_usuario['senha'];
        } else {
            $_SESSION['msg'] = "Login e senha incorreto!";
            header("Location: login.php");
        }
    }
} else {
    $_SESSION['msg'] = "Login e senha incorreto!";
    header("Location: login.php");
}
*/
mysqli_close($bdOpen);
?>
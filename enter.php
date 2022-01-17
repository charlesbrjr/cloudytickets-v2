<!-- LOGIN DE USUARIO -->
<?php
session_start();
include_once "config.php";
$email = $_POST['email'];
$senha = $_POST['senha'];
// Se a autenticação não foi enviada
if (empty($email)) {
    $response["success"] = 0;
    $response["error"] = "faltam parametros";
}
// Se houve envio dos dados
else {
    $query = mysqli_query($dbOpen, "SELECT senha FROM usuario WHERE email='$email'");

    if (mysqli_num_rows($query) > 0) {
        $row = mysqli_fetch_array($query);
        if (hash('md5', $senha) == $row['senha']) {
            $response["success"] = 1;
            $query = mysqli_query($dbOpen, "SELECT id_usuario FROM usuario WHERE email='$email'");
            $row = mysqli_fetch_array($query);
            $id = $row[0];
            $_SESSION['id'] = $id;

            header("Location: ./src/home.php");
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
?>
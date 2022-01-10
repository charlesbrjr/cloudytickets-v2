<!-- LOGIN DE USUARIO -->
<?php
include_once "config.php";

// Se a autenticação não foi enviada
if (is_null($email)) {
    $response["success"] = 0;
    $response["error"] = "faltam parametros";
}
// Se houve envio dos dados
else {
    $query = mysqli_query($bdOpen, "SELECT senha FROM email WHERE email='$email'");

    if (mysqli_num_rows($query) > 0) {
        $row = mysqli_fetch_array($query);
        if ($senha == $row['senha']) {
            $response["success"] = 1;
        } else {
            // senha ou usuario nao confere
            $response["success"] = 0;
            $response["error"] = "email ou senha não confere";
        }
    } else {
        // senha ou usuario nao confere
        $response["success"] = 0;
        $response["error"] = "email ou senha não confere";
    }
}
pg_close($bdOpen);
?>
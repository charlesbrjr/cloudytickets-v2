<?php
session_start();
include '../config.php';

$sql = "SELECT usuario.nome, usuario.email, eventos.atracao 
FROM usuario, ingresso, eventos 
WHERE usuario.id_usuario = ingresso.FK_USUARIO_id_usuario
AND ingresso.FK_EVENTOS_id_evento = eventos.id_evento";
$aux = mysqli_query($dbOpen, $sql);
?>

<!DOCTYPE html>
<html lang="pt_BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <title> cloudyticket | Show da Lana Del Rey</title>

    <link rel="stylesheet" href="../assets/css/styles.css">
</head>

<body>
    <!-- Page Content -->
    <div id="container">
        <div class="w3-container">
            <div class="textContainer">
                <table border="1" width="100%">
                    <tr>
                        <th>NOME</th>
                        <th>EVENTO</th>
                        <th>AÇÕES</th>
                    </tr>
                    <?php
                    include '../config.php';
                    while ($row = mysqli_fetch_array($aux)) {
                        echo "<tr><td>" . $row['nome'] . "</td><td>" .
                            $row['atracao'] .
                            "<td><a 
                        href='ticket.php'>
                        [Ver]</a> 
                        </td></tr>";
                    }
                    ?>


                </table>
            </div>
        </div>
    </div>
    <?php include '../includes/footer.php'; ?>
</body>

</html>
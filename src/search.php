<?php
session_start();
include '../config.php';
include 'buyticketshow.php';
$id_evento = $_SESSION['id_evento'];


$lista = [];
$sql = "SELECT usuario.nome, usuario.email, eventos.atracao 
FROM usuario, ingresso, eventos 
WHERE usuario.id_usuario = ingresso.FK_USUARIO_id_usuario
AND ingresso.FK_EVENTOS_id_evento = eventos.id_evento
AND eventos.id_evento = '$id_evento'";
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
    <?php include '../sidebar.php'; ?>
    <!-- Page Content -->
    <div style="margin-left:5%">
        <div class="w3-container">
            <div class="textContainer">
                <label class="sr-only">Quantidade de Ingresso</label>
                <input type="text">
                <table border="1" width="100%">
                    <tr>
                        <th>NOME</th>
                        <th>EVENTO</th>
                        <th>QUANTIDADE</th>
                        <th>AÇÕES</th>
                    </tr>
                    <?php
                    while ($row = mysqli_fetch_array($aux)) {
                        echo "<tr><td>" . $row['nome'] . "</td><td>" .
                            $row['evento'] . $row['quantidade'] .
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
    <?php include '../footer.php'; ?>
</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <title> cloudyticket </title>

    <link rel="stylesheet" href="../assets/css/styles.css">
    <link rel="stylesheet" href="../assets/css/global.css">
    <link rel="stylesheet" href="../assets/css/buytickets.css">

</head>

<body>
    <!-- Page Content -->
    <div id="container">
        <div class="w3-container">
            <h2>Ticket</h2>
            <div class="textContainer">
                <div class="ticketBuy">
                    <br />
                    <?php
                    include '../config.php';
                    session_start();
                    $id  = $_SESSION['id'];
                    $query = mysqli_query($dbOpen, "SELECT nome FROM usuario WHERE id_usuario = '$id'");
                    $row = mysqli_fetch_array($query);
                    $nome = $row[0];
                    $id_evento = $_SESSION['id_evento'];
                    $query = mysqli_query($dbOpen, "SELECT atracao FROM evento WHERE id_evento = '$id_evento'");
                    $row = mysqli_fetch_array($query);
                    $atracao = $row[0];
                    echo "Evento: " . $atracao;
                    echo "<br />";
                    echo "Usuário: " . $nome;
                    mysqli_close($dbOpen);
                    ?>
                    <p>Quantidade de Ingresso: 1</p>
                    <p>A compra só é confirmada quando houver o envio do documento para confirmar a sua identidade</p>
                    <a href="../upload.php">
                        <img class="download" src="../assets/images/download.svg" alt="Imagem de Download">
                    </a>
                </div>
            </div>
        </div>
        <?php include '../includes/footer.php'; ?>
</body>

</html>
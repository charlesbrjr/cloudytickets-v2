<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <title> cloudyticket </title>

    <link rel="stylesheet" href="../assets/css/styles.css">

</head>

<body>
    <!-- Page Content -->
    <div id="container">
        <div class="w3-container">
            <div class="textContainer">
                <h2>Ticket</h2>
                <div class="ticketBuy">
                    <a href="../upload.php">
                        <img src="../assets/images/download.svg" alt="Imagem de Download">
                    </a>
                    <?php
                    include '../config.php';
                    session_start();
                    $id  = $_SESSION['id'];
                    $sql = "SELECT nome FROM usuario WHERE id_usuario = '$id'";
                    $aux = mysqli_query($dbOpen, $sql);
                    $id_evento = $_SESSION['id_evento'];
                    echo $id_evento;
                    echo "<br />";
                    echo $id;
                    mysqli_close($dbOpen);
                    ?>
                    <p>Quantidade de Ingresso: (1)</p>
                </div>
            </div>
        </div>
        <?php include '../includes/footer.php'; ?>
</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <title> cloudyticket </title>

    <link rel="stylesheet" href="../assets/css/styles.css">
    <link rel="stylesheet" href="../assets/css/reset.css">
    <link rel="stylesheet" href="../assets/css/global.css">

</head>

<!-- uma pagina de exibição de ticket -->

<body>
    <?php include '../includes/sidebar.php'; ?>
    <!-- Page Content -->
    <div id="container">
        <div class="w3-container">
            <div class="textContainer">
                <h2>Ticket</h2>
                <div class="ticketBuy">
                    <img src="../assets/images/download.svg" alt="Imagem de Download">
                    <a href="../upload.php">Ver documento</a>
                    <?php
                    include '../config.php';
                    $nome = $_POST['nome'];
                    $sql = "SELECT nome FROM usuario WHERE id_usuario='$id'";
                    $aux = mysqli_query($dbOpen, $sql);
                    ?>
                    <p>Quantidade de Ingresso: {1}</p>
                    <?php
                    include '../config.php';
                    $atracao = $_POST['atracao'];
                    $sql = "SELECT atracao FROM eventos WHERE atracao='$atracao'";
                    $aux = mysqli_query($dbOpen, $sql);
                    ?>
                </div>
            </div>
        </div>
        <?php include '../includes/footer.php'; ?>
</body>

</html>
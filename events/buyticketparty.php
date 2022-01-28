<!DOCTYPE html>
<html lang="en">

<head>
    <?php include "../src/header.php"; ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <title> cloudyticket</title>

    <link rel="stylesheet" href="../assets/css/styles.css">
    <link rel="stylesheet" href="../assets/css/buytickets.css">
    <link rel="stylesheet" href="../assets/css/global.css">
</head>

<body>
    <!-- Page Content -->
    <div id="container">
        <div class="w3-container">
            <!-- PHP - INCLUDE SIDEBAR -->
            <?php include '../includes/iconHome.php'; ?>
            <div class="textContainer">
                <img class="imgTicket" src="../assets/images/povoanimado.jpg">
            </div>
            <div class="textContent">
                <p class="text">
                <h1>Festa do Povo Animado</h1>
                A Festa do Povo Animado, ou Parada do P.A.,
                é uma série de eventos de ações afirmativas
                para a comunidade P.A. que comemoram o orgulho
                e a cultura de pessoas animadas.
                <p>20 de março</p>
                <p class="price">R$25,00</p>
                </p>
                <label>
                    <!-- PHP - INCLUDE SIDEBAR -->
                    <?php
                    include '../config.php';
                    $_SESSION['id_evento'] = 2;
                    $id_evento = $_SESSION['id_evento'];
                    $query = mysqli_query($dbOpen, "SELECT qtd_ingresso FROM evento WHERE id_evento=$id_evento");
                    $row = mysqli_fetch_array($query);
                    $qtd_ingresso = $row[0];

                    $query = mysqli_query($dbOpen, "SELECT * FROM ingresso WHERE FK_EVENTO_id_evento=$id_evento");
                    $vendidos = mysqli_num_rows($query);
                    $restante = $qtd_ingresso - $vendidos;
                    echo "Ingressos restantes: ", $restante;
                    //calculo da quantidade de ingressos restantes
                    ?>
                </label>
                <a href="../src/ticket.php">
                    <button>Comprar ingresso</button>
                </a>
                <a href="../src/search.php">
                    <button>Ingressos vendidos</button>
                </a>
                <a href="../upload.php">
                    <button>Anexar Documento</button>
                </a>
                <address>
                    <a href="mailto:learningitprogramming@gmail.com">Entre em contato</a>
                </address>
            </div>
            <br />
        </div>
    </div>
    <!-- PHP - INCLUDE FOOTER -->
    <?php include '../includes/footer.php'; ?>
</body>

</html>
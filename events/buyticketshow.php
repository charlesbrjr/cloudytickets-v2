<?php
$_SESSION['id_evento'] = 1;
?>

<!DOCTYPE html>
<html lang="en">

<head>
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
    <?php
    include '../config.php';
    session_start();
    $_SESSION['id_evento'] = 1;
    $id_evento = $_SESSION['id_evento'];
    $query = mysqli_query($dbOpen, "SELECT qtd_ingresso FROM eventos WHERE id_evento=$id_evento");
    $row = mysqli_fetch_array($query);
    $qtd_ingresso = $row[0];

    $query = mysqli_query($dbOpen, "SELECT * FROM ingresso WHERE FK_EVENTOS_id_evento=$id_evento");
    $vendidos = mysqli_num_rows($query);
    echo "Ingressos restantes: ", $qtd_ingresso-$vendidos;
    //calculo da quantidade de ingressos restantes
    ?>
    <!-- Page Content -->
    <div id="container">
        <div class="w3-container">
            <!-- PHP - INCLUDE SIDEBAR -->
            <?php include '../includes/iconHome.php'; ?>
            <div class="textContainer">
                <img class="imgTicket" src="../assets/images/lanadelrey.jpg">
            </div>
            <div class="textContent">
                <p class="text">
                <h1>Show da Lana Del Rey</h1>
                A música de Lana Del Rey é marcada por um estilo que pode ser descrito como cinematográfico.
                A tragédia romântica e a melancolia, estão entre seus temos favoritos, assim como as
                referências à cultura pop, principalmente aquelas das décadas de 1950 e 1960 na América.
                <p>10 de janeiro</p>
                <p class="price">R$200,00</p>
                </p>
                <label>Quantidade de Ingressos</label>
                <input type="number" name="qtdticket" min="0">
                <a href="../src/ticket.php">
                    <button>Comprar Ingressos</button>
                </a>
                <a href="../src/search.php">
                    <button>Ingressos vendidos</button>
                </a>
                <a href="../upload.php">[Anexar Documento]</a>
                <address>
                    <a href="mailto:learningitprogramming@gmail.com">Entre em contato</a>
                </address>
            </div>
            <br />
        </div>
    </div>
    <?php include '../includes/footer.php'; ?>
</body>

</html>
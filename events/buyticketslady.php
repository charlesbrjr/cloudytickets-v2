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
    <!-- Page Content -->
    <div id="container">
        <div class="w3-container">
            <!-- PHP - INCLUDE SIDEBAR -->
            <?php include '../includes/iconHome.php'; ?>
            <div class="textContainer">
                <img class="imgTicket" src="../assets/images/ladygaga.jpg">
            </div>
            <div class="textContent">
                <p class="text">
                <h1>Show da Lady Gaga</h1>
                Lady Gaga é uma força da natureza: com apenas 35 anos ela é cantora,
                compositora, atriz, produtora musical e empresária. Com um repertório
                extenso de sucessos, Lady Gaga revolucionou o mundo do pop e hoje se
                destaca como um dos maiores nomes da música contemporânea.
                <p>12 de março</p>
                <p class="price">R$200,00</p>
                </p>
                <label>
                    <?php
                    include '../config.php';
                    session_start();
                    $_SESSION['id_evento'] = 5;
                    $id_evento = $_SESSION['id_evento'];
                    $query = mysqli_query($dbOpen, "SELECT qtd_ingresso FROM eventos WHERE id_evento=$id_evento");
                    $row = mysqli_fetch_array($query);
                    $qtd_ingresso = $row[0];

                    $query = mysqli_query($dbOpen, "SELECT * FROM ingresso WHERE FK_EVENTOS_id_evento=$id_evento");
                    $vendidos = mysqli_num_rows($query);
                    echo "Ingressos restantes: ", $qtd_ingresso - $vendidos;
                    //calculo da quantidade de ingressos restantes
                    ?>
                    <input type="number" name="qtdticket" min="0">
                </label>
                <a href="../src/ticket.php">
                    <button>Comprar 1 ingresso</button>
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
    <?php include '../includes/footer.php'; ?>
</body>

</html>
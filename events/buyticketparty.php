<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <title> cloudyticket</title>

    <link rel="stylesheet" href="../assets/css/styles.css">
    <link rel="stylesheet" href="../assets/css/reset.css">
    <link rel="stylesheet" href="../assets/css/global.css">
    <link rel="stylesheet" href="../assets/css/buytickets.css">


</head>

<body>
    <!-- PHP - INCLUDE SIDEBAR -->
    <?php include '../includes/sidebar.php'; ?>
    <!-- Page Content -->
    <div id="container">
        <div class="w3-container">
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
                <label>Quantidade de Ingressos</label>
                <input type="number" name="qtdticket" min="0">
                <a href="ticket.php">
                    <button>Comprar Ingressos</button>
                </a>
                <a href="search.php">
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
    <!-- PHP - INCLUDE FOOTER -->
    <?php include '../includes/footer.php'; ?>
</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <title>cloudyticket</title>

    <link rel="stylesheet" href="../assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/reset.css">
    <link rel="stylesheet" href="../assets/css/global.css">
    <link rel="stylesheet" href="../assets/css/buytickets.css">


</head>

<body>
    <?php include '../sidebar.php'; ?>
    <!-- Page Content -->
    <div id="container">
        <div class="w3-container">
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
    <?php include '../footer.php'; ?>
</body>

</html>
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
    <title> <?php echo $_SESSION['nome']; ?></title>

    <link rel="stylesheet" href="../assets/css/styles.css">
</head>

<body>
    <?php include '../sidebar.php'; ?>
    <!-- Page Content -->
    <div style="margin-left:5%">
        <div class="w3-container">
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
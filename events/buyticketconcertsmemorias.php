<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <title>cloudyticket</title>

    <link rel="stylesheet" href="../assets/css/styles.css">
    <link rel="stylesheet" href="../assets/css/reset.css">
    <link rel="stylesheet" href="../assets/css/global.css">
    <link rel="stylesheet" href="../assets/css/buytickets.css">


</head>

<body>
    <?php include '../sidebar.php'; ?>
    <!-- Page Content -->
    <div id="container">
        <div class="w3-container">
            <div class="textContainer">
                <img class="imgTicket" src="../assets/images/teatro.png">
            </div>
            <div class="textContent">
                <p class="text">
                <h1>Peça Memórias Póstumas de Brás Cubas</h1>
                Após ter morrido, em pleno ano de 1869, Brás Cubas decide
                por narrar sua história e revisitar os fatos mais importantes
                de sua vida, a fim de se distrair na eternidade. A partir de
                então ele relembra de amigos como Quincas Borba, de sua displicente
                formação acadêmica em Portugal, dos amores de sua vida e ainda do
                privilégio que teve de nunca ter precisado trabalhar em sua vida.
                <p>15 de janeiro</p>
                <p class="price">R$30,00</p>
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
    <?php include '../footer.php'; ?>
</body>

</html>
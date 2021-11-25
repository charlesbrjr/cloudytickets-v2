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
                <img class="imgTicket" src="../assets/images/houseofGucci.jpg">
            </div>
            <div class="textContent">
                <p class="text">
                <h1>Teatro House of Gucci</h1>
                House of Gucci é a encenação da história de Patrizia Reggiani,
                ex-mulher de Maurizio Gucci, membro da família fundadora da
                marca italiana Gucci. Patrizia conspirou para matar o marido
                em 1995, contratando um matador de aluguel e outras três pessoas,
                incluindo o terapeuta. Ela foi considerada culpada e condenada a
                29 anos de prisão. Quase 3 décadas de amor, traição, decadência,
                vingança e assassinato, a peça revela a importância e poder que o
                nome Gucci carrega e o quanto a família faz para ter o controle.
                <p>25 de novembro</p>
                <p class="price">R$35,00</p>
                </p>
                <label>Quantidade de Ingressos</label>
                <input type="number" name="qtdticket" min="0">
                <a href="home.php">
                    <button>Comprar Ingressos</button>
                </a>
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

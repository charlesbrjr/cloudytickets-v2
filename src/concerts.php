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
            <main>
                <!--Destaques-->
                <section id="projetos">
                    <div class="container">
                        <h1>Teatro</h1>
                        <div class="larguraMaxContainer">
                            <div>
                                <!-- Festa do Povo Animado -->
                                <article class="cards-interval">
                                    <h3>Teatro House of Gucci</h3>
                                    <img src="../assets/images/houseofGucci.jpg" alt="Foto de Festa de um Povo Animado">
                                    <div>
                                        <button>
                                            <a href="buyticketconcerts.php" target="_blank" class="button">
                                                Saiba mais
                                            </a>
                                        </button>
                                    </div>
                                </article>

                                <!-- Lana Del Rey -->
                                <article class="cards-interval">
                                    <h3>Teatro Peça Memórias Póstumas de Brás Cubas</h3>
                                    <img src="../assets/images/teatro.png"
                                        alt="Teatro Peça Memórias Póstumas de Brás Cubas">
                                    <div>
                                        <button>
                                            <a href="home.php" target="_blank" class="button">
                                                Em breve
                                            </a>
                                        </button>
                                    </div>
                                </article>
                            </div>

                            <?php include '../footer.php'; ?>
            </main>
        </div>
    </div>
</body>

</html>
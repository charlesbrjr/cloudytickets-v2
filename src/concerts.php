<!DOCTYPE html>
<html lang="en">

<head>
    <?php include "header.php"; ?>

    <link rel="stylesheet" href="../assets/css/styles.css">
    <link rel="stylesheet" href="../assets/css/global.css">
    <link rel="stylesheet" href="../assets/css/buytickets.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
</head>

<body>
    <!-- Page Content -->
    <div id="container">
        <div class="w3-container">
            <main>
                <!--Destaques-->
                <section id="projetos">
                    <div class="container">
                        <!-- PHP - INCLUDE SIDEBAR -->
                        <?php include '../includes/sidebar.php'; ?>
                        <h1>Teatro</h1>
                        <div class="larguraMaxContainer">
                            <div>
                                <!-- House of Gucci -->
                                <article class="cards-interval">
                                    <h3>Teatro House of Gucci</h3>
                                    <img src="../assets/images/houseofGucci.jpg" alt="Foto de Festa de um Povo Animado">
                                    <div>
                                        <button>
                                            <a href="../events/buyticketconcerts.php" target="_blank" class="button">
                                                Saiba mais
                                            </a>
                                        </button>
                                    </div>
                                </article>

                                <!-- Teatro Peça de Bras Cubas -->
                                <article class="cards-interval">
                                    <h3>Teatro Peça Memórias Póstumas de Brás Cubas</h3>
                                    <img src="../assets/images/teatro.png" alt="Teatro Peça Memórias Póstumas de Brás Cubas">
                                    <div>
                                        <button>
                                            <a href="../events/buyticketconcertsmemorias.php" target="_blank" class="button">
                                                Saiba mais
                                            </a>
                                        </button>
                                    </div>
                                </article>
                            </div>

                            <?php include '../includes/footer.php'; ?>
            </main>
        </div>
    </div>
</body>

</html>
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
                        <h1>Festas</h1>
                        <div class="larguraMaxContainer">
                            <div>
                                <!-- Festa do Povo Animado -->
                                <article class="cards-interval">
                                    <h3>Festa do Povo Animado</h3>
                                    <img src="../assets/images/povoanimado.jpg" alt="Foto de Festa de um Povo Animado">
                                    <div>
                                        <button>
                                            <a href="../events/buyticketparty.php" target="_blank" class="button">
                                                Saiba mais
                                            </a>
                                        </button>
                                    </div>
                                </article>

                                <!-- Lana Del Rey -->
                                <article class="cards-interval">
                                    <h3>Festa do TikTok</h3>
                                    <img src="../assets/images/titok.jpg" alt="Show da Lana Del Rey">
                                    <div>
                                        <button>
                                            <a target="_blank" class="button">
                                                Em breve
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
</div>

</div>
</body>

</html>
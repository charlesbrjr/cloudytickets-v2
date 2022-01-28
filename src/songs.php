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
                        <h1>Show</h1>
                        <div class="larguraMaxContainer">
                            <div>
                                <!-- Lana Del Rey -->
                                <article class="cards-interval">
                                    <h3>Show da Lana Del Rey</h3>
                                    <img src="../assets/images/lanadelrey.jpg" alt="Show da Lana Del Rey">
                                    <div>
                                        <button>
                                            <a href="../events/buyticketshow.php" target="_blank" class="button">
                                                Saiba mais
                                            </a>
                                        </button>
                                    </div>
                                </article>

                                <!-- Teatro House of Gucci -->
                                <article class="cards-interval">
                                    <h3>Show da Lady Gaga</h3>
                                    <img src="../assets/images/ladygaga.jpg" alt="Teatro da Casa dos Gucci">
                                    <div>
                                        <button>
                                            <a href="../events/buyticketslady.php" target="_blank" class="button">
                                                Saiba mais
                                            </a>
                                        </button>
                                    </div>
                                </article>
                                <article class="cards-interval">
                                    <h3>Show da Imagine Dragons</h3>
                                    <img src="../assets/images/imagedragons.jpg" alt="Teatro da Casa dos Gucci">
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

</html>
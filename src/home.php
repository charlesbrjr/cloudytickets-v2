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
                        <div class="separator"></div>
                        <h1>Cloudy Tickets</h1>
                        <!--  <div class="separator"></div> -->
                        <div id="myCarousel" class="carousel slide" data-ride="carousel">
                            <!-- Indicators -->
                            <ol class="carousel-indicators">
                                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                <li data-target="#myCarousel" data-slide-to="1"></li>
                            </ol>

                            <!-- Wrapper for slides -->
                            <div class="carousel-inner">
                                <div class="item active">
                                    <img src="../assets/images/imagedragons.jpg" alt="camila cabello" style="width:100%;">
                                    <div class="carousel-caption">
                                        <h3>Imagine Dragons</h3>
                                        <p>Próximo show em SP!</p>
                                    </div>
                                </div>

                                <div class="item">
                                    <img src="../assets/images/titok.jpg" alt="rede social tiktok" style="width:100%;">
                                    <div class="carousel-caption">
                                        <h3>Festa do TikTok</h3>
                                        <p>A festa vai rolar no final de ano!</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Left and right controls -->
                            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="right carousel-control" href="#myCarousel" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>

                    <!-- DESTAQUES DE SHOW, FESTA E TEATRO -->
                    <div class="larguraMaxContainer">
                        <div>
                            <!-- Festa do Povo Animado -->
                            <article class="cards-interval">
                                <h3>Festa do Povo Animado</h3>
                                <img src="../assets/images/povoanimado.jpg" alt="Foto de Festa de um Povo Animado">
                                <div>
                                    <a href="../events/buyticketparty.php" target="_blank" class="button">
                                        Saiba mais
                                    </a>
                                </div>
                            </article>

                            <!-- Lana Del Rey -->
                            <article class="cards-interval">
                                <h3>Show da Lana Del Rey</h3>
                                <img src="../assets/images/lanadelrey.jpg" alt="Show da Lana Del Rey">
                                <div>
                                    <a href="../events/buyticketshow.php" target="_blank" class="button">
                                        Saiba mais
                                    </a>
                                </div>
                            </article>

                            <!-- Teatro House of Gucci -->
                            <article class="cards-interval">
                                <h3>Teatro House of Gucci</h3>
                                <img src="../assets/images/houseofGucci.jpg" alt="Teatro da Casa dos Gucci">
                                <div>

                                    <a href="../events/buyticketconcerts.php" target="_blank" class="button">
                                        Saiba mais
                                    </a>

                                </div>
                            </article>

                            <article class="cards-interval">
                                <h3>Peça Memórias Póstumas de Brás Cubas</h3>
                                <img src="../assets/images/teatro.png" alt="Foto de Festa de um Povo Animado">
                                <div>
                                    <a href="../events/buyticketconcertsmemorias.php" target="_blank" class="button">
                                        Saiba mais
                                    </a>
                                </div>
                            </article>

                            <article class="cards-interval">
                                <h3>Show da Lady Gaga</h3>
                                <img src="../assets/images/ladygaga.jpg" alt="Foto de Festa de um Povo Animado">
                                <div>
                                    <a href="../events/buyticketslady.php" target="_blank" class="button">
                                        Saiba mais
                                    </a>
                                </div>
                            </article>
                            <article class="cards-interval">
                                <h3>Festa do TikTok</h3>
                                <img src="../assets/images/titok.jpg" alt="Festa do Tiktok">
                                <div>
                                    <a target="_blank" class="button">
                                        Em breve
                                    </a>
                                </div>
                            </article>
                        </div>

                        <!-- PHP - INLCUDE FOOTER -->
                        <?php include '../includes/footer.php'; ?>
            </main>

</body>
</div>

</div>
</body>

</html>
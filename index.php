<!-- 
    Dupla: Charles Junior e Shayane Teixeira
-->


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Site de Música</title>

    <!-- STYLES -->
    <link rel="stylesheet" href="assets/css/styles.css">

</head>

<body>
    <main>
        <div class="header">
            <div class="content first-content">
                <div class="first-column">
                    <?php include 'login.php'; ?>
                </div>
                <form class="form" action="registrar.php" method="POST">
                    <h1 class="formRegister">Crie sua conta</h1>
                    <p class="description description-primary">Se conecte com o nosso grupo.</p>
                    <label class="label-input">
                        <input name="nome" id="nome" type="text" placeholder="Nome">
                    </label>

                    <label class="label-input">
                        <input name="email" id="email" type="email" placeholder="E-mail">
                    </label>

                    <label class="label-input">
                        <input name="senha" id="senha" type="password" placeholder="Senha">
                    </label>
                    <input type="submit" class="btn btn-second" value="Registrar" name="registrar" />
                </form>
            </div>
    </main>
    <?php include 'footer.php'; ?>
</body>

</html>

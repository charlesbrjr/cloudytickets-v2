<!DOCTYPE html>
<html lang="pt_BR">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <!-- STYLES -->
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/global.css">
</head>

<body>
    <?php
    session_start();
    include 'config.php';

    $id = $_SESSION['id'];
    $query = mysqli_query($dbOpen, "SELECT * FROM usuario WHERE id_usuario=$id");
    $row = mysqli_fetch_array($query);
    $nome = $row[1];
    $email = $row[2];
    $senha = $row[3];
    ?>
    <main>
        <div class="header">
            <form class="form" action="update.php" method="POST">
                <h2 class="formRegister">Edite seus dados</h2>
                <p class="description description-primary">Atualize suas principais informações aqui.</p>
                <label class="label-input">
                    <input name="nome" id="nome" type="text" placeholder="Nome" value="<?php echo $nome; ?>" required>
                </label>
                <label class="label-input">
                    <input name="email" id="email" type="email" placeholder="E-mail" value="<?php echo $email; ?>" required>
                </label>
                <label class="label-input">
                    <input name="senha" id="senha" type="password" placeholder="Senha" value="<?php echo $senha; ?>" required>
                </label>
                <input type="submit" class="btn btn-second" value="Editar" name="Editar" />
                <input type="submit" class="btn btn-danger" value="Deletar conta" name="deletarConta" />
            </form>

        </div>
    </main>
</body>

</html>
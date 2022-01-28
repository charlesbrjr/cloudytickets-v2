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
    <link rel="stylesheet" href="assets/css/reset.css">
    <link rel="stylesheet" href="assets/css/global.css">
</head>

<body>
    <main>
        <div class="header">
            <div class="content first-content">
                <div class="first-column">
                    <form class="form" action="enter.php" method="POST">
                        <h1>Entre com o seu Login</h1>
                        <label class="label-input-login">
                            <input name="email" id="email" type="email" placeholder="E-mail" required>
                        </label>
                        <label class="label-input-login">
                            <input name="senha" id="senha" type="password" placeholder="Senha" required>
                        </label>
                        <input type="submit" class="btn btn-second" value="Entrar" name="entrar" />
                    </form>
                </div>
                <form class="form" action="register.php" method="POST">
                    <h2 class="formRegister">Crie sua conta</h2>
                    <p class="description description-primary">Se conecte com o nosso grupo.</p>
                    <label class="label-input">
                        <input name="nome" id="nome" type="text" placeholder="Nome" required>
                    </label>
                    <label class="label-input">
                        <input name="email" id="email" type="email" placeholder="E-mail" required>
                    </label>
                    <label class="label-input">
                        <input autocomplete="new-password" name="senha" id="senha" type="password" placeholder="Senha" required>
                    </label>
                    <input type="submit" class="btn btn-second" value="Registrar" name="Registrar" />
                </form>
            </div>
        </div>
    </main>
</body>

</html>
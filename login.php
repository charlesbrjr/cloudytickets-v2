<!DOCTYPE html>
<html lang="pt_BR">

<head>
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
                            <input name="email" id="email" type="email" placeholder="E-mail">
                        </label>
                        <label class="label-input-login">
                            <input name="senha" id="senha" type="password" placeholder="Senha">
                        </label>
                        <input type="submit" class="btn btn-second" value="Entrar" name="entrar" onclick="Logar()" />
                    </form>
                </div>
                <form class="form" action="register.php" method="POST">
                    <h2 class="formRegister">Crie sua conta</h2>
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
        </div>
    </main>
    <?php include '../includes/footer.php'; ?>
</body>

</html>
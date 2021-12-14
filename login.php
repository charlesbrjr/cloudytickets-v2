<!-- 
    Dupla: Charles Junior e Shayane Teixeira
-->
<!DOCTYPE html>
<html lang="pt_BR">

<head>
    <?php
    include "./config.php";

    function Logar($email, $senha, $dbOpen)
    {
        $sql = "SELECT email FROM usuario WHERE email = '$email' and senha ='$senha';";
        $res = mysqli_query($dbOpen, $sql);
        $aux = mysqli_fetch_array($res);
        $id = $aux[0];

        session_start();

        $_SESSION['id'] = $id;

        $row = mysqli_fetch_row($res);
        if ($row == 1) {
            header("Location: home.php");
        } else {
            header("Location: login.php?erro=true?");
        }
    }
    ?>
    <title>Site de Música</title>
    <!-- STYLES -->
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body>
    <main>
        <div class="header">
            <div class="content first-content">
                <div class="first-column">
                    <form class="form" action="login.php" method="POST">
                        <h1>Entre com o seu Login</h1>
                        <label class="label-input-login">
                            <input name="emailLogin" id="emailLogin" type="email" placeholder="E-mail">
                        </label>

                        <label class="label-input-login">
                            <input name="senhaLogin" id="senhaLogin" type="password" placeholder="Senha">
                        </label>
                        <input type="submit" class="btn btn-second" value="Entrar" name="entrar" onclick="Logar()" />
                    </form>
                </div>
                <form class="form" action="validar.php" method="POST">
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
        </div>
    </main>
    <?php include 'footer.php'; ?>
</body>

</html>
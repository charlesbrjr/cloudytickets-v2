<?php
/* include "config.php";

#Verifica se tem um email para pesquisa
if (isset($_POST['email'])) {

    #Recebe o Email Postado
    $emailLogin = $_POST['email'];

    $sql = mysqli_query($dbOpen, "SELECT * FROM usuarios WHERE email = '{$emailLogin}'") or print mysqli_error($dbOpen);

    #Se o retorno for maior do que zero, diz que já existe um.
    if (mysqli_num_rows($sql) > 0) {
        echo json_encode(array('email' => 'Ja existe um usuario cadastrado com este email'));
    } else {
        echo json_encode(array('email' => 'Usuário valido.'));
    }
} */
?>

<form class="form" action="login.php" method="POST">
    <h1>Entre com o seu Login</h1>
    <label class="label-input-login">
        <input name="emailLogin" id="emailLogin" type="email" placeholder="E-mail">
    </label>

    <label class="label-input-login">
        <input name="senhaLogin" id="senhaLogin" type="password" placeholder="Senha">
    </label>
    <input type="submit" class="btn btn-second" value="Entrar" name="entrar" />
</form>
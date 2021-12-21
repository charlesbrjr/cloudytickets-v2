$btnLogin = filter_input(INPUT_POST, 'entrar', FILTER_SANITIZE_STRING);
$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);

if ($btnLogin) {
$erro = 0;

//Verifica se o campo email e valido
$email = $_POST["email"];
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
echo "E-mail inválido.";
} else {
echo "Seu e-mail é " . $email;
echo $erro = 1;
}

//Verifica se o campo nome não está em branco.
$nome = $_POST["nome"];
if (empty($nome) or strstr($nome, '') == false) {
echo ("Favor digitar seu nome");
echo $erro = 1;
}

$senha = $_POST["senha"];
if ($senha) {
$senha = $_POST['senha'];
if ($senha == "") {
$mensagem = "<span class='aviso'><b>Aviso</b>: Senha não foi alterada!</span>";
}
echo "<p id='mensagem'>" . $mensagem . "</p>";
}

if ($erro == 0) {
echo "Todos os dados foram preenchidos";
}



/* SENHA CRIPTOGRAFADA ======================== */
if ((!empty($email)) && (!empty($senha))) {
//Gerar a senha criptografa
echo md5($senha, PASSWORD_DEFAULT);
//Pesquisar o usuário no BD
$result_usuario = "SELECT id, nome, email, senha FROM usuario WHERE email='$email' LIMIT 1";
$resultado_usuario = mysqli_query($dbOpen, $result_usuario);
if ($resultado_usuario) {
$row_usuario = mysqli_fetch_assoc($resultado_usuario);
if (md5($senha, $row_usuario['senha'])) {
$_POST['id'] = $row_usuario['id'];
$_POST['nome'] = $row_usuario['nome'];
$_POST['email'] = $row_usuario['email'];
$_POST['senha'] = $row_usuario['senha'];
} else {
$_SESSION['msg'] = "Login e senha incorreto!";
header("Location: login.php");
}
}
} else {
$_SESSION['msg'] = "Login e senha incorreto!";
header("Location: login.php");
}
} else {
$_SESSION['msg'] = "Página não encontrada";
header("Location: login.php");
}
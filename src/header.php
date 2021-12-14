<head>
    <?php
    require_once "./config.php";
    session_start();

    $id = (int)$_SESSION['id'];
    $sql = "SELECT nome FROM usuario WHERE id = $id";
    $res = mysqli_query($dbOpen, $sql);
    $aux = mysqli_fetch_array($res);
    $nome = $aux[0];
    ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> <?php echo $nome ?> </title>
</head>
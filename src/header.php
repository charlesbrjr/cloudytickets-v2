<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- FRAMEWORK -->
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <!-- FRAMEWORK - BOOTSTRAP -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <?php
    include "../config.php";
    session_start();

    $id = $_SESSION['id'];
    $sql = "SELECT nome FROM usuario WHERE id_usuario = $id"; /* $id */
    $query = mysqli_query($dbOpen, $sql);
    $row = mysqli_fetch_array($query);
    $nome = $row[0];
    ?>
    <title> <?php echo $nome; ?> </title>
</head>
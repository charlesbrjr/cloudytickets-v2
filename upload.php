<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Uploads</title>
    <!-- STYLES -->
    <link rel="stylesheet" href="assets/css/reset.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body>
    <div class="container">
        <?php
        include "config.php";
        session_start();

        if (isset($_FILES['arquivo'])) {
            $msg = false;

            $arquivo = strtolower(substr($_FILES['arquivo']['name'], -4));
            $newarquivo = md5(time()) . $arquivo;
            $dir = "uploads/";

            move_uploaded_file($_FILES['arquivo']['tmp_name'], $dir . $newarquivo);
            $id  = $_SESSION['id'];
            $sql = "UPDATE usuario SET arquivo = '$newarquivo' WHERE id_usuario=$id";
            if (mysqli_query($dbOpen, $sql)) {
                echo "<script type='text/javascript'>alert('Arquivo enviado com sucesso!!');</script>";
                echo "<script>javascript:window.location='./src/ticket.php';</script>";
            } else {
                $msg = "Falha ao enviar arquivo.";
            }

            //erro
            if ($msg != false) {
                echo "<p>$msg</p>";
            }
        }
        ?>
        <!-- adicionar css -->
        <form name="form" action="upload.php" method="post" enctype="multipart/form-data">
            Arquivo:<br>
            <input type="file" required name="arquivo">
            <br><br>
            <input type="submit" class="btn btn-submit" name="file" value="Enviar">
        </form>
    </div>
</body>

</html>
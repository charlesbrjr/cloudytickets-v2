<!-- configuração do banco de dados -->
<?php
$name_db = 'ticketcloudy';
$host_db = 'localhost';
$user_db = 'root';
$password_db = 'usbw';

//conectando ao banco 
$dbOpen = mysqli_connect($host_db, $user_db, $password_db, $name_db);

//check connection
if (!$dbOpen) {
    die("Error de conexão." . mysqli_connect_error());
} else {
    $response["success"] = "conexão efetuada com sucesso";
}
?>
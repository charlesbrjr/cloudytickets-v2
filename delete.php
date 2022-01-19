<?php
include 'config.php';
session_start();

$id = $_SESSION['id'];
$query = mysqli_query($dbOpen, "SELECT * FROM ingresso WHERE FK_USUARIO_id_usuario = $id");
/* echo mysqli_num_rows($query); */

for ($i = 1; $i <= mysqli_num_rows($query); $i++) {
    $row = mysqli_fetch_array($query);
    mysqli_query($dbOpen, "DELETE FROM ingresso WHERE id_ingresso = $row[0]");
    /*   header(); */
}

mysqli_query($dbOpen, "DELETE FROM usuario WHERE id_usuario = $id");

header("Location: login.php");

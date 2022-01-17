<?php
// array for JSON response
$response = array();

mysqli_close($bdOpen);
echo json_encode($response);

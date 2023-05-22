<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bd_licence";
$conn = mysqli_connect($servername, $username, $password, $dbname);
// if (!$conn) {
//     die;
// }
mysqli_set_charset($conn,"utf8");
<?php
$servername = "localhost";
$database = "prla";
$username = "mysql";
$password = "";
$connection = mysqli_connect($servername, $username, $password, $database);
if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}
?>

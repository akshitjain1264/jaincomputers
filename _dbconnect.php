<?php
/*
Ways to connect to a MySQL Database
1. MySQLi extension
2. PDO
*/

// Connecting to the Database
$servername = "localhost";
$username = "root";
$password = "";
$database = "users";

//Creating connection
$conn = mysqli_connect($servername, $username, $password, $database);
//Check connection
if(!$conn) {
    die("Connection failed: " .mysqli_connect_error(). "<br>");
}
?>





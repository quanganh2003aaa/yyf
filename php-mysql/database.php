<?php
mysqli_report(MYSQLI_REPORT_INDEX);

$hostname = "localhost";
$port = 3306;
$databaseName = 'php_mysql';
$username = "root";
$password = "";

// echo "<pre>";

// Create connection
$connect = mysqli_connect($hostname, $username, $password,$databaseName, $port);
// var_dump($connect);die;
// Check connection
// if ($connect->connect_error) {
//   die("Connection failed: " . $connect->connect_error);
// }
// echo "Connected successfully";



?>
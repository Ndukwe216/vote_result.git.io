<?php
$dbName = "bincomphptest";
$host = "localhost";
$user = "root";
$pass = "";

$con = mysqli_connect($host,$user,$pass,$dbName);

if (!$con) {
    die(mysqli_error($con));
}


?>
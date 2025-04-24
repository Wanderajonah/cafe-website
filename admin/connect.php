<?php

$hostname="127.0.0.1"; //servername
$user = "root";// user name
$pass= ""; //password
$db = "test";
// function to connect to the server and database
$con = mysqli_connect($hostname,$user,$pass,$db) or die("connection failed");

?>
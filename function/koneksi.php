<?php

// production env
$server = "localhost";
$username = "root";
$password = "";
$dbname = "phpnativecrud";
$port= 3306;

// development env
// $server = "localhost";
// $username = "root";
// $password = "414d4d495341";
// $dbname = "phpnativecrud";
// $port= 3306;

$koneksi = mysqli_connect($server, $username, $password, $dbname, $port) or die("Koneksi ke database gagal");

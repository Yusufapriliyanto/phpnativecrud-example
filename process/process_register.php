<?php

require_once('../function/helper.php');
require_once('../function/koneksi.php');

// Menangkap request
$username = $_POST['username'];
$password = md5($_POST['password']);

$query = mysqli_query($koneksi, "INSERT INTO `admin` (`username`, `password`) VALUES ('$username', '$password')");
    header("location: ../index.php");
// else {
//     header("location: " . BASE_URL);
// }

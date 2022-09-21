<?php

require_once('../function/helper.php');
require_once('../function/koneksi.php');

// Menangkap request
$username = $_POST['username'];
$password = md5($_POST['password']);

$query = mysqli_query($koneksi, "SELECT * FROM `admin` WHERE `username`='$username' AND `password`='$password'");
    $row = mysqli_fetch_assoc($query);

    var_dump($row);
    // Membuat session
    session_start();
    $_SESSION['id'] = $row['username'];
    var_dump($_SESSION['id']);
    header("location: ../dashboard.php");
// else {
//     header("location: " . BASE_URL);
// }

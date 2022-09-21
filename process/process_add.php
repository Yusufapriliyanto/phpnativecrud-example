<?php

require_once('../function/helper.php');
require_once('../function/koneksi.php');

$nama = $_POST['nama'];
$email = $_POST['email'];
$nohp = $_POST['nohp'];
$alamat = $_POST['alamat'];

// Pengecekan kelengkapan data
if (empty($nama) || empty($nohp) || empty($email) || empty($alamat)) {
    header("location: " . BASE_URL . 'page/create.php');
} else {
    mysqli_query($koneksi, "INSERT INTO pegawai(nama, noid, nohp, email, alamat) VALUES ('$nama', '$noid', '$nohp', '$email', '$alamat')");
    header("location: " . BASE_URL . 'dashboard.php');
}

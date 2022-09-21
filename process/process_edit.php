<?php

require_once('../function/helper.php');
require_once('../function/koneksi.php');

$nama = $_POST['nama'];
$noid = $_POST['noid'];
$email = $_POST['email'];
$nohp = $_POST['nohp'];
$alamat = $_POST['alamat'];
$id = $_POST['id'];

if (empty($nama) || empty($email) || empty($nohp) || empty($alamat)) {
    header("location: " . BASE_URL . 'page/edit.php?id=' . $id);
} else {
    mysqli_query($koneksi, "UPDATE pegawai SET nama='$nama', email='$email', nohp = '$nohp',alamat = '$alamat' WHERE noid='$id'");
    header("location: " . BASE_URL . 'dashboard.php');
}

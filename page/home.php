<?php

require_once('function/koneksi.php');

$process = isset($_GET['process']) ? ($_GET['process']) : false;
?>


<?php if ($process == 'success') : ?>
    <div class="alert alert-success" role="alert">
        Data behasil dimasukan
    </div>
<?php endif; ?>

<!-- mengambil data dari database -->
<?php

$pegawai = mysqli_query($koneksi, "SELECT * FROM pegawai");

?>

<html>
    <head>
        <link rel="stylesheet" href="../assets/css/style01.css">
    </head>
    <body>
<div class="konten">
<img src="assets/person_fill.png" style="width: 50px; height:50px; margin-top: 30px"></img>
        <div class="row" style="margin-left: 60px; margin-top: -80px">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Nomor ID</th>
                            <th scope="col">Nomor HP</th>
                            <th scope="col">Email</th>
                            <th scope="col">Alamat</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1; ?>
                        <?php foreach ($pegawai as $p) : ?>
                            <tr>
                                <th scope="row"><?= $no++; ?></th>
                                <td><?= $p['nama'] ?></td>
                                <td><?= $p['noid'] ?></td>
                                <td><?= $p['nohp'] ?></td>
                                <td><?= $p['email'] ?></td>
                                <td><?= $p['alamat'] ?></td>
                                <td>
                                    <a class="btn btn-danger badge" href="<?= BASE_URL . 'page/delete.php?id=' . $p['noid'] ?>"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
  <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
  <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
</svg></a>
                                    <a class="btn btn-info badge" href="<?= BASE_URL . 'page/edit.php?id=' . $p['noid'] ?>"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
  <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>
</svg></a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
        </div>
    </div>
    </body>
</html>
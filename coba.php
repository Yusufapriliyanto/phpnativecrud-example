<!-- Pelajaran coding jarak jauh, latihan cara menjelaskan sesuatu -->

<html>
    <head>
        <link rel="stylesheet" href="../assets/css/style01.css">
    </head>
    <body>
<div class="content">
        <div class="card-login">
            <div class="card-main">
                <div class="card-header">Form Login</div>
                <div class="card-body">
                    <form class="form-login" method="POST" action="<?= BASE_URL . 'process/process_login.php' ?>">
                        <label class="form-label">Nama</label>
                        <input type="text" name="nama" class="form-input">
                        <label class="form-label">No HP</label>
                        <input type="text" name="nohp" class="form-input">
                        <label class="form-label">Email</label>
                        <input type="text" name="email" class="form-input">
                        <label class="form-label">Alamat</label>
                        <input type="text" name="alamat" class="form-input">
                        <button type="submit" class="btn btn-login">Login</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </body>
</html>
    <!-- <p style="text-align: center;">Belum punya akun?<span><a href="<?//= BASE_URL . "register.php" ?>" class=""> Daftar disini</a></span></p> -->
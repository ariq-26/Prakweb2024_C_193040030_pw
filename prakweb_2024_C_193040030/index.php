<?php
session_start();

if (!isset($_SESSION['login'])) {
  header("Location: login.php");
  exit;
}
require 'functions.php';

$buku = query("SELECT * FROM buku");

// Ketika tombol cari diklik
if (isset($_POST['cari'])) {
  $buku = cari($_POST['keyword']);
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="css/bootstrap.min.css">

  <!-- Jquery -->
  <script type="text/javascript" src="js/jquery.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>

  <title>Daftar Buku</title>
</head>

<body>
  <!-- Navbar -->
  <nav class="navbar  fixed-top navbar-expand-sm navbar-light bg-warning">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="#">
          <img src="img/unpas.png" width="80" height="80" class="d-inline-block align-top" alt="">

        </a>
        <div style="margin-left: 15px;">
          <a href="logout.php" title="Keluar/Logout" onclick="return confirm('Yakin meninggalkan halaman ini?')"><img src="img/logout.png" alt="" height="40px;" width="40px;"></a>
        </div>
      </div>
      <h3>Fakultas Teknik Universitas Pasundan</h3>
    </div>
  </nav>

  <!-- Daftar Mahasiswa -->
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="jumbotron bg-light text-center" style="margin-top: 50px;">

          <h3 style="margin: 150px;">DAFTAR BUKU</h3>


          <div class="btn" style="margin-top: -180px;">
            <a class="btn btn-primary" href="tambah.php" role="button" aria-setsize="fluid">Tambah Data Buku</a>


            <!-- Searching -->
            <form action="" method="POST" style="margin-top: 30px;">
              <input type="text" name="keyword" size="50" placeholder="Masukan yang akan dicari" autocomplete="off" autofocus class="keyword">
              <button type="submit" name="cari" class="tombol-cari">Search</button>
            </form>
          </div>

          <div class="live">
            <!-- Tabel -->
            <div class="table-responsive" style="margin-top: -40px;">
              <table class="table table-table-responsive-sm table-bordered table-striped table-hover" border=" 1" cellpadding="10" cellspacing="5" align="center">
                <thead>
                  <tr>
                    <th>Id</th>
                    <th>Judul</th>
                    <th>Gambar</th>
                    <th>Aksi</th>

                  </tr>
                  <?php if (empty($buku)) :  ?>
                    <tr>
                      <td colspan="4">
                        <p>data buku tidak ditemukan!</p>
                      </td>
                    </tr>
                  <?php endif; ?>
                </thead>

                <tbody>
                  <?php $i = 1; ?>
                  <?php foreach ($buku as $b) : ?>
                    <tr>
                      <td><?= $i++; ?></td>
                      <td><?= $b['Judul']; ?></td>
                      <td><img src="img/<?= $b['Gambar']; ?>" width="60"></td>
                      <td>
                        <a href="detail.php?id=<?= $b['Id']; ?>">lihat detail</a>
                      </td>
                    </tr>
                  <?php endforeach; ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Optional JavaScript -->
  <script src="js/bootstrap.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

  <script src="js/script.js"></script>
</body>

</html>
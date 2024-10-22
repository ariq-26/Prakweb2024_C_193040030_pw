<?php
session_start();

if (!isset($_SESSION['login'])) {
  header("Location: login.php");
  exit;
}
//Mengecek apakah ada id yang dikirimkan
//Jika tidak maka akan dikembalikan ke halaman index.php
if (!isset($_GET['id'])) {
  header("location: index.php");
  exit;
}
require 'functions.php';

//Mengambil id dari url
$id = $_GET['id'];

//Melakukan query dengan parameter id yang diambil dari url
$buku = query("SELECT * FROM buku WHERE Id = $id");
$buku = $buku[0]; 

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="css/bootstrap.min.css">

  <title>Detail Buku</title>
</head>

<body>
  <!-- Navbar -->

  <nav class="navbar  fixed-top navbar-expand-sm navbar-light bg-warning">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="#">
          <img src="img/unpas.png" width="80" height="80" class="d-inline-block align-top" alt="">
          <h4 style="margin: 5px;"> Ruang Admin </h4>
        </a>
      </div>
      <h3> Fakultas Teknik Universitas Pasundan</h3>
    </div>
  </nav>

  <div class="content-responsive-sm" style="margin-top: 150px;">
    <div class="jumbotron bg-light text-center ">
      <h3>Detail Buku</h3>
      <div class="container">
        <div class="Gambar">
          <img src="img/<?= $buku['Gambar']; ?>" width="320px" alt="">
        </div>

        <div class="keterangan">
          <p><?= $buku['Judul']; ?></p>
          <p><?= $buku['Penulis']; ?></p>
          <p><?= $buku['Penerbit']; ?></p>
          <p><?= $buku['Tahun']; ?></p>

          <button><a href="ubah.php?id=<?= $buku['Id']; ?>">Ubah</a></button>
          <button><a href="hapus.php?Id=<?= $buku['Id']; ?>" onclick="return confirm('Hapus Data??')">Hapus</a></button>
        </div>
        <br>
        <button class="tombol-kembali"><a href="index.php">Kembali</a></button>
      </div>
    </div>
  </div>



  <!-- Optional JavaScript -->
  <script src="js/bootstrap.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>
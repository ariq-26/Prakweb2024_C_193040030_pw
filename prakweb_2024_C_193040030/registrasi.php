<?php
require 'functions.php';
session_start();
if (isset($_SESSION['login'])) {
  header("Location: index.php");
  exit;
}

if (isset($_POST['registrasi'])) {
  if (registrasi($_POST) > 0) {
    echo "<script>
    alert('username/password berhasil ditambahkan silahkan login ');
    document.location.href = 'login.php';
    </script>";
  } else {
    echo 'user gagal ditambahkan!';
  }
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
  <title>Registrasi</title>

  <style>
    .regist {
      width: 500px;
      padding: 40px;
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      text-align: center;

    }

    .regist h1 {
      color: black;
      text-transform: uppercase;
      font-weight: 500;
      text-align: center;
    }

    .regist p a {
      color: blue;
      text-decoration: none;
    }

    .regist input[type="text"],
    .regist input[type="password"] {

      margin: 20px -50px;
      text-align: center;
      padding: 14px 10px;
      width: 500px;

    }
  </style>
</head>

<body>
  <!-- Navbar -->
  <nav class="navbar  fixed-top navbar-expand-sm navbar-light bg-warning">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="#">
          <img src="img/unpas.png" width="80" height="80" class="d-inline-block align-top" alt="">
        </a>
      </div>
      <h3>Fakultas Teknik Universitas Pasundan</h3>
    </div>
  </nav>

  <!-- Form Registrasi -->
  <form class="regist" action="" method="POST">
    <h1>Form Registrasi</h1>
    <input type="text" name="username" placeholder="Masukan Username yang di inginkan" autofocus autocomplete="off" required>
    <input type="password" name="password1" placeholder="Masukan Password yang di inginkan" required>
    <input type="password" name="password2" placeholder="Masukan Konfirmasi Password" required>
    <p>Sudah Punya Akun? Silahkan Login <a href="login.php">Disini</a></p>
    <input type="submit" name="registrasi" value="Registrasi" class="btn-danger">

  </form>

  <!-- Optional JavaScript -->
  <script src="js/bootstrap.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>
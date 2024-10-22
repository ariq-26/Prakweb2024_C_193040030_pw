<?php
session_start();
if (isset($_SESSION['login'])) {
  header("Location: index.php");
  exit;
}

require 'functions.php';

// Ketika tombol login ditekan
if (isset($_POST['login'])) {
  $login = login($_POST);
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


  <title>Login</title>

  <style>
    .box {
      width: 500px;
      padding: 40px;
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      text-align: center;
      background-color: #dea004;

    }

    .box h1 {
      color: black;
      text-transform: uppercase;
      font-weight: 500;
    }

    .box p {
      font-size: 20px;
      font-weight: 500;
    }

    .box p a {
      color: blue;
      text-decoration: none;
    }

    .box input[placeholder="Username"],
    .box input[placeholder="Password"] {
      font-weight: 600;
    }

    .box input[type="text"],
    .box input[type="password"] {
      border: 0;
      background: none;
      display: block;
      margin: 20px auto;
      text-align: center;
      border: 2px solid red;
      padding: 14px 10px;
      width: 200px;
      outline: none;
      color: black;
      border-radius: 24px;
      transform: 0, 25s;

    }

    .box input[type="text"]:focus,
    .box input[type="password"]:focus {
      width: 280px;
      border-color: black;
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

  <!-- Form -->

  <form class="box" action="" method="POST">
    <h1>Login</h1>
    <?php if (isset($login['error'])) : ?>
      <p style="color: red; font-style: italic;"><?= $login['pesan']; ?></p>

    <?php endif; ?>
    <input type="text" name="username" placeholder="Username" autofocus autocomplete="off" required>
    <input type="password" name="password" placeholder="Password" required>
    <p>Belum punya akun? Registrasi <a href="registrasi.php">Disini</a></p>
    <input type="submit" name="login" value="Login" class="btn-danger">


  </form>
  </div>
  <!-- Optional JavaScript -->
  <script src="js/bootstrap.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>
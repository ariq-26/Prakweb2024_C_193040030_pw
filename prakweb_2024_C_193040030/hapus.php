<?php
session_start();

if (!isset($_SESSION['login'])) {
  header("Location: login.php");
  exit;
}
require 'functions.php';

//Mengambil id dr url
$id = $_GET['Id'];

if (hapus($id) > 0) {
  echo "<script>
  alert('data berhasil dihapus');
  document.location.href = 'index.php';
  </script>";
} else {
  echo "<script>
  alert('Data gagal dihapus!');
  document.location.href = 'index.php';
  </script>";
}

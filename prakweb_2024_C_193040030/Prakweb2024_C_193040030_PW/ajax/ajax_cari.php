<?php

require '../functions.php';

$mahasiswa = cari($_GET['keyword']);
?>
<div class="table-responsive" style="margin-top: -40px;">
  <table class="table table-table-responsive-sm table-bordered table-striped table-hover" border=" 1" cellpadding="10" cellspacing="5" align="center">
    <thead>
      <tr>
        <th>Id</th>
        <th>Nama</th>
        <th>Gambar</th>
        <th>Aksi</th>

      </tr>
      <?php if (empty($mahasiswa)) :  ?>
        <tr>
          <td colspan="4">
            <p>data mahasiswa tidak ditemukan!</p>
          </td>
        </tr>
      <?php endif; ?>
    </thead>

    <tbody>
      <?php $i = 1; ?>
      <?php foreach ($mahasiswa as $m) : ?>
        <tr>
          <td><?= $i++; ?></td>
          <td><?= $m['Nama']; ?></td>
          <td><img src="img/<?= $m['Gambar']; ?>" width="60"></td>
          <td>
            <a href="detail.php?id=<?= $m['Id']; ?>">lihat detail</a>
          </td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
</div>
<?php
require_once('function/koneksi.php');
$process = isset($_GET['process']) ? ($_GET['process']) : false;
?>

<?php if($process == 'success') : ?>
    <div class="success">
        Jadwal berhasil dimasukkan
    </div>
<?php endif?>

<!-- mengambil data dari database -->

<?php
$jadwalsidang = mysqli_query($koneksi, "SELECT * FROM jadwalsidang");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jadwal Sidang</title>
    <link rel="stylesheet" href="<?= base_url('aset/css/datajadwalsidang.css')  ?>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    <link rel="style<link rel="stylesheet" href="<?= base_url('aset/css/font.css') ?>">
</head>
<body class="data-jadwalsidang">
  
    <div class="add-jadwalsidang">
      <a href="<?= base_url('dashboard.php?page=registerjadwalsidang')  ?>">Tambah Jadwal</a>
    </div>
    
    <table class="tabel-jadwalsidang">
      <tr>
        <th>No</th>
        <th>Sesi</th>
        <th>Nama Mahasiswa</th>
        <th>Nama Dosen 1</th>
        <th>Nama Dosen 2</th>
        <th>Tanggal</th>
        <th>Aksi</th>
      </tr>
      <?php $no = 1; ?>
      <?php foreach($jadwalsidang as $m): ?>
      <tr>
        <td><?= $no++;?></td>
        <td><?= $m['sesi']?></td>
        <td><?= $m['namamhs']?></td>
        <td><?= $m['namadosen1']?></td>
        <td><?= $m['namadosen2']?></td>
        <td><?= $m['tgl']?></td>
        <td>
          <a class="delete" href="<?= base_url('process/jadwalsidang/process_delete.php?act=delete&id=' . $m['id'])  ?>">Delete</a>
          <a class="edit" href="<?= base_url('dashboard.php?page=editjadwalsidang&id=' . $m['id'])  ?>">Edit</a>
        </td>
      </tr>
      <?php endforeach; ?>
    </table> 
</body>
</html>

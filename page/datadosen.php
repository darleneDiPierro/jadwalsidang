<?php
require_once('function/koneksi.php');
$process = isset($_GET['process']) ? ($_GET['process']) : false;
?>

<?php if($process == 'success') : ?>
    <div class="success">
        Data Dosen berhasil dimasukkan
    </div>
<?php endif?>

<!-- mengambil data dari database -->

<?php
$dosen = mysqli_query($koneksi, "SELECT * FROM dosen");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Dosen Penguji</title>
    <link rel="stylesheet" href="<?= base_url('aset/css/datadosen.css') ?>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    <link rel="style<link rel="stylesheet" href="<?= base_url('aset/css/font.css') ?>">
</head>
<body class="data-dosen">
  
    <div class="add-dosen">
      <a href="<?= base_url('dashboard.php?page=registerdosen') ?>">Tambah Dosen Penguji</a>
    </div>
    
    <table class="tabel-dosen">
      <tr>
        <th>No</th>
        <th>Nama Dosen</th>
        <th>NIDN</th>
        <th>Jenis Kelamin</th>
        <th>Alamat</th>
        <th>No. Telp</th>
        <th>Email</th>
        <th>Aksi</th>
      </tr>
      <?php $no = 1; ?>
      <?php foreach($dosen as $m): ?>
      <tr>
        <td><?= $no++;?></td>
        <td><?= $m['nama']?></td>
        <td><?= $m['nidn']?></td>
        <td><?= $m['jeniskelamin']?></td>
        <td><?= $m['alamat']?></td>
        <td><?= $m['notelp']?></td>
        <td><?= $m['email']?></td>
        <td>
          <a class="delete" href="<?= base_url('process/dosen/process_delete.php?act=delete&id=' . $m['id'])  ?>">Delete</a>
          <a class="edit" href="<?= base_url('dashboard.php?page=editdosen&id=' . $m['id']) ?>">Edit</a>
        </td>
      </tr>
      <?php endforeach; ?>
    </table> 
</body>
</html>

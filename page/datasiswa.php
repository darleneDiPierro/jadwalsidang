<?php
require_once('function/koneksi.php');
$process = isset($_GET['process']) ? ($_GET['process']) : false;
?>

<?php if($process == 'success') : ?>
    <div class="success">
        Data Mahasiswa berhasil dimasukkan
    </div>
<?php endif?>

<!-- mengambil data dari database -->

<?php
$mahasiswa = mysqli_query($koneksi, "SELECT * FROM mahasiswa");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Siswa</title>
    <link rel="stylesheet" href="<?= base_url('aset/css/datasiswa.css')  ?>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    <link rel="style<link rel="stylesheet" href="<?= base_url('aset/css/font.css') ?>">
</head>
<body class="data-siswa">
  
    <div class="add-siswa">
      <a href="<?= base_url('dashboard.php?page=registersiswa')  ?>">Tambah Mahasiswa</a>
    </div>
    
    <table class="tabel-mahasiswa">
      <tr>
        <th>No</th>
        <th>Nama Mahasiswa</th>
        <th>NIM</th>
        <th>Jenis Kelamin</th>
        <th>Alamat</th>
        <th>No. Telp</th>
        <th>Email</th>
        <th>Aksi</th>
      </tr>
      <?php $no = 1; ?>
      <?php foreach($mahasiswa as $m): ?>
      <tr>
        <td><?= $no++;?></td>
        <td><?= $m['nama']?></td>
        <td><?= $m['nim']?></td>
        <td><?= $m['jeniskelamin']?></td>
        <td><?= $m['alamat']?></td>
        <td><?= $m['notelp']?></td>
        <td><?= $m['email']?></td>
        <td>
          <a class="delete" href="<?= base_url('process/mahasiswa/process_delete.php?act=delete&id=' . $m['id'])  ?>">Delete</a>
          <a class="edit" href="<?= base_url('dashboard.php?page=editsiswa&id=' . $m['id'])  ?>">Edit</a>
        </td>
      </tr>
      <?php endforeach; ?>
    </table> 
</body>
</html>

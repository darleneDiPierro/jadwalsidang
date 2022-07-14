<?php
require_once('function/helper.php');
require_once('function/koneksi.php');

if($_SESSION["id"] == null) {
    header("location: " . base_url(''));
    exit();
}

$error = isset($_GET['emptyform']) ? ($_GET['emptyform']) : false;
$id = isset($_GET['id']) ? ($_GET['id']) : false;

$dosen = mysqli_fetch_array(mysqli_query($koneksi, "SELECT * FROM dosen WHERE id=$id"));

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?= base_url('aset/css/editdosen.css')  ?>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url('aset/css/font.css') ?>">
</head>
<body>
    <div>
        <div>
            <?php if ($error == "true") : ?>
                <div class="error">
                    Pastikan semua formulir terisi
                </div>
            <?php endif; ?>
    
            <form method="POST" action="<?= base_url('process/dosen/process_edit.php')  ?>" class="register-form">
            <input name="id" value="<?= $dosen['id'] ?>" type="hidden">
            <div>
                <label>Nama Dosen</label>
                <input type="text" name="nama" id="nama" value="<?= $dosen['nama'] ?>">
            </div>
            <div>
                <label>NIDN</label>
                <input type="number" name="nidn" id="nidn" value="<?= $dosen['nidn'] ?>">
            </div>
            <div>
                <label>Jenis Kelamin</label>
                <input type="text" name="jeniskelamin" id="jeniskelamin" value="<?= $dosen['jeniskelamin'] ?>">
            </div>
            <div>
                <label>Alamat</label>
                <input type="text" name="alamat" id="alamat" value="<?= $dosen['alamat'] ?>">
            </div>
            <div>
                <label>No. Telp</label>
                <input type="text" name="notelp" id="notelp" value="<?= $dosen['notelp'] ?>">
            </div>
            <div>
                <label>Email</label>
                <input type="email" name="email" id="email" value="<?= $dosen['email'] ?>">
            </div>
    
            <button type="submit">Submit</button>
        </form>
    
        </div>
    </div>
</body>
</html>

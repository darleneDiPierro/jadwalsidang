<?php
require_once('function/helper.php');
require_once('function/koneksi.php');

if($_SESSION["id"] == null) {
    header("location: " . base_url(''));
    exit();
}

$error = isset($_GET['emptyform']) ? ($_GET['emptyform']) : false;
$id = isset($_GET['id']) ? ($_GET['id']) : false;

$jadwalsidang = mysqli_fetch_array(mysqli_query($koneksi, "SELECT * FROM jadwalsidang WHERE id=$id"));

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?= base_url('aset/css/editjadwalsidang.css')  ?>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    <link rel="style<link rel="stylesheet" href="<?= base_url('aset/css/font.css') ?>">
</head>
<body>
    <div>
        <div>
            <?php if ($error == "true") : ?>
                <div class="error">
                    Pastikan semua formulir terisi
                </div>
            <?php endif; ?>
    
            <form method="POST" action="<?= base_url('process/jadwalsidang/process_edit.php')  ?>" class="register-form">
            <input name="id" value="<?= $jadwalsidang['id'] ?>" type="hidden">
            <div>
                <label>Sesi</label>
                <input type="text" name="sesi" id="sesi" value="<?= $jadwalsidang['sesi'] ?>">
            </div>
            <div>
                <label>Nama Mahasiswa</label>
                <input type="text" name="namamhs" id="namamhs" value="<?= $jadwalsidang['namamhs'] ?>">
            </div>
            <div>
                <label>Nama Dosen 1</label>
                <input type="text" name="namadosen1" id="namadosen1" value="<?= $jadwalsidang['namadosen1'] ?>">
            </div>
            <div>
                <label>Nama Dosen 2</label>
                <input type="text" name="namadosen2" id="namadosen2" value="<?= $jadwalsidang['namadosen2'] ?>">
            </div>
            <div>
                <label>Tanggal</label>
                <input type="date" name="tgl" id="tgl" placeholder="yyyy-mm-dd" value=""min="1950-01-01" max="2030-12-31">
            </div>   
            <button type="submit">Submit</button>
        </form>
    
        </div>
    </div>
</body>
</html>

<?php

require_once('../../function/helper.php');
require_once('../../function/koneksi.php');

$namamhs = $_POST['namamhs'];
$namadosen1 = $_POST['namadosen1'];
$namadosen2 = $_POST['namadosen2'];
$jam = $_POST['jam'];


// pengecekan kelengkapan data

if(empty($sesi) ||empty($namamhs) || empty($namadosen1) || empty($namadosen2) || empty($jam)) {
    header("location: " . BASE_URL . 'dashboard.php?page=registerjadwalsidang&process=failed');
} else {
    mysqli_query($koneksi, "INSERT INTO jadwalsidang(sesi, namamhs, namdosen1, namadosen2, jam) VALUES ('$sesi', '$namamhs', '$namadosen1', '$namadosen2', '$jam')");
    header("location: " . BASE_URL . 'dashboard.php?page=datajadwalsidang&process=success');
}

?>
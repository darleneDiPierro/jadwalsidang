<?php
require_once('../../function/helper.php');
require_once('../../function/koneksi.php');

$sesi = $_POST['sesi'];
$namamhs = $_POST['namamhs'];
$namadosen1 = $_POST['namadosen1'];
$namadosen2 = $_POST['namadosen2'];
$jam = $_POST['jam'];

if(empty($sesi) || empty($namamhs) || empty($namadosen1) || empty($namadosen2) || empty($jam)) {

    header("location: " . BASE_URL . 'dashboard.php?page=editdosen&id=' . $id . '&emptyform=true');

} else {

    mysqli_query($koneksi, "UPDATE jadwalsidang SET sesi='$sesi', namamhs='$namamhs', namadosen1='$namadosen1', namadosen2='$namadosen2', jam='$jam' WHERE id='$id'");

    header("location: " . BASE_URL . 'dashboard.php?page=datadosen&status=success');
    
}

?>
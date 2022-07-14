<?php
require_once('../../function/helper.php');
require_once('../../function/koneksi.php');

$sesi = $_POST['sesi'];
$namamhs = $_POST['namamhs'];
$namadosen1 = $_POST['namadosen1'];
$namadosen2 = $_POST['namadosen2'];
$tgl = $_POST['tgl'];

if(empty($sesi) || empty($namamhs) || empty($namadosen1) || empty($namadosen2) || empty($tgl)){
    header("location: ".BASE_URL.'dashboard.php?page=registerjadwalsidang&process=failed');
} else {
    mysqli_query($koneksi, "INSERT INTO jadwalsidang(sesi,namamhs,namadosen1,namadosen2,tgl) VALUES ('$sesi','$namamhs','$namadosen1','$namadosen2','$tgl')");

    header("location: ".BASE_URL.'dashboard.php?page=datajadwalsidang&process=success');
}

?>

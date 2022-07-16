<?php
require_once('../../function/helper.php');
require_once('../../function/koneksi.php');

$sesi = $_POST['sesi'];
$namamhs = $_POST['namamhs'];
$namadosen1 = $_POST['namadosen1'];
$namadosen2 = $_POST['namadosen2'];
$tgl = $_POST['tgl'];
$id = $_POST['id'];

if(empty($sesi) || empty($namamhs) || empty($namadosen1) || empty($namadosen2) || empty($tgl)) {

    header("location: " . BASE_URL . 'dashboard.php?page=editjadwalsidang&id=' . $id . '&emptyform=true');

} else {

    mysqli_query($koneksi, "UPDATE jadwalsidang SET sesi='$sesi', namamhs='$namamhs', namadosen1='$namadosen1', namadosen2='$namadosen2', tgl='$tgl' WHERE id='$id'");
    
    header("location: " . BASE_URL . 'dashboard.php?page=datajadwalsidang&status=success');
    
}

?>
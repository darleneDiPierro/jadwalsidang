<?php
require_once('../../function/helper.php');
require_once('../../function/koneksi.php');


$nim = $_POST['nim'];
$nama = $_POST['nama'];

$tmpFilePersyaratan = $_FILES['persyaratan']['tmp_name'];
$namePersyaratan = $_FILES['persyaratan']['name'];

$tmpFilePersetujuan = $_FILES['persetujuan']['tmp_name'];
$namePersetujuan = $_FILES['persetujuan']['name'];

$tmpKbFile = $_FILES['kbfile']['tmp_name'];
$nameKbFile = $_FILES['kbfile']['name'];

$tmpKbImg = $_FILES['kbimg']['tmp_name'];
$nameKbImg = $_FILES['kbimg']['name'];

$dir = "../../aset/data/";

move_uploaded_file($tmpFilePersyaratan,$dir.$namePersyaratan);

if(empty($sesi) || empty($namamhs) || empty($namadosen1) || empty($namadosen2) || empty($tgl)){
    header("location: ".BASE_URL.'dashboard.php?page=daftarSidang&process=failed');
} else {
    mysqli_query($koneksi, "INSERT INTO jadwalsidang(sesi,namamhs,namadosen1,namadosen2,tgl) VALUES ('$sesi','$namamhs','$namadosen1','$namadosen2','$tgl')");

    header("location: ".BASE_URL.'dashboard.php?page=datajadwalsidang&process=success');
}

?>
<?php

require_once('../../function/helper.php');
require_once('../../function/koneksi.php');

$nim = $_POST['nim'];
$nama = $_POST['nama'];
$persyaratan = $_FILES['persyaratan']['name'];
$persetujuan = $_FILES['persetujuan']['name'];
$kbfile = $_FILES['kbfile']['name'];

// fetch image

$kbimg_tmp = $_FILES['kbimg']['tmp_name'];
$kbimg_name = $_FILES['kbimg']['name'];

// move image ke folder

move_uploaded_file($kbimg_tmp,'uploads/'.$kbimg_name);

mysqli_query($koneksi, "INSERT INTO daftar_pengajuan(nama, nim, persyaratan, persetujuan, kbfile, kbimg) VALUES ('$nama', '$nim', '$persyaratan', '$persetujuan', '$kbfile', '$kbimg')");

header("location: " . BASE_URL . 'dashboard.php?page=daftarsidang&process=success');


?>
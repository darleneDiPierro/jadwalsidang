<?php
require_once('../../function/helper.php');
require_once('../../function/koneksi.php');


$nim = $_POST['nim'];
$nama = $_POST['nama'];

$tmpFilePersyaratan = $_FILES['persyaratan']['tmp_name'];
$persyaratan = $_FILES['persyaratan']['name'];

$tmpFilePersetujuan = $_FILES['persetujuan']['tmp_name'];
$persetujuan = $_FILES['persetujuan']['name'];

$tmpKbFile = $_FILES['kbfile']['tmp_name'];
$kbfile = $_FILES['kbfile']['name'];

$tmpKbImg = $_FILES['kbimg']['tmp_name'];
$kbimg = $_FILES['kbimg']['name'];

$dir = "../../data/";

move_uploaded_file($tmpFilePersyaratan,$dir.$persyaratan);

move_uploaded_file($tmpFilePersetujuan,$dir.$persetujuan);

move_uploaded_file($tmpKbFile,$dir.$kbfile);

move_uploaded_file($tmpKbImg,$dir.$kbimg);

// add to database 

if(empty($nama) || empty($nim) || empty($persyaratan) || empty($persetujuan) || empty($kbfile) || empty($kbimg)) {
    header("location: " . BASE_URL . 'dashboard.php?page=daftarsidang&process=failed');
} else {
    mysqli_query($koneksi, "INSERT INTO daftar_pengajuan(nama, nim, persyaratan, persetujuan, kbfile, kbimg) VALUES ('$nama', '$nim', '$persyaratan', '$persetujuan', '$kbfile', '$kbimg')");
    header("location: " . BASE_URL . 'dashboard.php?page=daftarsidang&process=success');
}

?>
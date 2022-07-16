<?php
require_once('../../function/helper.php');
require_once('../../function/koneksi.php');

// include("../../aset/data/lol");

$nim = $_POST['nim'];
$nama = $_POST['nama'];
$persyaratan = $_FILES['persyaratan']['name'];
// $persetujuan = $_POST['persetujuan'];
// $kbfile = $_POST['kbfile'];
// $kbimg = $_POST['kbimg'];

$tmpFile = $_FILES['persyaratan']['tmp_name'];

move_uploaded_file($tmpFile,"../../aset/data/".$persyaratan);


?>
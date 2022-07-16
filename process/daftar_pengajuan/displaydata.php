<?php
require_once('../../function/helper.php');
require_once('../../function/koneksi.php');

$id = $_GET['id'];
$aksi = $_GET['act'];
$data = mysqli_fetch_array(mysqli_query($koneksi, "SELECT * FROM daftar_pengajuan WHERE id=$id"));

$persyaratan = "../../data/".$data['persyaratan'];

if($aksi == 'displaypersyaratan'){
    $buka = fopen("$persyaratan", "r") or die("unable to open the file!");
    echo fread($buka,filesize("$persyaratan"));   
    fclose($buka);
}

?>
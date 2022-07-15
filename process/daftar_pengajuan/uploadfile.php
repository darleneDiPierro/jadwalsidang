<?php
$nama = $_POST['nama']; 
$nim = $_POST['nim'];
$persyaratan = $_FILES['persyaratan']['name'];
$persetujuan = $_FILES['persetujuan']['name'];
$kartu_bimbingan_file = $_FILES['kbfile']['name'];
$kartu_bimbingan_img = $_FILES['kbimg']['name'];

echo $nama;

?>
<?php
require_once('function/helper.php');
require_once('function/koneksi.php');

$id = $_GET['id'];
$data = mysqli_fetch_array(mysqli_query($koneksi, "SELECT * FROM daftar_pengajuan WHERE id=$id"));

?>

<div>
    <p><span>Nama: </span> <span><?= $data['nama'] ?></span></p>
    <p><span>NIM: </span> <span><?= $data['nim']?></span></p>
</div>

<div>
    <h1>Pengajuan Sidang</h1>
    <div>
        <p>File persyaratan sidang skripsi: </p>
        <a href="<?= base_url('process/daftar_pengajuan/displaydata.php?act=displaypersyaratan&id=' . $data['id'])?>"><?= $data['persyaratan'] ?></a>
    </div>
    <div>
        <p>File persetujuan sidang skripsi: </p>
        <a href="<?= base_url('process/daftar_pengajuan/displaydata.php?act=displaypersetujuan&id=' . $data['id'])?>"><?= $data['persetujuan'] ?></a>
    </div>
    <div>
        <p>File pengajuan kartu bimbingan: </p>
        <a href="<?= base_url('process/daftar_pengajuan/displaydata.php?act=displaykbfile&id=' . $data['id'])?>"><?= $data['kbfile'] ?></a>
    </div>
    <div>
        <p>Gambar pengajuan kartu bimbingan: </p>
        <a href="<?= base_url('process/daftar_pengajuan/displaydata.php?act=displaykbimg&id=' . $data['id'])?>"><?= $data['kbimg'] ?></a>
    </div>
</div>


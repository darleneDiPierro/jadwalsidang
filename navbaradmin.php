<?php
   
    include_once('config/app.php');

?>


<div class="option1">
    <button class="menu-option">
        <img src="<?= base_url('aset/images/mp-dosen/Calendar.png') ?>" alt="">
        <a href="<?= base_url('dashboard.php?page=datajadwalsidang') ?>">INFO JADWAL</a>
    </button>
    
    <button class="menu-option">
        <img src="<?= base_url('aset/images/mp-dosen/info.png')  ?>" alt="">
        <a href="<?= base_url('dashboard.php?page=myprofile')  ?>">INFO USER</a>
    </button>

    <button class="menu-option" id="list-ms">
        <img src="<?= base_url('aset/images/mp-dosen/p-sidang.png')  ?>" alt="">
        <a href="<?= base_url('dashboard.php?page=datasiswa')  ?>">LIST MAHASISWA</a>
    </button>

    <button class="menu-option" id="list-ds">
        <img src="<?= base_url('aset/images/mp-dosen/p-sidang.png')  ?>" alt="">
        <a href="<?= base_url('dashboard.php?page=datadosen')  ?>">LIST DOSEN</a>
    </button>
    
    <button class="menu-option" id="registrasi-user">
        <img src="<?= base_url('aset/images/mp-dosen/p-sidang.png')  ?>" alt="">
        <a href="<?= base_url('dashboard.php?page=register')  ?>">REGISTRASI AKUN</a>
    </button>
</div>
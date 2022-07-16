<?php
   
    include_once('config/app.php');

?>


<div class="option1">
    <button class="menu-option">
        <img src="<?= base_url('aset/images/mp-dosen/Calendar.png') ?>" alt="">
        <a href="<?= base_url('dashboard.php?page=datajadwalsidang') ?>">INFO JADWAL</a>
    </button>
    
    <button class="menu-option" id="daftar-sidang">
        <img src="<?= base_url('aset/images/mp-dosen/p-sidang.png')  ?>" alt="">
        <a href="<?= base_url('dashboard.php?page=daftarsidang')  ?>">DAFTAR SIDANG</a>
    </button>

    <button class="menu-option" id="feedback">
        <img src="<?= base_url('aset/images/mp-dosen/feedb.png')  ?>" alt="">
        <a href="<?= base_url('dashboard.php?page=feedback')  ?>">FEEDBACK</a>
    </button>

    <button class="menu-option">
        <img src="<?= base_url('aset/images/mp-dosen/info.png')  ?>" alt="">
        <a href="<?= base_url('dashboard.php?page=myprofile')  ?>">INFO USER</a>
    </button>
</div>
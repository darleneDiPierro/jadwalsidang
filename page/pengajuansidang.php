<?php
require_once('function/koneksi.php');
?>

<?php
$data = mysqli_query($koneksi, "SELECT * FROM daftar_pengajuan");
?>

<?php foreach($data as $d): ?>
    <div class="pengajuanlist">
    <p class="nameandnim"> <span id="namamhs"><?= $d['nama'] ?></span> - <span><?= $d['nim']?></span></p>
    <a href="<?= base_url('dashboard.php?page=datapengajuansidang&id=' . $d['id'])  ?>" class="viewbutton">view</a>
    </div>
<?php endforeach; ?>
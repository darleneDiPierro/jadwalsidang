<?php

$process = isset($_GET['process']) ? ($_GET['process']) : false; 

?>

<?php if($process == 'failed') : ?>
    <div class="error">
        Semua formulir harus diisi
    </div>
<?php endif?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="<?= BASE_URL . 'aset/css/registerjadwalsidang.css' ?>">
</head>
<body>
    <form method="POST" action="<?= BASE_URL . 'process/jadwalsidang/process_add.php' ?>" class="register-form">
        <div>
            <label>Sesi</label>
            <input type="text" name="sesi" id="sesi">
        </div>
        <div>
            <label>Nama Mahasiswa</label>
            <input type="text" name="namamhs" id="namamhs">
        </div>
        <div>
            <label>Nama Dosen 1</label>
            <input type="text" name="namadosen1" id="namadosen1">
        </div>
        <div>
            <label>Nama Dosen 2</label>
            <input type="text" name="namadosen2" id="namadosen2">
        </div>
        <div>
            <label>Tanggal</label>
            <input type="date" name="tgl" id="tgl" placeholder="yyyy-mm-dd" value=""min="1950-01-01" max="2030-12-31">
        </div>
        <button type="submit">Submit</button>
    </form>

</body>
</html>
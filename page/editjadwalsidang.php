<?php
require_once('function/helper.php');
require_once('function/koneksi.php');

$error = isset($_GET['emptyform']) ? ($_GET['emptyform']) : false;
$id = isset($_GET['id']) ? ($_GET['id']) : false;

$jadwalsidang = mysqli_fetch_array(mysqli_query($koneksi, "SELECT * FROM jadwalsidang WHERE id=$id"));

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    *{
        margin: 0;
        padding: 0;
    }
    .error {
        position: absolute;
        color: red; 
        background: #ffc2c4; 
        padding: 3px; 
        margin: 10px auto; 
        width: 14.1%;
    }
    .register-form {
        display: flex;
        flex-direction: column;
        margin-right : 5%;
    }
    .nama{
        position:relative;
        margin-top: 0.5%;
        margin-bottom:2%;
        width:793px;
        height:60px;
        border-radius: 15px;
        background-color: #D9D9D9;
        opacity: 50%;
        font-family: 'Poppins', sans-serif;
        font-size: 24px;   
    }
    .tambahdosen{
        color:white;
        text-shadow: -1px -1px 0 #000, 1px -1px 0 #000;
        font-size: 50px;
        padding-top: 3%;
        padding-bottom: 5%;
    }
    .submit {
        display:flex;
        width:1186px;
        height:38px;
        border-radius: 15px;
        margin: 0 auto;
        margin-top: 2.5%;
        font-family: 'Poppins', sans-serif;
        font-size: 24px;
        align-content: center;
        justify-content:center; 
    }
    .tanggal {
        display:flex;
        color: white;
        text-shadow: -1px -1px 0 #000, 1px -1px 0 #000;
        font-size: 25px;
    }
    </style>
</head>
<body>
    <div>
        <div>
            <?php if ($error == "true") : ?>
                <div class="error">
                    Pastikan semua formulir terisi
                </div>
            <?php endif; ?>
    
            <form method="POST" action="<?=  BASE_URL. 'process/jadwalsidang/process_edit.php'  ?>" class="register-form">
            <input name="id" value="<?= $jadwalsidang['id'] ?>" type="hidden">
            <div>
                <label>Sesi</label>
               
                <input type="number" placeholder="Sesi" value="<?= $jadwalsidang['sesi'] ?>" class="nama" name="sesi" id="nama">

            </div>
            <div>
                <label>Nama Mahasiswa</label>
                <input type="text" placeholder="Nama Mahasiswa" class="nama" name="namamhs" id="nidn" value="<?= $jadwalsidang['namamhs'] ?>">

            </div>
            <div>
                <label>Nama Dosen 1</label>
                <input type="text" placeholder="Nama Dosen 1" class="nama" name="namadosen1" id="namadosen1" value="<?= $jadwalsidang['namadosen1'] ?>">

            </div>
            <div>
                <label>Nama Dosen 2</label>
                <input type="text" placeholder="Nama Dosen 2"class="nama" name="namadosen2" id="namadosen2" value="<?= $jadwalsidang['namadosen2'] ?>">

            </div>
            <div>
                <label>Tanggal</label>
                <input type="date" name="tgl" id="tgl" placeholder="yyyy-mm-dd" value=""min="1950-01-01" max="2030-12-31">
            </div>   
            <button type="submit">Submit</button>
        </form>
    
        </div>
    </div>
</body>
</html>

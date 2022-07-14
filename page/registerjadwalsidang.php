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
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    <style>
            *{
        margin: 0;
        padding: 0;
    }
    .error {
        color: red; 
        background: #ffc2c4; 
        padding: 10px; 
        margin: 10px auto; 
        width: 20%;
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
    </style>
</head>
<body>
    <form method="POST" action="<?= base_url('process/jadwalsidang/process_add.php')  ?>" class="register-form">
    <div class="tambahdosen">Tambah Dosen Penguji</div>
        <div>
            <input type="number" placeholder="Sesi"class="nama"name="nama" id="nama">
        </div>
        <div>
            <input type="text" placeholder="Nama Mahasiswa"class="nama" name="nidn" id="nidn">
        </div>
        <div>
            <input type="text" placeholder="Nama Dosen 1"class="nama" name="jeniskelamin" id="jeniskelamin">
        </div>
        <div>
            <input type="text" placeholder="Nama Dosen 2"class="nama" name="alamat" id="alamat">
        </div>
        <div>
        <div>
            <label class="tanggal">Tanggal</label>
            <input type="date" class="nama"name="tgl" id="tgl" placeholder="yyyy-mm-dd" value=""min="1950-01-01" max="2030-12-31">
        </div>
        <button class="submit"type="submit">Submit</button>
    </form>

</body>
</html>
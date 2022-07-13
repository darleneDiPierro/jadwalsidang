<?php
include('config/app.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website Sidang</title>
    <link rel="icon" type="image/png" href="<?= base_url('aset/landingpage/bg.png') ?>" /> <!--Buat Icon kecil disamping judul-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    <style>

        * {
            margin: 0;
            padding: 0;
            font-family: 'Poppins', sans-serif;
        }
        body {
            background-image: url(<?= base_url('aset/images/landingpage/bg.png') ?>);
            background-size: cover;
        }
        .logo {
            width: 15%;
            height: 15%;
        }
        .judul {
            padding-top: 2%;
            color: white;
            text-shadow: 2px 2px 5px black;
            font-weight: bold;
            display: flex;
            justify-content: center;
            font-size: 50px;
        }

        .dot {
            height: 250px;
            width: 250px;
            background-color: #bbb;
            border-radius: 50%;
            display: inline-block;
            margin-top: 5%;
            margin-left: 14% 5%;

        }

        body > p {
            font-size: 30px;
            color: white;
            text-shadow: 2px 2px 5px black;
            font-weight:500;
        }
        .landingpage {
            display: flex;
            flex-direction: row;
            justify-content: center;
            flex-wrap: wrap;
            gap: 250px;
        }

        .login-name {
            color:white;
            margin-left: 17%;
            font-size: 50px;
        }
        .login-mahasiswa {
            color:white;
            font-size: 50px;
        }
    </style>
</head>
<body>
    <img class ="logo" src="Assets/landingpage/logo.png" alt="" srcset="">
    <h1 class="judul">Sidang Skripsi Universitas Esa Unggul</h1>
    <h4 class="judul">Login As</h4>
    <div class="landingpage">
        <div>
            <a href="<?= base_url('login.php') ?>">
                <img src="<?= base_url('aset/images/landingpage/mahasiswa.png') ?>" class="dot">
            </a> 
            <p class="login-mahasiswa">Mahasiswa</p>
        </div>
        <div>
            <a href="<?= base_url('login.php') ?>">
                <img src="<?= base_url('aset/images/landingpage/dosen.png') ?>">
            </a>
            <p class="login-name">Dosen</p>
        </div>
        <div>
            <a href="<?= base_url('login.php') ?>">
                <img src="<?= base_url('aset/images/landingpage/Admin.png') ?>" class="dot">
            </a>
            <p class="login-name">Admin</p>
        </div>
    </div>
</body>
</html>


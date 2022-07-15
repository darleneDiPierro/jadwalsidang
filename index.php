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
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        * {
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
            color: white;
            text-shadow: 2px 2px 5px black;
            font-weight: bold;
            display: flex;
            justify-content: center;
            font-size: 50px;
        }

        .landingpage {
            text-align: center;
        }

        .dot {
            width: 250px;
            background-color: #bbb;
            border-radius: 50%;
            display: inline-block;
        }
        body > p {
            font-size: 30px;
            color: white;
            text-shadow: 2px 2px 5px black;
            font-weight:500;
        }

        .login-name {
            color:white;
            font-size: 50px;
        }
        a{
            text-decoration: none;
        }
    </style>
</head>
<body class="h-100 w-100">
    <img class ="logo row" src="aset/images/landingpage/logo.png" alt="" srcset="">
    <h1 class="judul row w-100 mb-3">Sidang Skripsi Universitas Esa Unggul</h1>
    <h4 class="judul row w-100 mb-5">Login As</h4>
    <div class="landingpage row row-cols-3 w-100">
        <a onclick="checkUser('Mahasiswa')" href="<?= base_url('login.php') ?>" class="col p-0">
            <img src="<?= base_url('aset/images/landingpage/mahasiswa.png') ?>" class="dot">
            <p class="login-name" id="login-name">Mahasiswa</p>
        </a>
        <a onclick="checkUser('Dosen')" href="<?= base_url('login.php') ?>" class="col p-0">
            <img src="<?= base_url('aset/images/landingpage/dosen.png') ?>" class="dot">
            <p class="login-name" id="login-name">Dosen</p>
        </a>
        <a onclick="checkUser('Admin')" href="<?= base_url('login.php') ?>" class="col p-0">
            <img src="<?= base_url('aset/images/landingpage/Admin.png') ?>" class="dot">
            <p class="login-name" id="login-name">Admin</p>
        </a>
    </div>
    

                
</body>
 <!-- Latest compiled JavaScript -->
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
 <script>
     
     function checkUser(user) {
        localStorage.clear();
        localStorage.setItem("user", user);
    }
 </script>
</html>


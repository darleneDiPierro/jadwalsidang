<?php
    include_once('../config/app.php');
    include_once('../controllers/AuthenticationController.php');
    $data = $authenticated->authDetail();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Sidang</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    <link rel="style<link rel="stylesheet" href="<?= base_url('aset/css/font.css') ?>">
    <style>
        *{
            font-family: 'Poppins', sans-serif;
        }
        .menu-option {
            border-radius: 10px;
            border: none;
            margin: 15px;
            width: 80%;
            display: flex;
            align-items: center;
            padding: 0px 20px;
            font-family: "Poppins", sans-serif;
            font-weight: bold;
        }

        .myprofile {
            color: white;
            display: flex;
            align-items: center;
            margin-bottom: 20%;
        }
        
</head>
<body>
    
</body>
</html>

<div>
    <?php include('message.php'); ?>
    <div>
        <h1>My Profile Page</h1>
        <hr>
        <h4>Full Name: <?= $data['fname'].' '.$data['lname'] ; ?></h4>
        <h4>Email: <?= $data['email']; ?></h4>
        <h4>Created At: <?= date('d-m-y', strtotime($data['create_at'])); ?></h4>        
    </div>
</div>
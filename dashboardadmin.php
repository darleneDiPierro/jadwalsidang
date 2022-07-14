<?php
    include_once('controllers/AuthenticationController.php');
    $data = $authenticated->authDetail();


$page = isset($_GET['page']) ? ($_GET['page']) : false;

if (!$_SESSION['authenticated']) {
    header("location: " . base_url(''));
    exit();
}

?>

<?php include("message.php"); ?>


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

        * {
        margin: 0;
        padding: 0;
        }

        .mp {
        display: flex;
        height: 100vh;
        }
        .sidebar {
        background-image: url(<?= base_url('aset/images/mp-dosen/bg.png')?>);
        background-size: cover;
        flex: 11;
        }
        .dot {
        background-image: url(<?= base_url('aset/images/mp-dosen/profile.png')?>);
        background-size: cover;
        height: 3rem;
        width: 3rem;
        background-color: white;
        border-radius: 50%;
        display: inline-block;
        margin-left: 1%;
        margin-top: 1%;
        }
        .myprofile {
        color:white;
        display: flex;
        align-items: center;
        margin-bottom:20%;
        }
        .myprofile >p {
        padding: 0 10px;
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

        .menu-option >img {
        margin: 0px 15px;
        }

        .option {
        display: flex;
        align-items: center;
        flex-direction: column;
        justify-content: stretch;
        }
        .esgulpage {
        background-image:url(<?= base_url('aset/images/mp-dosen/esgulpage.png ') ?>);
        background-size: cover;
        display: flex;
        flex: 37;
        justify-content: center;
        }


        .rectangle{
        width:1292px;
        height:862px;
        background-color:#A94F88;
        border-radius: 30px;
        align-self: center;
        }

        .isi{
        margin-left: 4.5%;
        font-family: 'Poppins', sans-serif;
        font-weight: bold;
        margin-top: 2rem;

        }


        .header{
        position: relative;
        margin-bottom: 2.5%;
        left:30px;
        top:18px;
        font-family: 'Poppins', sans-serif;
        font-weight: bold;
        color:#FFFFFF;
        font-size:45px;

        }

        .text{
        font-family: 'Poppins', sans-serif;
        font-size:24px;

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

        .nim{
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

        .choose-file{
        width:160px;
        height:38px;
        background-color:#FFFFFF;
        border-radius: 15px;
        font-family: 'Poppins', sans-serif;
        font-size: 20px;
        }

        .daftar{
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
        a {
        text-decoration: none;
        }

        form menu-option{
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

        button{
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
    </style>
</head>
<body >

  <div class="mp">
    <div class="sidebar">
        <div class="myprofile">
            <div class="dot"></div>
            <p><?= $data['fname'].' '.$data['lname'] ; ?></p>
        </div>
        <div class="option">
            <button class="menu-option">
                <img src="<?= base_url('aset/images/mp-dosen/Calendar.png') ?>" alt="">
                <a href="<?= base_url('dashboard.php?page=datajadwalsidang') ?>">INFO JADWAL</a>
            </button>
            <button class="menu-option">
                <img src="<?= base_url('aset/images/mp-dosen/p-sidang.png')  ?>" alt="">
                <a href="<?= base_url('dashboard.php?page=daftarsidang')  ?>">BERITA SIDANG</a>
            </button>
            <button class="menu-option">
                <img src="<?= base_url('aset/images/mp-dosen/feedb.png')  ?>" alt="">
                <a href="<?= base_url('dashboard.php?page=feedback')  ?>">LIST MAHASISWA</a>
            </button>
            <button class="menu-option">
                <img src="<?= base_url('aset/images/mp-dosen/info.png')  ?>" alt="">
                <a href="<?= base_url('dashboard.php?page=myprofile')  ?>">LIST DOSEN</a>
            </button>
            <form class="menu-option" action="" method="POST">
                <button type="submit" name="logout_btn">
                    <img src="<?= base_url('aset/images/mp-dosen/logout.png')  ?>" alt="">    
                    Logout
                </button>
            </form>
        </div>
    </div>
    <div class="esgulpage">
      <div class="rectangle">
        <div class="isi">
        <?php
            $filename = "page/$page.php";
                if(file_exists($filename)){
                    include_once($filename);
                } else {
                    echo "DASHBOARD";
                }
        ?>
      </div>
    </div>
</div>
        
  </div>
  
</body>
</html> 
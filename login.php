<?php
include('config/app.php');
$auth->isLoggedIn();
?>

<?php include("message.php"); ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    <style>
        
    * {
        padding: 0;
        margin: 0;
    }
    form {
        background-image: url(<?= base_url('aset/images/landingpage/bg.png') ?>);
        background-size:cover;
    }    
    .html-login{
        margin: 50px;
        padding: 50px;
        text-align: center;
    } 

    .tampilan-menu {
        border: 1px solid #ccc;
        border-radius: 15px;
        box-sizing: border-box;
        background-color: #ECECEC;
        position: absolute;
        height: 678px;
        width: 678px;
        transform: translate(-50%, -50%);
        top: 50%;
        left: 50%;
        font-weight: bold;
        font-size: 48px;
    }
    .head {
        padding-top: 35px;
        font-family: 'Poppins', sans-serif;
    }

    .username-input{
        color:black;
        height: 60px;
        width: 508px;
        padding: 12px 20px;
        border: 1px solid #ccc;
        border-radius: 8px;
        box-sizing: border-box;
        font-size: 24px;
        margin: 2vh 0;
    
    }

    #password-input
    {
        color:black;
        height: 60px;
        width: 508px;
        padding: 12px 20px;
        border: 1px solid #ccc;
        border-radius: 8px;
        box-sizing: border-box;
        font-size: 24px;
        margin: 2vh 0;

    }

    .button-input{
        height: 66px;
        width: 508px;
        background-image: linear-gradient(#254edb,#254edb);
        color: #ffffff;
        font-size: 32px;
        margin: 8px 0;
        margin: 30px 0;
        border: 1px solid #ccc;
        border-radius: 8px;
        box-sizing: border-box;
        font-size: 24px;
    
    }

    .showpw {
        position: absolute; ;
        right: 100px;
        top: calc(32vh + 5px);
        
    }

    a {
        text-decoration: none;
    }

    a img{
        position:absolute;
        left: 9px;
    }

</style>
</head>
<form class="html-login" method="POST" action="">
    <div class="tampilan-menu">
        <div class="head">
        <a href="index.php"><img src="aset/images/backarrow.png" alt=""></a>
            Login
            <div class="username">
                <br>
             <input type="username" name="uname" placeholder="username" class="username-input">
            </div>
        <div class="password">
            <input type="password" name="password" placeholder="password" id="password-input">
            <img type="checkbox" onclick="hoverPassword()" class="showpw"src="aset/images/hiddenpw.png" alt="">
            <button type="submit" name="login_btn" class="button-input">Login</button>
        </div>
    </div>
    <script>
        function hoverPassword() {
        var x = document.getElementById("password-input");
        if (x.type === "password") {
        x.type = "text";
        } else {
        x.type = "password";
        }
}
    </script>
</form>
</html>
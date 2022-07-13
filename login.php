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
        
.html-login{
    background-image: url(Assets/bg.png);
    background-size: cover;
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
    display:flex;
    justify-content: flex-start;
    
}

a {
    text-decoration: none;
}
    </style>
</head>
<form class="html-login" method="POST" action="">
    <div class="tampilan-menu">
        <div class="head">
            Login
            <div class="username">
                <br>
             <input type="username" name="uname" placeholder="username" class="username-input"><br>
            </div>
        <div class="password">
            <br>
            <input type="password" name="password" placeholder="password" id="password-input"><br>    
            <button type="submit" name="login_btn" class="button-input">Login</button>
        </div>
    </div>
    
</form>
</html>
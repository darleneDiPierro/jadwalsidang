<?php
    include_once('config/app.php');
?>  
<style>
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
    .submit {
        display:flex;
        width:1086px;
        height:38px;
        border-radius: 15px;
        margin: 0 auto;
        margin-top: 2.5%;
        font-family: 'Poppins', sans-serif;
        font-size: 24px;
        justify-content:center; 
        
    }
    .register{
        color:white;
        text-shadow: -1px -1px 0 #000, 1px -1px 0 #000;
        font-size: 50px;
    }
</style>
<form action="" method="POST">
    <div class="register">Register</div>
    <div>
        <input type="text" class="nama" placeholder ="First Name"name="fname" id="fname">
    </div>
    <div>
        <input type="text" class="nama" placeholder ="Last Name" name="lname" id="lname">
    </div>
    <div>
        <input type="email" class="nama" placeholder ="Email" name="email" id="email">
    </div>
    <div>
        <input type="text" class="nama" placeholder ="Username" name="uname" id="uname">
    </div>
    <div>
        <input type="password" class="nama" placeholder ="Password" name="password" id="password">
    </div>
    <div>
        <input type="password" class="nama" placeholder ="Confirm Password" name="confirm_password" id="confirm_password">
    </div>
    <div>
        <input type="number"  class="nama" placeholder ="Role" name="role_as" id="role_as" min="0" max="2">
    </div>
    <button type="submit" class="submit" name="register_btn">Submit</button>
</form>
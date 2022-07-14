<?php
    include_once('config/app.php');
?>  

<form action="" method="POST">
    <h1>Register</h1>
    <div>
        <label for="fname">First Name</label>
        <input type="text" name="fname" id="fname">
    </div>
    <div>
        <label for="lname">Last Name</label>
        <input type="text" name="lname" id="lname">
    </div>
    <div>
        <label for="email">Email</label>
        <input type="email" name="email" id="email">
    </div>
    <div>
        <label for="uname">Username</label>
        <input type="text" name="uname" id="uname">
    </div>
    <div>
        <label for="password">Password</label>
        <input type="password" name="password" id="password">
    </div>
    <div>
        <label for="confirm_password">Confirm Password</label>
        <input type="password" name="confirm_password" id="confirm_password">
    </div>
    <div>
        <label for="confirm_password">Role : </label>
        <input type="number" name="role_as" id="role_as" min="0" max="2">
    </div>
    <button type="submit" name="register_btn">Submit</button>
</form>
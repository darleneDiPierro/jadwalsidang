<?php
require_once('../function/helper.php');
require_once('../function/koneksi.php');

// menangkap request

$username = $_POST['username'];
$password = md5($_POST['password']);

$admin = mysqli_query($koneksi, "SELECT * FROM admin WHERE username = '$username' AND password = '$password'");

// mengecek user ada atau tidak

if(mysqli_num_rows($admin) != 0){
    $row = mysqli_fetch_assoc($admin);
    
    // membuat session 

    session_start();
    $_SESSION['id'] = $row['id'];

    header("location: ". BASE_URL . 'dashboard.php');

} else {
    header("location: ". BASE_URL);
}

?>
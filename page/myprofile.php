<?php
    include_once('config/app.php');
    include_once('controllers/AuthenticationController.php');
    $data = $authenticated->authDetail();
?>
<div>
    <?php include('message.php'); ?>
    <div>
        <h1>My Profile Page</h1>
        <hr>
        <h4>Full Name: <?= $data['fname'].' '.$data['lname'] ; ?></h4>
        <h4>Email: <?= $data['email']; ?></h4>
        
        <h4>Role sebagai: 
        <?php 

        if($data['role_as'] == '1') {
            echo "Admin";
        } elseif ($data['role_as'] == '0') {
            echo "Mahasiswa";
        } elseif($data['role_as'] == '2'){
            echo "DSosen";
        }

        ?>

        </h4>
        <h4>Created At: <?= date('d-m-y', strtotime($data['created_at'])); ?></h4>        
    </div>
</div>
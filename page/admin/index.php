<?php
include_once('../../config/app.php');
include_once('../../controllers/AuthenticationController.php');
$authenticated = new AuthenticationController;
$authenticated->admin();

?>

<div>
    ADMIN
</div>
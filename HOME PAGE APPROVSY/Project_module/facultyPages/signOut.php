<?php
session_start();
session_unset();
session_destroy();

header("location:/APPROVSY/HOME PAGE APPROVSY/projectFront.php");
?>
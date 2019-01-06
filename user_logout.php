<?php

session_start();
$_SESSION['User_login'] = FALSE;
session_destroy();
session_unset();
header("Location:index.php");


?>
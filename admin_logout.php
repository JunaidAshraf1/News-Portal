<?php

session_start();
$_SESSION['Admin_login'] = FALSE;
session_destroy();
session_unset();
header("Location:index.php");


?>
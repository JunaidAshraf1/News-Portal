<?php


$host = "Localhost";
$username = "root";
$password = "";
$database = "news_portal";

$conn = mysqli_connect($host, $username, $password, $database);

// Check connection
if (!$conn) {
	
    //die("Connection failed: " . mysqli_connect_error());
	header("location:https://previews.123rf.com/images/stolenpencil/stolenpencil1603/stolenpencil160300028/55885004-oops-broken-pencil-404-error-page-vector-template.jpg");
}
echo "";


?>
<?php
	session_start();
	if (isset($_SESSION["user"])) {
			header("location:userprofile.php");
	}
	  if(isset($_SESSION['company'])) {
    header("location:Com_userprofile.php");
  }
?>
<html>
<head><title>Homepage</title>
<style>

</style>


</head>
<body>
<?php include 'news.php' ; ?>

<link rel="stylesheet" type="text/css" href="api.css">




<!-- news -->
<?php include "newsauto.php";
?>
</div>

</body>
</html>

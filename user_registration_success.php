<?php  

if(!isset($_GET['id'])){
    
     
    header("location:user_registration.php");
}

else{

    $new_user_id = $_GET['id']; 
}
    
    ?>
<html>
<head>

<style>
body{


background-color:rgb(9, 47, 76,0.5);
}

.registration_success_container{
    width:30%;
    padding:1%;
    margin:10% auto;
    background-color:white;
    box-shadow:1px 1px 10px rgba(32, 65, 90,0.9);
    text-align:center;
    overflow:auto;
    border-radius:4px;


}

.registration_success_container label{

    
    text-align:center;
    //background-color:blue;
    display:block;
    color:rgb(116, 125, 122);
    font-size:22px;
    padding:20px;
    border-radius:5px;
 
}

.reg_label{
    width:80%;
    //background-color:red;
    margin:5% auto;
    padding:20px;
}

hr{

    width:90%;
}
</style>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Success</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
<div class="registration_success_container">
<br>
<div class="reg_label">
<label>Registration Successful</label><br><hr><br>
<label>Your User Id<br><br><?php  echo $new_user_id; ?></label><br>
</div>
</div>
    
</body>
</html>
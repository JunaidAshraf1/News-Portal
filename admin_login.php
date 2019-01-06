<?php
session_start();
if(isset($_SESSION['Admin_login'])){


    header("Location:admin_profile.php");

}



?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="css/header.css">
<style>
#admin_body{

background-color:rgb(9, 47, 76,0.5);

}

#admin_login_label{


     //background-color:pink;
    text-align:center;
    padding:4%;
    margin-left:0%;
    font-size:22px;
    font-weight:600;
    color:rgb(0, 98, 110);
}

.admin_auth{

    margin:10% auto;
    background-color:white;
    width:30%;
    padding:1%;
    background-color:white;
    box-shadow:1px 1px 10px rgba(32, 65, 90,0.9);
    text-align:center;
    overflow:auto;
    border-radius:4px;
}

.admin_auth input{

padding:10px;
width:90%;
margin:10px;
font-size:14px;

}

.admin_auth input[type="submit"]{

       width:22%;
        float:right;
        margin-right:5%;
        font-size:15px;
        background-color:rgba(9, 47, 76,0.8);
        font-weight:700;
        color:white;
        border:3px solid white;
        border-radius:5px;
        box-shadow:0px 5px 5px rgb(202, 216, 205);
        cursor:pointer;
        text-shadow:0px 2px 1px rgba(0,0,0,0.4);

}

.admin_auth input[type="submit"]:hover {

background-color:rgba(9, 47, 76,0.9);
}

h1{

    color:black;
    font-size:14px;
}

</style>
</head>
<body id="admin_body">
<?php  include 'header.php' ?>
<div class="admin_auth">
<br>
<label id="admin_login_label">ADMIN LOGIN</label><br><br><hr><br>
<form method="post">
<input type="text" name="admin_id" placeholder="Admin Id" required><br>
<input type="password" name="admin_pass" placeholder="Password" required><br>
<input type="submit" name="admin_login" value="Log In">
</form>



<?php 

if(isset($_POST['admin_login'])){

    include 'db_connect.php' ;

        $admin_id = $_POST['admin_id'];
        $admin_pass = $_POST['admin_pass'];

        $sql = "SELECT * from admin WHERE Admin_id ='$admin_id'";

        $result = $conn->query($sql);
        if($result->num_rows > 0){

            $row = $result->fetch_assoc();

                if($admin_pass != $row['Password']){

        
                echo "<h1>Incorrect Password</h1>";                  
        }

        else{

            session_start();
            $_SESSION['Admin_login'] = TRUE;
            header("Location:admin_profile.php");
        
        }

    }

        else{

                echo "<h1>Incorrect Admin Id</h1>";
        }   
    }



?>

</div>


</body>
</html>
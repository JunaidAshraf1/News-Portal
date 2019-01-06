<?php
session_start();
if(isset($_SESSION['User_login'])){


    header("Location:User_profile.php");

}



?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="css/header.css">
<style>
#User_body{

background-color:rgb(9, 47, 76,0.5);

}

.User_auth{

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

.User_auth input{

padding:10px;
width:90%;
margin:10px;
font-size:14px;

}



.User_auth input[type="submit"]{

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

.User_auth input[type="submit"]:hover{

    background-color:rgba(9, 47, 76,0.9);

}

#user_login_label{

    //background-color:pink;
    text-align:center;
    padding:4%;
    margin-left:0%;
    font-size:22px;
    font-weight:600;
    color:rgb(0, 98, 110);


}

h1{

    color:black;
    font-size:14px;
}


.User_auth a{

text-decoration:none;


}
.User_auth a h1{

//background-color:red;
color:rgb(0, 98, 110);
display:inline;
}

.User_auth a:hover h1{

    color:black;

}


</style>
</head>
<body id="User_body">
<?php  include 'header.php' ?>
<div class="User_auth">
<br>
<label id="user_login_label">USER LOGIN</label><br><br><hr><br>
<form method="post">
<input type="text" name="User_id" placeholder="User Id" required><br>
<input type="password" name="User_pass" placeholder="Password" required><br>
<input type="submit" name="User_login" value="Log In">
</form><br>

<?php 

if(isset($_POST['User_login'])){

    include 'db_connect.php' ;

        $User_id = $_POST['User_id'];
        $User_pass = $_POST['User_pass'];

        $sql = "SELECT * from User WHERE User_id ='$User_id'";

        $result = $conn->query($sql);
        if($result->num_rows > 0){

            $row = $result->fetch_assoc();

                if($User_pass != $row['Password']){

        
                echo "<h1>Incorrect Password</h1>";                  
        }

        else{

            session_start();
            $_SESSION['User_login'] = TRUE;
            $_SESSION['Username'] = $row['Username'];
            $_SESSION['User_Id'] = $row['User_Id'];
            header("Location:User_profile.php");
        
        }

    }

        else{

                echo "<h1>Incorrect User Id</h1>";
        }   
    }



?>
<a href="user_registration.php" ><h1>Not a member ? Register now</h1></a>
</div>


</body>
</html>
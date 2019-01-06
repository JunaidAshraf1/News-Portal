<html>
<head><title>User Registration</title>
<style>

::-webkit-input-placeholder { 
    
    color:rgba(116, 125, 122,0.8);
    font-style:italic;

}

body{


    background-color:rgb(9, 47, 76,0.5);
}
.reg_form_container{


    width:30%;
    padding:1%;
    margin:5% auto;
    background-color:white;
    box-shadow:1px 1px 10px rgba(32, 65, 90,0.9);
    text-align:center;
    overflow:auto;
    border-radius:4px;
}
.reg_form_container label{

    text-align:left;
   // background-color:blue;
    display:block;
    margin-left:5%;
    margin-bottom:5px;
    color:rgb(116, 125, 122);
    outline: none;
    font-size:13px;
    

}
#signup_label{

    //background-color:pink;
    text-align:center;
    padding:4%;
    margin-left:0%;
    font-size:24px;
    font-weight:600;
    color:rgb(0, 98, 110);




}

.reg_form_container input{

    
    padding:10px;
    border-radius:3px;
    width:90%;
    border:1px solid rgba(116, 125, 122,0.8);

}

.reg_form_container input[type="submit"]{


        width:22%;
        float:right;
        margin-right:5%;
        font-size:14px;
       // background-color:rgb(66, 155, 180);
        background-color:rgba(9, 47, 76,0.8);
        font-weight:700;
        color:white;
        border:3px solid white;
        border-radius:5px;
        box-shadow:0px 4px 5px rgb(202, 216, 205);
        cursor:pointer;
        text-shadow:0px 2px 1px rgba(0,0,0,0.4);

}

.reg_form_container input[type="submit"]:hover{

background-color:rgba(9, 47, 76,0.9);

}

hr{


}
#error{

    width:60%;
    font-size:11px;

}
</style>



</head>
<body>
<?php include 'header.php'; ?>
<div class="reg_form_container">
<label id="signup_label">SIGN UP</label><hr><br>
<form method="POST">
<label>Your Username</label>
<input type="text" name="user_name" placeholder="eg John Smith" required><br><br>
<label>Your email</label>
<input type="text" name="email_id" placeholder="myemailid@mail.com" required><br><br>
<label>Your password</label>
<input type="password" name="password" placeholder="Password" required><br><br>
<label>Please confirm your password</label>
<input type="password" name="confrm_pass" placeholder="Confirm Password" required><br><br>
<input type="submit" name="submit" value="SIGN UP">
</form>

</body>

<?php

if(isset($_POST['submit'])){

      //  $username = $_POST['user_name'];
        $user_name = $_POST['user_name'];
        $user_id = "user_".mt_rand(100,900).mt_rand(10,99);
        $email_id = $_POST['email_id'];
        $pass = $_POST['password'];
        $cnfrm_pass = $_POST['confrm_pass'];

        if($pass != $cnfrm_pass){

            echo "<h3 id='error'>Password and confirm password should not be different</h3>";
        }

        else{
        

        include 'db_connect.php';

        $sql = "INSERT INTO user(Username, User_Id, Email_Id, Password) 
        VALUES('$user_name','$user_id','$email_id','$pass')";

        if($conn->query($sql) == TRUE ){

            header("Location:user_registration_success.php?id=$user_id");
          
        }

        else{

            echo "Registration failed<br>".$sql;
            echo "</div>";
        }

    }

    

}



?>
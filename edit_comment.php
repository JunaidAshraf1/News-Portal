<?php

include 'db_connect.php'; 
    $comm_id = $_GET['id'];
    $news_id = $_GET['news_id'];
    $comment= $_GET['comment'];

?>

<html>
<head>

<style>

.edit_comment{

    width:50%;
    margin:5% auto;
    background-color:pink;
    text-align:center;
    padding:1%;
    box-shadow:1px 1px 10px rgba(32, 65, 90,0.5);
    background-color:white;

}

.edit_comment input[type="submit"]{

        width:30%;
       // text-align:center;
        /margin-right:5%;
        padding:2%;
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

.edit_comment input[type="submit"]:hover{

       background-color:rgba(9, 47, 76,0.9);
}

</style>
<body>
</body>
<div class="edit_comment">
<h2>Edit Comment</h2>
<form method="POST">
<textarea rows="15" cols="55" name="my_comment" ><?php echo $comment ; ?></textarea><br><br>
<input type="submit" name="submit" value="Submit">
</form>
</div>
</head>
</html>

<?php
if(isset($_POST['submit'])){

    $comment = $_POST['my_comment'];


    $sql = "UPDATE comments SET comment='$comment'";

    if($conn->query($sql) == TRUE){


        header('location:user_comments.php?id='.$news_id.'');

    }

    else{

        echo "ERROR<br>".$sql."<br><br>".$conn->error;

    }
}


?>
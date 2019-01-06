<?php

include 'db_connect.php'; 
echo $comm_id = $_GET['id'];
echo "<br>";
echo $news_id = $_GET['news_id'];


$sql = "DELETE FROM comments WHERE comment_id = '$comm_id'";

if($conn->query($sql) == TRUE){

    echo '<script>alert("Comment Deleted Successfully")
    location="user_comments.php?id='.$news_id.'"</script>';
    
        }

else{

    echo "ERROR".$sql."<br>".$conn->error;
}




?>
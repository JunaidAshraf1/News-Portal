<html>
<head>
<style>

::-webkit-input-placeholder { 
    
    color:rgba(116, 125, 122,0.8);
    font-style:italic;
    font-size:15px;

}
body{  

	background-color: rgba(9, 47, 76,0.5);
}

.news_preview{


    width:85%;
    background-color:rgb(232, 232, 247);
    margin:1% auto;
    box-sizing: border-box;
    padding:5px;


  
}

.news_preview img{

    padding:1%;
   // margin:10px;
}

.news_preview h2,h5{


}

.news_preview label{


  padding:10px;
  margin-bottom:10px;
} 

.news_head{
  margin:1% auto;
  margin-right:7%;
  float:right;
  width:50%;
  //background-color:gray;
  color:black;
  

}

.news_content{

  width:97%;
  color:white;
  margin:0px auto;

}

#insert{

 background-color: rgba(9, 47, 76,0.8);

}

.news_preview a{

  text-decoration:none;

}
.comments_container{

    width:85%;
    background-color:rgb(232, 232, 247);
    margin:1% auto;
    box-sizing: border-box;
    padding:5px;
    overflow:auto;
}

.news_comments{
    float:left;
    width:54.5%;
    background-color:rgb(232, 232, 247);
    box-sizing: border-box;
    //border:1px solid red;
    padding:10px;
    margin:10px;

}

label{
 
  font-size:18px;
  font-weight:600;
 // background-color:red;
  width:200px;
  display:inline-block;
  margin:10px;



}

.write_comment{

    width:40%;
    background-color:rgb(232, 232, 247);
    float:right;
    padding:20px;
   // border:1px solid red;
    padding:10px;
    margin:10px;

}


.comment_modify_btn{

    //background-color:pink;
    //border:1px solid black;
    width:25%;
    float:left;



}
.button1{

}
#space{

  display:inline-block;
  width:15px;

}

.write_comment input[type="submit"]{

width:100%;
// text-align:center;
/margin-right:5%;
padding:2%;
font-size:16px;
background-color:rgba(9, 47, 76,0.8);
font-weight:700;
color:white;
border:3px solid white;
border-radius:5px;
box-shadow:0px 5px 5px rgb(202, 216, 205);
cursor:pointer;
text-shadow:0px 2px 1px rgba(0,0,0,0.4);


}

.write_comment input[type="submit"]:hover{

background-color:rgba(9, 47, 76,0.9);
}

</style>

</head>




<?php

       ob_start();
 session_start();
include 'header.php';
include 'db_connect.php';
 $news_id = $_GET['id'];
$sql = "SELECT * from news WHERE Id = '$news_id'";

$result = $conn->query($sql);
if($result->num_rows > 0){

    while($row = $result->fetch_assoc()){
        
          $news_id = $row['Id'];
           echo '<div class="news_preview">';
            echo '<div class="news_content">';
            echo '<img class="news_photo" src="data:image/jpeg;base64,'.base64_encode($row['Photo']).'" height="290px" width="340px"/>';
            echo '<div class="news_head">';
            echo '<br><h2>'.$row['Title'].'</h2><br><br>
                  <h5>'.$row['Article'].'</h5><br><br>
                  <h5>Author : Admin </h5><br>
                  <h5>Date : '.$row['Date_added'].'</h5><br>';
            echo '</div><br></div></div>';
           

    }

  }

  echo '<div class="comments_container">';

  $sql="SELECT * FROM comments WHERE news_id = '$news_id' ORDER BY comment_id DESC";
  
  $result = $conn->query($sql);
  if($result->num_rows > 0){

    
    echo '<div class="news_comments">';
    echo '<h5>Comments</h5><br><hr><br>';
      while($row = $result->fetch_assoc()){
       
         echo' <h3>'.$row['username'].'</h3><h6>'.$row['date'].'</h6><br>
              <p>'.$row['comment'].'</p>';
              
              if(isset($_SESSION['User_login']) && ($_SESSION['User_Id'] == $row['user_Id'])){
                
                echo '<br><div class="comment_modify_btn">';
                echo '<a class="button1" href="edit_comment.php?id='.$row['comment_id'].'&news_id='.$news_id.'&comment='.$row['comment'].'"><img src="icon/edit.png" height="25px" width="25px"></a>';
                echo '<div id="space"></div>';?>
                <a class="button1" href="delete_comment.php?id=<?php echo $row['comment_id']; ?>&news_id=<?php echo $news_id; ?>"  onclick="return confirm('Are you sure, to delete this comment ?');"  ><img src="icon/delete.png" height="25px" width="25px"></a>
                <?php 
                echo '</div>';
              }
              
              echo '<br><br><hr>';

             
          
 
      }
  
        echo '</div>';
      

}

else{

echo "<label><br>No Comment</label>";

}

            echo '<div class="write_comment">
            <form method="POST">
            <textarea rows="10" cols="62" name="my_comment" placeholder="Write your comment here..."></textarea><br><br>
            <input type="submit" name="submit_comment" value="Submit">
            </form>';
    


          if(isset($_POST['submit_comment'])){

            if(empty($_POST['my_comment'])){

            echo "<br><h4>Please write your comment before submtting</h4>";

            return 0;

            }
              
           
            if(isset($_SESSION['User_login'])){
              
             echo $username = $_SESSION['Username'];

              $comment = $_POST['my_comment'];

              $user_id  = $_SESSION['User_Id'];

            date_default_timezone_set('Asia/Kolkata'); 
	          $comment_date = date("d/m/y h:i:s A");

$sql="INSERT into comments (comment, news_id, username, user_Id, date) VALUES ('$comment','$news_id','$username','$user_id','$comment_date')";
            if($conn->query($sql) == TRUE){

       
      
              header("Refresh:0");
            }

            else{

              echo "ERROR!".$sql."<br>".$conn->error;
            }

            }    
          

              else{

              
                echo "<br><h4>Please Login First</h4>";

              }


          echo '</div></div>';
            }
?>



</html>
<?php 

session_start();

?>

<html>
<head>
<style>

body{ 
      
	background-color: rgba(9, 47, 76,0.5);
}

.user_profile_container{


width:85%;
//background-color:pink;
margin:2% auto;

}
.user_profile_container h4{

    display:block;
    text-align:center;
    padding:10px;

}

.user_profile_container h3{

     display:block;
    text-align:center;
    padding:10px;
}

input{
    
    padding:10px;
    margin:5px;
    width:70%;

}

.my_comments{


    width:85%;
    background-color:rgb(232, 232, 247);
    margin:1% auto;
    box-sizing: border-box;
    padding:5px;


}

#my_comment{

    background-color: rgba(9, 47, 76,0.8);

}
.comments_col{


margin:10px;
//border:1px solid black;
//background-color:pink;
box-shadow:1px 1px 5px rgba(0,0,0,0.5);

padding:20px;

}

.comments_col a{

text-decoration:none;
 cursor:pointer;

}
</style>
<title>
User Profile
</title>
</head>
<body>
<?php  include 'header.php' ?>
<?php include 'user_nav.php' ; ?>
<div class="user_profile_container">
<h3><?php echo $_SESSION['Username']; ?></h3>
<br>

<div class="my_comments">


<?php 
include 'db_connect.php';
$user_id = $_SESSION['User_Id'];


$sql = "SELECT * from comments WHERE user_Id = '$user_id'";
$result_comment = $conn->query($sql);

if($result_comment->num_rows == 0){

    echo '<h4>No Comments</h4>';
    return 0;
}

if($result_comment->num_rows > 0){
        echo '<h4>My Comments</h4>';
    while($row_comment = $result_comment->fetch_assoc()){
        echo '<div class="comments_col">';
        $news_id = $row_comment['news_id'];
        $get_news = "SELECT * from news WHERE Id = '$news_id' ";
        $result_comment_news = $conn->query($get_news);
        if($result_comment_news->num_rows > 0){
            while($row_comment_news = $result_comment_news->fetch_assoc()){
            echo '<a href="user_comments.php?id='.$news_id.'"><div class="news_det">';
            echo '<img class="news_photo" src="data:image/jpeg;base64,'.base64_encode($row_comment_news['Photo']).'" height="100px" width="100px"/>';
            echo '<h2>'.$row_comment_news['Title'].'</h2><br><br>
                  <h5>'.$row_comment_news['Article'].'</h5><br>';
                  echo "<h5>Comment : </h5>".$row_comment['comment'];
                  echo '</div></a>';
        }
        
       
    }
    echo '</div><br>';
    }


}
?>

</div>
</div>


</body>
</html>


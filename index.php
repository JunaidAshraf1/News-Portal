<html>
<head>
<style>
body{  

	background-color: rgba(9, 47, 76,0.5);
}

.news_preview{


    width:85%;
    background-color:rgb(232, 232, 247);
    margin:1% auto;
    box-sizing: border-box;
    padding:5px;
    overflow:auto;


  
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

</style>
<title>
Preview
</title>
</head>
<body>
<?php  
include 'header.php';
echo "<br><br>";
?>


<?php
include 'db_connect.php';
$sql = "SELECT * from news ORDER BY Id desc";

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
                  echo '<a href="user_comments.php?id='.$news_id.'"><h5>Comments</h5></a>';
            echo '</div><br></div></div>';
            
            

}
}
?>




</body>
</html>


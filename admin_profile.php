<html>
<head>
<style>

body{ 
      
	background-color: rgba(9, 47, 76,0.5);
}

.admin_profile_container{


width:85%;
//background-color:pink;
margin:2% auto;

}
.admin_profile_container h3{

    display:block;
    text-align:center;
    padding:10px;

}
.news_field{

width:50%;
background-color:wheat;
margin:5% auto;
text-align:center;
box-shadow:1px 1px 10px black;

}

input{
    
    padding:10px;
    margin:5px;
    width:70%;

}

#insert{

    background-color: rgba(9, 47, 76,0.8);

}

</style>
<title>
Admin Panel
</title>
</head>
<body>
<?php  include 'header.php' ?>
<?php include 'admin_nav.php' ; ?>
<div class="admin_profile_container">
<h3>Welcome Admin!</h3>
<div class="news_field">
<h3>Create News</h3>
<form enctype="multipart/form-data" method="post">
<input type="text" name="news_title" placeholder="Title"><br>
<input type="file" name="news_photo" value><br>
<textarea rows="15" cols="54" name="news_article" placeholder="Article"></textarea><br>
<input type="submit" value="Submit" name="submit"><br><br>
</form>
</div>
<br>
</div>


</body>
</html>

<?php
if(isset($_POST['submit'])){

    include 'db_connect.php';

    $title = $_POST['news_title'];
    
    $article = $_POST['news_article'];

    date_default_timezone_set('Asia/Kolkata'); 
	$_date_added = date("d/m/y h:i:s A");
   

    $news_photo=addslashes(file_get_contents($_FILES['news_photo']['tmp_name']));

    $file = $_FILES['news_photo']['tmp_name'];

    $news_photo=addslashes(file_get_contents($_FILES['news_photo']['tmp_name']));
    $news_photo_name=addslashes($_FILES['news_photo']['name']);
    $news_photo_size= getimagesize($_FILES['news_photo']['tmp_name']);
    if($news_photo_size == FALSE){
        
        echo '<script>alert("Selected File is not an image.\nPlease select an image file.")</script>';	
        
    }

    $sql = "INSERT INTO news(Title, Photo, Article, Date_added)
    VALUES('$title','$news_photo','$article','$_date_added ')";

    if($conn->query($sql) == TRUE){

        header("Location:news_modify.php");
    }

    else{

        echo "<br><br>".$sql;
    }
}



?>
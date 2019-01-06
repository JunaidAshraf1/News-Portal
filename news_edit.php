<?php $news_id=$_GET['id']; 

include 'db_connect.php';

$sql="SELECT * FROM news WHERE Id = '$news_id'";

$result=$conn->query($sql);
if($result->num_rows > 0){

    $row = $result->fetch_assoc();

    $title = $row['Title'];
    $article = $row['Article'];

}




?>
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

#Modify{

    background-color: rgba(9, 47, 76,0.8);

}

</style>
<title>
Edit News
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
<input type="text" name="news_title" placeholder="Title" value="<?php echo $title; ?>"><br>
<input type="file" name="news_photo" value><br>
<textarea rows="15" cols="54" name="news_article"><?php echo $article; ?></textarea><br>
<input type="submit" value="Submit" name="submit"><br><br>
</form>
</div>
<br>
</div>
</body>
</html>

<?php

if(isset($_POST['submit'])){

$title_new = $_POST['news_title'];
$article_new = $_POST['news_article'];

$sql="UPDATE news SET Title='$title_new', Article='$article_new' WHERE Id = $news_id";

if($conn->query($sql) == TRUE){

    echo '<script>alert("News Updated Successfully")
    location="news_modify.php"</script>';

}

else{
    
    echo "Error<br>".$sql;
}

}


?>
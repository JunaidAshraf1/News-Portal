
<?php $news_id=$_GET['id'];


include 'db_connect.php';

$conn->autocommit(FALSE);
$sql="DELETE FROM news WHERE Id = '$news_id'";
$sql_comment = "DELETE FROM comments WHERE news_id = '$news_id'";
if(($conn->query($sql) == TRUE) && ($conn->query($sql_comment) == TRUE)){

  $conn->commit();

  echo '<script>alert("News Deleted Successfully")
        location="news_modify.php"</script>';
  
}



?>
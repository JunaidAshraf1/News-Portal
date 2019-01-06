
<html>
<head>
<style>
.news_cont img{

width:75%;
height:45%;
}

.news_cont{
	margin:0px auto;
	width:85%;
}

</style>

</head>
<div class="news_cont">
<?php 


if (isset($_GET['q']) ) {

$url = 'https://newsapi.org/v2/top-headlines?sources='.$_GET['q'].'&apiKey=eb37fe01f58b4e94bc80eb491b2cd24f';
       $news_json = file_get_contents($url);
       $news_array=json_decode($news_json,true);
echo "<br><br>";

 $url1 = $news_array["articles"][0]["url"];
 $image = $news_array["articles"][0]["urlToImage"];
$total = count($news_array["articles"]);

       for ($i=0; $i <$total; $i++)  {
		echo '<div class="image" >'
	       	.'<a href="'
	       	.$news_array["articles"][$i]["url"]
	       	.'">'
	       	.'<div class="test"><img  src="'
	       	.$news_array["articles"][$i]["urlToImage"]
		       	.'" alt="" width=480 height=480/></a></div>'
		       	.'<div class="text_aling"><h3>'.$news_array['articles'][$i]['title']
		       	."</h3><br><br>"
		       	.'<h5>'
		       	.$news_array['articles'][$i]['description']
		       	.'</h5>'
		       	.'<label class="text"><br><br> Author: '
		       	.$news_array['articles'][$i]['author']
		       	.',<br>Date: '.$news_array['articles'][$i]['publishedAt']
		       	.'</label>'
		       	.'</div></div>';
		}
}

	else{

	$url = 'https://newsapi.org/v2/top-headlines?sources=google-news&apiKey=eb37fe01f58b4e94bc80eb491b2cd24f';
	       $news_json = file_get_contents($url);
	       $news_array=json_decode($news_json,true);
	echo "<br><br>";

	 $url1 = $news_array["articles"][0]["url"];
	 $image = $news_array["articles"][0]["urlToImage"];
	 $total = count($news_array["articles"]);

	 for ($i=0; $i <$total; $i++)  {
		echo '<div class="image" >'
	       	.'<a href="'
	       	.$news_array["articles"][$i]["url"]
	       	.'">'
	       	.'<div class="test"><img  src="'
	       	.$news_array["articles"][$i]["urlToImage"]
		       	.'" alt="" width=480 height=480/></a></div>'
		       	.'<div class="text_aling"><h2>'.$news_array['articles'][$i]['title']
		       	."</h2><br><br>"
		       	.'<h5>'
		       	.$news_array['articles'][$i]['description']
		       	.'</h5>'
		       	.'<label class="text"><br><br> Author: '
		       	.$news_array['articles'][$i]['author']
		       	.',<br><br>Date: '.$news_array['articles'][$i]['publishedAt']
		       	.'</label>'
		       	.'</div></div>';
		}
	}
 ?>
</div>
 </html>
<?php include 'header.php' ; ?> 
<!DOCTYPE html>
<html>

<head>

<style>
select{

	padding:10px;
	margin:1.5px auto;
	width:90%;
	margin-left:5%;
	background-color:rgb(9, 47, 76);
	color:white;
	font-size:20px;
	box-radius:15px;
	text-align:center;
	padding-left:50px;
	
}

#main{

		background-color:rgba(9, 47, 76,0.5);
		height:100%;
}
</style>

	<title></title>
	<link rel="stylesheet" type="text/css" href="api.css">
	
</head>
<body id="main">

		<select name="value" class="hello" onchange="autoupdate(this.value)" >
			<option value="1">Select News</option>
			<option value="google-news-in">GOOGLE NEWS INDIA</option>
			<option value="bbc-news">BBC NEWS</option>
			<option value="cbc-news">CBC NEWS</option>
			<option value="hacker-news"> HACKER NEWS</option>
			<option value="abc-news"> ABC NEWS</option>
			<option value="cbs-news"> CBS NEWS</option>
			<option value="cnn"> CNN NEWS</option>
			<option value="crypto-coins-news"> Cryptocurrency NEWS</option>
			<option value="fox-news"> FOX NEWS</option>
			<option value="entertainment-weekly"> Entertainment NEWS</option>
			<option value="daily-mail"> Daily Mail</option>
			<option value="news24"> NEWS 24</option>
			<option value="the-new-york-times"> THE NEW YORK TIMES</option>
			<option value="the-hindu"> THE HINDU</option>
			<option value="the-telegraph"> THE TELEGRAPH</option>
			<option value="the-times-of-india"> THE TIMES OF INDIA</option>
			<option value="the-washington-post"> THE WASHINGTON</option>

		</select>
		<script type="text/javascript" src="update.js">
			autoupdate(this.value);
		</script>

		<div id="news"></div>
</body>
</html>

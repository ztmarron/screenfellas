<?php

include_once("../../DatabaseConfig.php");

if(isset($_POST['post'])) {
	postArticle();
}

function postArticle() {
	global $db;
	
	$postTitle = $_POST['title'];
	$postAuthor = $_POST['author'];
	$postDate = date("Y-m-d");
	$postBody = nl2br($_POST['body']);
	$postChallenge = $_POST['challenge'];
	
	if(strcmp($postChallenge, "loveisthemaze") !== 0)
		return; // Unauthorized user of the system.
	
	$stmt = $db->prepare("INSERT INTO articles (name, author, date, content) VALUES (?, ?, ?, ?)");
	$stmt->bind_param("ssss", $postTitle, $postAuthor, $postDate, $postBody);
	$stmt->execute();
}

?>

<!DOCTYPE html>
<html>
	<head>
		<title>Movie and TV Analysis Podcasts and Media &middot; Screenfellas Entertainment</title>
		
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="Content-Language" content="en">
		
		<link href="/common/global.css" rel="stylesheet" type="text/css">
		<link href="content.css" rel="stylesheet" type="text/css">
		
		<link href="/common/favicon.png" rel="icon">
		<link href="/common/favicon-192.png" rel="icon" sizes="192x192" >
		<meta name="theme-color" content="#372f75">
	</head>
	<body>
		<a href="/" id="header-logo"><img src="/common/logo_full.png"></a>
		<h1>Write a Post</h1>
		<div class='contentbox'>
		<form method='post'>
			<input name="title" type='text' placeholder="Article Title">
			<input name="author" type='text' placeholder="Author Name">
			<textarea name='body' placeholder="Body"></textarea>
			<input name="challenge" type='text' placeholder="Challenge">
			<input name="post" type="submit" value="Post Article">
		</form>
		</div>
		<span id="copyright">2016 &copy; ScreenFellas Entertainment</span>
	</body>
</html>
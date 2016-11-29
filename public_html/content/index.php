<?php

include_once("../../DatabaseConfig.php");

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
		<h1>Articles and Content</h1>
		<?php
		
		$result = $db->query("SELECT * FROM articles ORDER BY id DESC");
		
		while($article = $result->fetch_assoc()) {
			echo "<div class='article'>";
			echo "<span class='article-title'>" . $article['name'] . "</span>";
			echo "<span class='article-author'>By " . $article['author'] . "</span>";
			echo "<span class='article-date'>" . date("F j, Y", strtotime($article['date'])) . "</span>";
			echo "<span class='article-content'>" . $article['content'] . "</span>";
			echo "</div>";
		}
		
		?>
		<span id="copyright">2016 &copy; ScreenFellas Entertainment</span>
	</body>
</html>
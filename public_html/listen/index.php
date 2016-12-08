<!DOCTYPE html>
<html>
	<head>
		<title>Movie and TV Analysis Podcasts and Media &middot; Screenfellas Entertainment</title>
		
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="Content-Language" content="en">
		
		<link href="/common/global.css" rel="stylesheet" type="text/css">
		<link href="listen.css" rel="stylesheet" type="text/css">
		
		<link href="/common/favicon.png" rel="icon">
		<link href="/common/favicon-192.png" rel="icon" sizes="192x192" >
		<meta name="theme-color" content="#372f75">
	</head>
	<body>
		<a href="/" id="header-logo"><img src="/common/logo_full.png"></a>
		<h1>Latest Episode</h1>
		<?php
		
		$rss = file_get_contents("http://feeds.soundcloud.com/users/soundcloud:users:59013185/sounds.rss");
		
		$xml = simplexml_load_string($rss);
		
		foreach($xml->channel->item as $podcast) {
			$title = $podcast->title[0];
			$date = date("F j, Y", strtotime($podcast->pubDate[0]));
			$link = $podcast->link;
			$summary = nl2br($podcast->description);
			
			echo "<div class='episode-full'>
				<span class='episode-title'>$title</span>
				<span class='episode-date'>$date</span>
				<a class='episode-sc' href='$link'>Listen on <span>SoundCloud</span></a>
				<div class='episode-desc'>$summary</div>
				</div>";
		}
		?>
		<span id="copyright">2016 &copy; ScreenFellas Entertainment</span>
	</body>
</html>
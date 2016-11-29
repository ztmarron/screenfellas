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
		
		$parser = xml_parser_create();
		xml_parse_into_struct($parser, $rss, $values, $index);
		xml_parser_free($parser);
		
		echo "<pre style='color: white'>";
		print_r($values);
		echo "</pre>";
		
		
		?>
		<!--<div class='episode-full'>
			<span class='episode-title'>ScreenFellas Podcast Episode 34: 'The Magnificent Seven' Review & Weekly TV Recap</span>
			<span class='episode-date'>September 24, 2016</span>
			<a class='episode-sc' href="https://soundcloud.com/screenfellas/screenfellas-podcast-episode-34-the-magnificent-seven-review-weekly-tv-recap">Listen on <span>SoundCloud</span></a>
			<div class='episode-desc'>
				<p>In this episode of the ScreenFellas Podcast Ozzy and Carlos:</p>
				<ul><li>Review 'Storks' (2:21)</li><li>Review 'The Magnificent Seven' (16:56)</li><li>Discuss the Western genre (39:06)</li><li>Recap this week in TV (49:24)</li></ul>
				<p>Thanks for the download and be sure to subscribe!</p>
			</div>
		</div>-->
		<span id="copyright">2016 &copy; ScreenFellas Entertainment</span>
	</body>
</html>
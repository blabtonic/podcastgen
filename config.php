<?php

	#################################################################
	# Podcast Generator
	# http://podcastgen.sourceforge.net
	# developed by Alberto Betella
	#
	# Config.php file created automatically - v.2.4


	$podcastgen_version = "2.4"; // Version

	$first_installation = 1422153868;
	
	$installationKey = "khyup97b";
	
	$scriptlang = "en_EN";

	$url = "http://localhost/podcastgen/"; // Complete URL of the script (Trailing slash REQUIRED)

	$absoluteurl = "/var/www/html/podcastgen/"; // Absolute path on the server (Trailing slash REQUIRED)

	$theme_path = "themes/syndicate/";

	$username = "dolkhound@gmx.com";

	$userpassword = "e00cf25ad42683b3df678c61f42c6bda";

	$max_upload_form_size = "104857600"; //e.g.: "30000000" (about 30MB)

	$upload_dir = "media/"; // "media/" the default folder (Trailing slash required). Set chmod 755

	$img_dir = "images/";  // (Trailing slash required). Set chmod 755

	$feed_dir = ""; // Where to create feed.xml (empty value = root directory). Set chmod 755

	$max_recent = 6; // How many file to show in the home page

	$recent_episode_in_feed = "All"; // How many file to show in the XML feed (1,2,5 etc.. or "All")

	$episodeperpage = 10;

	$enablestreaming = "yes"; // Enable mp3 streaming? ("yes" or "no")
	
	$enablesocialnetworks = array(1,1,1,); // Enable social networks integration? value 1 (true) or 0 (false) for each social network. Array order: Facebook, Twitter, G+

	$dateformat = "d-m-Y"; // d-m-Y OR m-d-Y OR Y-m-d 

	$freebox = "yes"; // enable freely customizable box

	$enablehelphints = "yes";

	$enablepgnewsinadmin = "yes";

	$strictfilenamepolicy = "yes"; // strictly rename files (just characters A to Z and numbers) 

	$categoriesenabled = "no";
	
	$cronAutoIndex = 1; //Auto Index New Episodes via Cron
	
	$cronAutoRegenerateRSS = 1; //Auto regenerate RSS via Cron
	
	$cronAutoRegenerateRSScacheTime = 21600; //Cache (in seconds)


	###################
	# XML Feed elements
	# The followings specifications will be included in your podcast "feed.xml" file.

	$feed_iTunes_LINKS_Website = "";

	$feed_URL_replace = "";

	$podcast_title = "Night of Champions";

	$podcast_subtitle = "One must fall";

	$podcast_description = "Small podcast where we talk about comics, video games and movies";

	$author_name = "Test"; 

	$author_email = "test@nospam.com"; 

	$itunes_category[0] = "Arts"; // iTunes categories (mainCategory:subcategory)
	$itunes_category[1] = "";
	$itunes_category[2] = "";

	$link = $url."?name="; // permalink URL of single episode (appears in the <link> and <guid> tags in the feed)

	$feed_language = "en_EN"; // Language used in the XML feed (can differ from the script language).

	$copyright = "don't steal from us"; // Copyright notice

	$feed_encoding = "utf-8"; // Feed Encoding (e.g. "iso-8859-1", "utf-8"). UTF-8 is strongly suggested

	$explicit_podcast = "yes"; //does your podcast contain explicit language? ("yes", "no" or "clean")

	// END OF CONFIGURATION

	?>
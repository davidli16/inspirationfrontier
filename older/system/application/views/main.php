<?php echo '<?xml version="1.0" encoding="UTF-8"?>' . "
"; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"
	"http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<title>inspiration frontier</title>
  <link rel="stylesheet" href="/css/reset.css" type="text/css" media="screen" />
  <link rel="stylesheet" href="/css/master.css" type="text/css" media="screen" />
	<script type="text/javascript" src="/js/jquery.js"></script>
	<script type="text/javascript" src="/js/master.js"></script>
</head>

<body>

	<div id="wrapper">
		<div id="header">
			<img src="/img/header.jpg" alt="inspiration frontier" />
		</div>
		<div id="body">
			
			<div id="mainBox" class="clear">
				<ul>
					<li id="blog"><a href="/blog/" class="hover"><span>...you could <strong>read minds</strong></a></span></span></li>
					<li id="designs"><a href="/designs/" class="hover"><span>...you could <strong>time travel</strong></span></a></li>
					<li id="projects"><a href="/projects/" class="hover"><span>...you could <strong>create change</strong></span></a></li>
					<li id="apps"><a href="/apps/" class="hover"><span>...you could <strong>break paradigms</strong></span></a></li>
				</ul>
			</div>

			<div id="content">
				<div id="leftBox" class="columnBox left">
					<h1>latest posts</h1>
					<ul>
						<li>a commentary on design</li>
						<li>enhanced window management techniques</li>
					</ul>
				</div>
	
				<div id="middleBox" class="columnBox left">
					<h1>recent works</h1>
					<ul>
						<li>a commentary on design</li>
						<li>enhanced window management techniques</li>
					</ul>
				</div>
	
				<div id="rightBox" class="columnBox left">
					<h1>activity feed</h1>
					<ul>
						<li>a commentary on design</li>
						<li>enhanced window management techniques</li>
					</ul>
				</div>
			</div>
			<div class="clear"></div>
			
		</div>
	</div>
	
	<div id="footer">
		<div id="menu">
			<ul id="left">
				<li><img src="/img/menu-left.jpg" class="collapse" /></li>
				<li><a href="/"<? if(!$this->uri->segment(1)): ?> class="selected"<? endif; ?>>home</a></li>
				<li><a href="/blog/"<? if($this->uri->segment(1) == "blog"): ?> class="selected"<? endif; ?>>blog</a></li>
				<li><a href="/porfolio/">portfolio</a></li>
			</ul>
			<ul id="right">
				<li><img src="/img/menu-right.jpg" class="collapse" /></li>
				<li><a href="/rss/"><img src="/img/menu-rss.jpg" alt="RSS" /</a></li>
				<li><a href="/profile/contact/">contact</a></li>
				<li><a href="/profile/">profile</a></li>
			</ul>
		</div>
		<div id="toolbar">
			<div id="services">
				<h2>Find me on</h2>
				<ul>
					<li><a href="http://www.facebook.com/"><img src="http://www.facebook.com/favicon.ico" alt="Facebook" />Facebook</a></li>
					<li><a href="http://www.flickr.com/people/47488879@N00/"><img src="http://www.flickr.com/favicon.ico" alt="Flickr" />Flickr</a></li>
					<li><a href="http://www.last.fm/user/Ghiblian/"><img src="http://www.last.fm/favicon.ico" alt="Last.fm" />Last.fm</a></li>
					<li><a href="http://www.linkedin.com/pub/8/3a9/879"><img src="http://www.linkedin.com/favicon.ico" alt="LinkedIn" />LinkedIn</a></li>
					<li><a href="http://www.google.com/reader/shared/00785655657189707734"><img src="http://www.google.com/reader/ui/favicon.ico" alt="Google Reader" />Reader</a></li>
					<li><a href="http://twitter.com/Ghiblian"><img src="http://www.twitter.com/favicon.ico" alt="Twitter" />Twitter</a></li>
				</ul>
			</div>
			<img src="/img/toolbar-profile.jpg" alt="--" />
			<img src="/img/toolbar-separator.jpg" alt="|" />
		</div>
	</div>

</body>
</html>
<?php echo '<?xml version="1.0" encoding="UTF-8"?>' . "
"; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"
	"http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<title>inspiration frontier</title>
  <link rel="stylesheet" href="/css/master.css" type="text/css" media="screen" />
  <link rel="stylesheet" href="/css/reset.css" type="text/css" media="screen" />
	<script type="text/javascript" src="/js/jquery.js"></script>
</head>

<body>

	<div id="wrapper">
		<div class="container">
			<div id="menu">
				<ul id="left">
					<li><a href="/"<? if(!$this->uri->segment(1)): ?> class="selected"<? endif; ?>>home</a></li>
					<li><a href="/blog/"<? if($this->uri->segment(1) == "blog"): ?> class="selected"<? endif; ?>>blog</a></li>
					<li><a href="/porfolio/">portfolio</a></li>
				</ul>
				<ul id="right">
					<li><a href="/profile/contact/">contact</a></li>
					<li><a href="/profile/">profile</a></li>
				</ul>
			</div>
			
			<div id="header">
				<img src="/img/slogan.png" alt="What if...?" />
			</div>
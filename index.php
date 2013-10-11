<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />	
	<link href='http://fonts.googleapis.com/css?family=Ubuntu:300,400,500,700' rel='stylesheet' type='text/css'>
	<link href="http://www.ericwenn.se/css/basic.css" rel="stylesheet">
	<script src="http://code.jquery.com/jquery-2.0.3.min.js"></script>
	<script src="http://www.ericwenn.se/js/basic.js"></script>
	<meta name="description" content="A smooth scrolling effect inspired by Google+ Android app.">
	<meta name="twitter:card" content="summary">
	<meta name="twitter:site" content="@ericwenn">
	<meta name="twitter:creator" content="@ericwenn">
	<meta name="twitter:title" content="Smooth scrolling effect á la Google">
	<meta name="twitter:description" content="A smooth scrolling effect inspired by Google+ Android app.">
	<title>Smooth scrolling effect á la Google - Eric Wennerberg</title>
	<link href="http://www.ericwenn.se/frameworks/css/frameworks.css" rel="stylesheet">
	<script src="http://www.ericwenn.se/frameworks/js/frameworks.js"></script>
	<script src="http://ericwenn.se/google-code-prettify/run_prettify.js"></script>
</head>
<body>
<?php
include('/home/u/u0056300/www/ericwenn/php/basic/header.php');
?>
<article id="content">
<section class="wrapper-m flex-center">
<h1>Smooth scrolling effect á la Google</h1>
<p>Heavily inspired by the effect Google+ app for Android uses when scrolling.</p>
<div class="share-bar flex-center">
<div class="g-plus" data-action="share" data-annotation="bubble"></div><a href="https://twitter.com/share" data-url="http://bit.ly/GAKGUA" data-text="Smooth scrolling effect á la Google" class="twitter-share-button" data-via="ericwenn" data-lang="en">Tweet</a>
</div>
</section>
<section class="wrapper-m flex-center">
<a href="demo.php" class="nostyle"><button>View Demo</button></a>
</section>
<section class="wrapper-m article">
	<p>
	First of all, this plugin is based on Chris Coyier's <a href="http://css-tricks.com/slide-in-as-you-scroll-down-boxes/" class="inline-style">article</a> and Design Fusion's <a href="http://www.teamdf.com/web/jquery-element-onscreen-visibility/194/" class="inline-style"><span>visible plugin</span></a>. Kudos.
	</p>
	<p>For an explanation of the code, check out those links.</p>
</section>
<section class="wrapper-m">
	<p>To use this plugin, include this script:</p>
	<pre><code class="prettyprint">&lt;script src=&quot;http://www.ericwenn.se/playground/pullupscroll/pullup.js&quot;&gt;&lt;/script&gt;</code></pre>
	<p>And then initiate it with this code</p>
	<pre><code class="prettyprint">$(&quot;#content&quot;).pullupScroll('.box');</code></pre>
	<p>Where <code class="prettyprint">#content</code> is the container and <code class="prettyprint">.box</code> is the box the effect should be applied to.</p>
</section>
</article>
</body>
</html>
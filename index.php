<!DOCTYPE html>
<!--[if lt IE 7]> <html xmlns="http://www.w3.org/1999/xhtml" xmlns:og="http://ogp.me/ns#" xmlns:fb="http://www.facebook.com/2008/fbml" class="lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]> <html xmlns="http://www.w3.org/1999/xhtml" xmlns:og="http://ogp.me/ns#" xmlns:fb="http://www.facebook.com/2008/fbml" class="lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]> <html xmlns="http://www.w3.org/1999/xhtml" xmlns:og="http://ogp.me/ns#" xmlns:fb="http://www.facebook.com/2008/fbml" class="lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html xmlns="http://www.w3.org/1999/xhtml" xmlns:og="http://ogp.me/ns#" xmlns:fb="http://www.facebook.com/2008/fbml"> <!--<![endif]-->

<head>
	<meta charset="utf-8" />
	
	<title>Feedly Bookmarklet - Easily Subscribe to RSS Feeds in Feedly</title>
	
	<meta name="description" content="Feedly Bookmarklet allows you to easily add RSS subscriptions to Feedly with just one click." />
	<meta name="viewport" content="target-densityDpi=device-dpi, width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />
		
	<meta property="og:title" content="Easily Subscribe to RSS Feeds in Feedly"/>
	<meta property="og:type" content="website"/>
	<meta property="og:url" content="http://feedlybookmarklet.com"/>
	<meta property="og:image" content="<?php echo $_SERVER['HTTP_HOST'] ?>/img/feedlybookmarklet.jpg"/>
	<meta property="og:site_name" content="Feedly Bookmarklet"/>
	<meta property="fb:admins" content="100001783406456"/>
	<meta property="og:description" content="Feedly Bookmarklet allows you to easily add RSS subscriptions to Feedly with just one click."/>

	<meta name="twitter:card" content="summary" />
	<meta name="twitter:url" content="http://feedlybookmarklet.com" />
	<meta name="twitter:title" content="Feedly Bookmarklet" />
	<meta name="twitter:description" content="Feedly Bookmarklet allows you to easily add RSS subscriptions to Feedly with just one click." />
	<meta name="twitter:image" content="<?php echo $_SERVER['HTTP_HOST'] ?>/img/feedlybookmarklet.jpg" />
	<meta name="twitter:site" content="@seb2point0" />
	<meta name="twitter:creator" content="@seb2point0" />
	
	<link rel="shorturl" href="http://twi.tl/1ecCh5Q" />
	
	<link rel="stylesheet" href="css/main.css" />

	<!--[if lt IE 9]> <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script> <![endif]-->
</head>
<body>
	
	<header>
		<h1>Feedly Bookmarklet</h1>
	</header>
	
	<main>
		<section id="presentation">		
			<section class="bookmarklet">
				<h3>Easily subscribe to RSS<br />feeds in Feedly</h3>
				<a href="javascript:void((function(d){var i='__F_WIDGET';if(d.getElementById(i)) return false;var w=d.createElement('div'),s=d.createElement('script');w.setAttribute('id',i);s.setAttribute('src','http://feedlybookmarklet.com/f.js');   	d.body.appendChild(w).appendChild(s);})(document));" data-text="Drag to bookmarks"><span>Add to Feedly</span></a>
				<small>Drag the link above into your bookmarks bar</small>
			</section>
			<section id="howto">
				<div class="ui"></div>
				<div class="pulse"></div>
				<div class="arrow"></div>
				<div class="button"></div>
			</section>
		</section>
		
		<section id="social">
			<h4>Be nice, share!</h4>
			<ul>
				<li><a class="facebook" target="_blank" href="https://www.facebook.com/sharer/sharer.php?=<?php echo $_SERVER['PHP_SELF'] ?>" onclick="javascript:window.open(this.href, 'facebook-share-dialog', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,width=626,height=436');return false;">Facebook</a></li>
				<li><a class="twitter" target="_blank" href="http://twitter.com/share?url=http://twi.tl/1ecCh5Q" onclick="javascript:window.open(this.href,'twitter-share-dialog', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=470,width=600');return false;">Twitter</a></li>
				<li><a class="gplus" target="_blank" href="https://plus.google.com/share?url=<?php echo $_SERVER['PHP_SELF'] ?>" onclick="javascript:window.open(this.href,'gplus-share-dialog', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;">Google+</a></li>
				<li><a class="github" target="_blank" href="https://github.com/scouture/feedlybookmarklet">Github</a></li>
			</ul>
		</section>
	
	</main>
	
	<aside>
		<section>
			<h4>Main features</h4>
			<ul>
				<li>Easy to install, simply drag the bookmarklet to your bookmarks bar</li>
				<li>Works on any website or blog with an RSS feed</li>
				<li>Detects multiple feeds such as the site's primary feed, the comments feed, tag feeds, category feeds, etc</li>
				<li>Works in all modern browsers</li>
			</ul>
		</section>
		<section>
			<h4>Todo</h4>
			<ul>
				<li>Add the ability to send content to <em>Save For Later</em> list</li>
			</ul>
		</section>
		<section>
			<h4>Comments/Feedback</h4>
			<p>Got something to say about Feedly Bookmarklet, found a bug or want to suggest a feature? Let me know on Twitter <a href="http://twitter.com/seb2point0" target="_blank">@seb2point0</a> or say it in the comments.</p>
			<div id="disqus_thread"></div>
			<script type="text/javascript">
			    var disqus_shortname = 'feedlybookmarklet';
			
			    (function() {
			        var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
			        dsq.src = '//' + disqus_shortname + '.disqus.com/embed.js';
			        (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
			    })();
			</script>
			<noscript>Please enable JavaScript to view the <a href="http://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>  
		</section>
	</aside>
	
	<footer>
			<p>Add to Feedly Bookmarklet is a Creative Commons project (<a href="http://creativecommons.org/licenses/by/3.0/deed.en_US" target="_blank">Attribution 3.0 Unported </a>) by <a href="http://sebastiencouture.com" target="_blank">Sébastien Couture</a> and is in no way affiliated with Feedly. It was inspired by <a href="http://www.labnol.org/software/rss-extensions-bookmarklets/27929/" target="_blank">Amit Agarwal'a  Feedly bookmarklet</a>. The how-to animation is inspired by <a href="https://twitter.com/MalteWassermann" target="_blank">@MalteWassermann</a>'s <a href="http://lab.maltewassermann.com/viewport-resizer/" target="_blank">Viewport Resizer</a>, an awesome tool for testing responsive sites in your browser.</p>
	</footer>

	<script src="js/main.js"></script>
	
</body>
</html>
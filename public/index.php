<?php 

require_once __DIR__ . '/../app.php';

?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<title>Flavio De Stefano - kopiro - Portfolio</title>

	<meta name="robots" content="index, follow"/>
	<meta name="description" content="Software developer for passion, music and photography enthusiast."/>
	<meta name="author" content="Flavio De Stefano">

	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">

	<!--[if IE]><script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->

	<script type="text/javascript">
		var _gaq = _gaq || [];
		_gaq.push(['_setAccount', 'UA-20966409-1']);
		_gaq.push(['_trackPageview']);
		(function() {
			var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
			ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
			var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		})();
	</script>

	<link href="/bundle.css" rel="stylesheet" />
	<script async src="/bundle.js"></script>

</head>
<body>

	<h1 id="title">kopiro</h1>

	<section id="moved">

		<ul id="social-icons">
			<li><a target="_blank" rel="noopener" href="/mail">Mail</a></li>
			<li>|</li> 
			<li><a target="_blank" rel="noopener" href="/github">Github</a></li>
			<li><a target="_blank" rel="noopener" href="/linkedin">Linkedin</a></li>
			<li><a target="_blank" rel="noopener" href="/stackoverflow">Stackoverflow</a></li>
			<li>|</li> 
			<li><a target="_blank" rel="noopener" href="/medium">Medium</a></li>
			<li><a target="_blank" rel="noopener" href="/twitter">Twitter</a></li>
			<li><a target="_blank" rel="noopener" href="/facebook">Facebook</a></li>
			<li><a target="_blank" rel="noopener" href="/500px">500px</a></li>
		</ul>

		<div id="intro">
			<p>Hello, I'm <b>Flavio De Stefano</b>, alias <b>kopiro</b>.</p>
			<p>I studied computer engineering and I'm currently a Backend and Mobile coordinator for Caffeina in Parma, Italy.<br/>I started to learn how to code at 16 (C, C++ and .NET), and soon it became my passion, not just my work.</p>
			<p>I started as full-stack developer using PHP + classical web techs as main technologies.<br/>
			After that, I specialized building API using Laravel and making some experience with NodeJS applications.<br/>
			Using MySQL for DBMS most of the time, I have also Oracle and MongoDB knowledge.</p>
			<p>For mobile apps, I started to learn Titanium since 3.x release, becoming a core contributor of this awesome framework.</p>
			<p>I usally build project with security in mind and I do a full pen-testing; in the free time I usally play CTF competitions.</p>
			<p>I actively contribute to open source projects, view <a href="https://github.com/kopiro?tab=activity" target="_blank">my public activity</a>.</p>
			<p><i>I believe that one of the greatest satisfactions in this life is to create something on your own,<br>and my best way to do so is by coding.</i></p>
		</div>

		<hr/>

		<div id="repos" class="section">
			<h3>Personal open source projects</h3>
			<ul>
				<?php foreach (get_repos() as $r) : ?>
					<li><a target="_blank" rel="noopener" href="<?= $r->link ?>"><?= $r->name ?></a> - <i><?= $r->description ?></i></li>
				<?php endforeach; ?>
			</ul>
		</div>

		<div id="posts" class="section">
			<h3>Press</h3>
			<ul>
				<?php foreach (get_medium_posts() as $r) : ?>
					<li><a target="_blank" rel="noopener" href="<?= $r->link ?>"><?= $r->name ?></a> - <i><?= $r->date ?></i></li>
				<?php endforeach; ?>
			</ul>
		</div>

		<div id="carepos" class="section">
			<h3>Caffeina Open source projects</h3>
			<ul>
				<?php foreach (get_ca_repos() as $r) : ?>
					<li><a target="_blank" rel="noopener" href="<?= $r->link ?>"><?= $r->name ?></a> - <i><?= $r->description ?></i></li>
				<?php endforeach; ?>
			</ul>
		</div>

		<div id="projects" class="section">
			<h3>Personal projects</h3>
			<ul>
				<li><a target="_blank" rel="noopener" href="http://ilpaesaggiodellabonifica.it">Il Paesaggio della Bonifica</a> - <i>2014</i></li>
				<li><a target="_blank" rel="noopener" href="http://ecruarchitetti.it">écru architetti</a> - <i>2014</i></li>
			</ul>
		</div>

		<div id="projects" class="section">
			<h3>Side projects</h3>
			<p>Just for fun, don't rely on this</p>
			<ul>
				<li><a target="_blank" rel="noopener" href="http://bbyn.apps.kopiro.it">Breaking-badize your name</a></li>
				<li><a target="_blank" rel="noopener" href="http://intersect.apps.kopiro.it">Intersect</a></li>
				<li><a target="_blank" rel="noopener" href="http://25hours.apps.kopiro.it">25 hours</a></li>
			</ul>
		</div>

		<div id="tweets" class="section">
			<h3>Latest</h3>
			<ul style="list-style: bullet">
				<?php foreach (get_tweets() as $r) : ?>
					<li><?= $r->text ?> - <i><?= $r->date ?></i> - <a target="_blank" rel="noopener" href="<?= $r->link ?>">link</a></li>
				<?php endforeach; ?>
			</ul>
		</div>

		<footer id="footer">
			<div><a target="_blank" rel="noopener" href="https://pgp.mit.edu/pks/lookup?op=get&search=0xEDE51005D982268E">GPG Key (0xEDE51005D982268E)</a></div>
		</footer>

	</section>

</body>
</html>

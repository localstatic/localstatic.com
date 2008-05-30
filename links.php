<?php
$page_title = 'Links';

include 'tmpl/head.php';
?>

<div>
	<p>I use this page as my browsers' home page. It is designed accordingly.</p>
	
	<div class="column">
		<h4>News</h4>
		<ul>
			<li><a href="http://reader.google.com/">Google Reader</a></li>
			<li><a href="https://beta.bloglines.com/">Bloglines Beta</a></li>
			<li><a href="http://reddit.com/">reddit</a></li>
			<li><a href="http://slashdot.org/">Slashdot</a></li>
			<li><a href="http://digg.com/">digg</a></li>
		</ul>
		
		<h4>Music</h4>
		<ul>
			<li><a href="http://www.pandora.com/">Pandora</a></li>
			<li><a href="http://music.yahoo.com/launchcast/station.asp?u=316190019">Launch (localstatic)</a></li>
			<li><a href="http://music.yahoo.com/launchcast/station.asp?u=1424614547">Launch (zombie-m)</a></li>
			<li><a href="http://www.last.fm/user/localstatic/">Last.fm</a></li>
		</ul>
	</div> <!-- /column -->
	
	<div class="column">
		<h4>Devel Docs</h4>
		<ul>
			<li><a href="http://www.php.net/manual/en/langref.php">PHP Manual</a></li>
			<li><a href="http://dev.mysql.com/doc/mysql/en/index.html">MySQL Manual</a></li>
			<li><a href="http://www.php.net/pdo">PHP PDO</a></li>
			<li><a href="http://www.w3.org/TR/html401/">HTML 4.01</a></li>
			<li><a href="http://www.w3.org/TR/xhtml1/">XHTML 1.0</a></li>
			<li><a href="http://www.w3.org/TR/REC-CSS2/">CSS 2</a></li>
			<li><a href="http://java.sun.com/j2se/1.5.0/docs/api/">Java API</a></li>
		</ul>
	</div> <!-- /column -->
	
	<div class="column">
		<h4>Social</h4>
		<ul>
			<li><a href="http://del.icio.us/localstatic">del.icio.us</a></li>
			<li><a href="http://steamcommunity.com/profiles/76561197991347345">Steam</a></li>
		</ul>
	</div> <!-- /column -->
</div>

<div id="search">
	<form method="get" action="http://www.google.com/search">
		<a href="http://www.google.com/"><img src="images/google_25wht.png" border="0" alt="Google" align="middle" width="75" height="32" /></a>
		<input type="text" name="q" size="25" maxlength="255" value="" />
		<input type="submit" name="btnG" value="Go" />
	</form>
</div> <!-- /search -->

<?php
include 'tmpl/foot.php';
?>



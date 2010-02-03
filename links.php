<?php
$page_title = 'Links';

include 'tmpl/head.php';
?>

<div>
	<p>I use this page as my browsers' home page. It is designed accordingly.</p>
	
	<div class="column">
		<h4>News</h4>
		<ul>
			<li><a href="https://www.google.com/reader/view/">Google Reader</a></li>
			<li><a href="http://reddit.com/">reddit</a></li>
			<li><a href="http://slashdot.org/">Slashdot</a></li>
		</ul>

		<h4>Finance</h4>
		<ul>
			<li><a href="http://finance.google.com/finance">Google</a></li>
			<li><a href="http://finance.yahoo.com/">Yahoo</a></li>
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
			<li><a href="http://www.w3.org/TR/CSS21/">CSS 2</a></li>
			<li><a href="http://msdn.microsoft.com/en-us/library/aa155110.aspx">MS HTML/CSS</a></li>
			<li><a href="http://docs.jquery.com/Main_Page">jQuery</a></li>
			<li><a href="http://www.framework.zend.com/manual/en/">Zend Framework</a></li>
			<li><a href="http://java.sun.com/j2se/1.5.0/docs/api/">Java API</a></li>
		</ul>
	</div> <!-- /column -->
	
	<div class="column">
		<h4>Music</h4>
		<ul>
			<li><a href="http://www.pandora.com/">Pandora</a></li>
			<li><a href="http://www.last.fm/user/localstatic/">Last.fm</a></li>
		</ul>

		<h4>Social</h4>
		<ul>
			<li><a href="http://del.icio.us/localstatic">del.icio.us</a></li>
			<li><a href="http://steamcommunity.com/profiles/76561197991347345">Steam</a></li>
			<li><a href="http://www.shelfari.com/o1517871079">Shelfari</a></li>
			<li><a href="http://user.gdgt.com/localstatic/">Gdgt</a></li>
            <li><a href="http://www.facebook.com/profile.php?id=100000347252115&amp;ref=name">Facebook</a></li>
		</ul>
	</div> <!-- /column -->

	<div class="column">
		<h4>Misc</h4>
		<ul>
			<li><a href="http://my.ebay.com/">My eBay</a></li>
			<li><a href="http://maps.google.com/">Google Maps</a></li>
			<li><a href="https://www.google.com/voice">Google Voice</a></li>
			<li><a href="https://wave.google.com/wave/">Google Wave</a></li>
			<li><a href="http://badgerandblade.com/">B&amp;B</a></li>
		</ul>
	</div> <!-- /column -->
</div>

<div id="search">
	<div style="width: 80px; float: left;">
		<a href="http://www.google.com/"><img src="images/google_25wht.png" style="border: 0; width: 75px; height: 32px;" alt="Google" /></a>
	</div>
	<form method="get" action="http://www.google.com/search" style="float: left;">
		<fieldset style="border: 0; padding: 0;">
			<input type="text" name="q" size="25" maxlength="255" value="" />
			<input type="submit" name="btnG" value="Go" />
		</fieldset>
	</form>
</div> <!-- /search -->

<?php
include 'tmpl/foot.php';
?>



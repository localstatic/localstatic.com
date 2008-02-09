<?php
$page_title = 'Geocaching';

include 'tmpl/head.php';
?>

<h3>Introduction</h3>

<p>I first heard about Geocaching on <a href="http://slashdot.org/article.pl?sid=00/09/25/2030252">Slashdot</a> and have been caching off and on ever since. It's quite fun when I'm out hiking anyway to grab a list of caches in the area and try to find them while I'm up in the mountains.</p>
<p>If you are wondering what exactly Geocaching is, check out the <a href="http://www.geocaching.com/faq.asp">FAQ</a>.</p>

<h3>My Caching Info</h3>

<p>My current stats are:<br>
<a href="http://www.geocaching.com/profile/?guid=355b0b16-6571-463a-9a1e-b7287e5dc93e" target="_blank"><img src="http://img.geocaching.com/stats/img.aspx?txt=Let's+go+geocaching&uid=355b0b16-6571-463a-9a1e-b7287e5dc93e&bg=2" border="0" title="Profile for localstatic" alt="Profile for localstatic"></a></p>
<p>I use a <a href="http://www.garmin.com/products/etrexLegend/">Garmin eTrex Legend</a>, along with my <a href="http://www.handspring.com/">Handspring</a> Visor.</p>

<h3>Geocaching and Linux</h3>

<p>I started writing a script to convert the .loc files downloaded from <a href="http://www.geocaching.com/">geocaching.com</a> into a format that I could upload to my GPSr from my Linux box, but due to my limited understanding of the Perl XML stuff at the time, it never worked well. It required a fair amount of coddling to get the files to go through it properly. Fortunately, I was able to find a program to do exactly what I was trying to do. As a result, I abandoned my own project and now just use the excellent <a href="http://gpsbabel.sourceforge.net/">gpsbabel</a>. It can read the .loc files and upload the waypoints to my GPSr, or write them to a file in any number of formats. Very nice.</p>
<p>I wrote a perl script to download the cache descriptions to my Handspring Visor. I'm not releasing it here, because now that the Geocaching site has pocket queries available, I don't think they like such things circulating the 'net. I can't really justify spending the money to subscribe, given the low frequency of my Geocaching excursions. If you ask me really nicely though, I may be persuaded to send the script to you.</p>
<p>I currently copy the information from the cache pages (from the script mentioned above) into memos on my Palm PDA. I have some intermittent motivation to work on a PalmOS program to help keep track of caches when I go out. I have a partially finished version of it that really isn't functional. Some day I will probably finish it. If you're interested, let me know. It'll get done sooner if I think it will help out others.</p>
<p>Aside from the basics of Geocaching and Linux, there are a variety of other GPS programs available for Linux, but since I don't take my laptop with me when I'm Geocaching, I haven't used them very extensively. <a href="http://www.spainhour.com/geocaching/">bart's page o' geocaching</a> has a good compilation of links if you're interested.</p>

<h3>Geocaching Links</h3>

<ul>
	<li><a href="http://www.geocaching.com/">Geocaching.com</a> - The official site</li>
	<li><a href="http://forums.groundspeak.com/GC/">Geocaching Forums</a></li>
	<li><a href="http://www.clayjar.com/gcrs/">Geocache Rating System</a> - For rating caches that you're placing</li>
	<li><a href="http://www.cachunuts.com/">Utah Cache Games</a></li>
	<li><a href="http://gpsbabel.sourceforge.net/">GPSBabel</a> - Nice for loading waypoints to a GPSr</li>
	<li><a href="http://toadstool.se/hacks/geotoad/">GeoToad</a> - Can download caches to a lot of different formats</li>
</ul>

<p><a href="http://www.geocaching.com/"><img src="images/geocaching.png" alt="Let's Go Geocaching" border="0" width="88" height="31" /></a></p>

<?php
include 'tmpl/foot.php';
?>


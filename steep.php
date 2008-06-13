<?php
$page_title = 'Steep';

include 'tmpl/head.php';
?>
<h2>Steep</h2>
<p>
Steep is a tea timer application written in Python &amp; using PyGTK and Glade for the GUI. I wrote it so that I could use the same program on Linux and Windows. It runs on both platforms, assuming the prerequisites are installed. It likely will run on other platforms as well, but I have not tested this.
</p>

<h3>To Do</h3>
<p>
The program works decently now, but there are some things that I will be adding to bring it to the point that it fulfills my needs better:
</p>
<ul>
	<li>User-configurable timers</li>
	<li>User-configurable "finished" message</li>
	<li>Optionally play a sound when finished</li>
</ul>

<h3>Requirements</h3>
<ul>
	<li>Python</li>
	<li>python-gtk2</li>
	<li>python-glade</li>
</ul>

<h3>Download</h3>
<p>
<a href="files/steep.tgz">Download</a>
</p>

<?php
include 'tmpl/foot.php';
?>

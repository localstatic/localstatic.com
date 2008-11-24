<?php
$page_title = 'Steep';

include 'tmpl/head.php';
?>
<h2>Steep</h2>

<div style="width: 250px; float: right">
	<img src="images/screenshot-steep.png" width="243" height="201" style="margin: 5px;"/>
	<img src="images/screenshot-steep-running.png" width="243" height="201" style="margin: 5px;"/>
</div>

<p>
Steep is a tea timer application written in Python &amp; using PyGTK and Glade for the GUI. I wrote it so that I could use the same program on Linux and Windows. It runs on both platforms, assuming the prerequisites are installed. It likely will run on other platforms as well, but I have not tested this.
</p>

<h3>Features</h3>
<ul>
	<li>User-configurable timers</li>
	<li>User-configurable "finished" message</li>
	<li>Optionally play a sound when finished</li>
</ul>

<h3>To Do</h3>
<p>
The program works decently now, but there are some things that I will be adding to bring it to the point that it fulfills my needs better:
</p>
<ul>
	<li>Sorting of timers list</li>
</ul>

<h3>Requirements</h3>
<ul>
	<li>Python</li>
	<li>python-gtk2</li>
	<li>python-glade</li>
</ul>

<h3>Download</h3>
<p>
<a href="files/steep.tar.gz">Download</a>
</p>

<h3>License</h3>
<p>The MIT License</p>
<p>Copyright (c) 2008 Morgan Terry</p>
<p>Permission is hereby granted, free of charge, to any person obtaining a copy<br>
of this software and associated documentation files (the "Software"), to deal<br>
in the Software without restriction, including without limitation the rights<br>
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell<br>

copies of the Software, and to permit persons to whom the Software is<br>
furnished to do so, subject to the following conditions:</p>
<p>The above copyright notice and this permission notice shall be included in<br>
all copies or substantial portions of the Software.</p>
<p>THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR<br>
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,<br>
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT.  IN NO EVENT SHALL THE<br>
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER<br>
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,<br>

OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN<br>
THE SOFTWARE.</p>

<?php
include 'tmpl/foot.php';
?>

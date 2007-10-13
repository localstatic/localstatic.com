<?php
$page_title = 'nForce2 and Linux';

include 'tmpl/head.php';
?>

<h2>nForce2 and Linux</h2>
<h3>Introduction</h3>
<p>
If you've come here, you may be considering getting an nVidia nForce2-based motherboard. I put a lot of thought (and research) into the decision of which motherboard to get. At first, I was really nervous about getting an nForce2 motherboard, since Linux compatibility is a must for me. If it doesn't work well with Linux, it's next to useless for me.
</p><p>
When I began researching the nForce2 chipset, I was finding a ton of pages talking about the problems that people were having. It almost scared me away to a Via-based board. I really wanted to find some nForce2/Linux success stories, but at first, I couldn't. You may be in the same situation now. This page is my attempt to ease those fears and put another success story out there for people to see when researching this combination. I'll also include some of the more helpful pages I found while searching, since they generally didn't come up in my early searches.
</p><p>
The board I ended up getting was the Asus A7N8X-X. I got a AMD Athlon XP 3200+ and 512MB of Corsair Value Select RAM to go with it, in case you're interested. The motherboard has integrated LAN and Sound, both of which seem to work fine. I haven't tested the LAN much yet, though. Sound works well with ALSA. I have not tried OSS since I plan to use ALSA now that it is the "standard" sound system for Linux.
</p><p>
I'm using kernel version 2.6.9 as of this writing. This board is supported by later 2.6.x kernels. Trying to use 2.4 is just asking for trouble, from what I have been able to determine. Grab the latest stable 2.6 kernel and you should be fine.
</p><p>
My system has been running quite well for a couple of months now. I haven't had a single lock-up or noticeable instability. I haven't had to use any extra kernel parameters. If you're considering this chipset and are worried about it, I would say don't be. My experience tells me that the problems that have been so widely talked about have been fixed in the 2.6 kernel.
</p>
<h3>Links</h3>
<ul>
 <li><a href="http://www.wlug.org.nz/NForce2Notes">nForce 2 Notes</a> from the WLUG Wiki</li>
</ul>

<?php
include 'tmpl/foot.php';
?>

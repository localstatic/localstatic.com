<?php
$page_title = 'Linux on Toshiba Satellite 2100CDT';

include 'tmpl/head.php';
?>

<h2>Linux on Toshiba Satellite 2100CDT</h2>

<p>These pages document my experiences with installing Linux on my old Toshiba Satellite 2100CDT that I got back in February 2000. I no longer have the machine, but for the whole time I did, it was running Linux. The information here is now out-of-date (old distributions, etc), but I'm leaving it up in hopes that it might still be useful to someone.</p>
<p>In some of these pages, you'll notice that I've had problems getting PCMCIA to work properly. It worked fine with FreeBSD, and with the old stand-alone Linux PCMCIA drivers. It would not, however, work with the kernel PCMCIA drivers. I have since discovered, through experimentation and tips from readers of this site, that there is a BIOS option that you can change to get the Linux kernel PCMCIA stuff to work. Changing the "PC Card" setting to "Cardbus / 16-bit" solves the problem. The other two options ("PCIC Compatible" and "Auto") cause the system to lock up when trying to initialize the PCMCIA card services.</p>

<p>
<a href="linux-laptop-slackware">Slackware</a> - This was one of my first installs on this machine.<br />
<a href="linux-laptop-redhat">RedHat</a> - I had to revisit my first distribution. The installation has come quite far since then.<br />
<a href="linux-laptop-debian">Debian</a> - This is my favorite distribution, and the one that I run on my primary machine.
</p>

<?php
include 'tmpl/foot.php';
?>

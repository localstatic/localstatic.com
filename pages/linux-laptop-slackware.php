<?php
$page_title = 'Slackware on Toshiba Satellite 2100CDT';
?>

 <h2>Slackware Linux on a Toshiba Satellite 2100CDT</h2>
 <p>
  <b>This document describes the steps I took to get Linux on my laptop.  I don't guarantee that any of this will work for you.  I take no responsibility for any damage caused by following these instructions.</b>
 </p><p>
  I am writing this a few days after my actual installation, so I probably don't remember everything right now.  Check back for updates to this page.
 </p>

 <h3>What I was looking for in a laptop</h3>
 <p>
  Basically what I needed a laptop for was doing my college work.  Since I am a Computer Science major, and need to compile things a lot, I had to have a decent processor and a good amount of RAM.  I also wanted a TFT screen, at least 12.1 inches.  Some other things I wanted were integrated CD-ROM &amp; floppy drives.  The most I could afford to spend was $1500 (I ended up getting this machine for $1385 in February of 2000).
 </p>

 <h3>Choice of distribution</h3>
 <p>
  My first choice of distributions was <a href="http://www.debian.org/">Debian</a>, but since I couldn't find a copy at the local CompUSA, and couldn't burn my own CD, I picked up a copy of <a href="http://www.slackware.com/">Slackware</a>.  Look for my attempt at Debian when I get a CD burned.
 </p>

 <h3>General steps</h3>
 <p>
  The installation was fairly easy.  The first thing I did was make my boot/root disk set.  After booting off those, I partitioned my disk.  Here is how I have my disk set up:
 </p>

 <table cellpadding=10 border=1>
  <tr><td>device name</td><td>size</td><td>type</td><td>mount point</td></tr>
  <tr><td>/dev/hda1</td><td>1024 MB</td><td>FAT</td><td>--</td></tr>
  <tr><td>/dev/hda5</td><td>128  MB</td><td>Linux Swap</td><td>--</td></tr>
  <tr><td>/dev/hda6</td><td>(Rest of HD)</td><td>ext2</td><td>/</td></tr>
 </table>

 <p>
  Next, I started setup. About the only thing that I really wanted other than the base system was the development stuff.  After making sure that group was selected, I let setup do its thing.  I chose the full option so I wouldn't have to sit and confirm a bunch of prompts.  Go grab a Coke while its installing :)  
 </p>

 <h3>X Windows</h3>
 <p>
  X was kind of a pain to configure.  I tried several different chipsets in xf86config, but none of the ones I tried seemed to work.  I ended up using the Device &amp; Screen sections from the SuSE install I did previously (maybe I'll put up a description of that installation later). (I used to have a sample of my XF86Config file here, but I lost it somehow.  Sorry.) 
 </p>

 <h3>Sound</h3>
 <p>
  The sound driver for this machine is included in the later 2.2.x kernels.  It is the maestro driver.  Just compile your kernel with this driver, and sound should work without too much trouble.
 </p>

 <h3>Modem</h3>
 <p>
  I had just planned on getting a PC Card modem for my machine.  It didn't even occur to me that I would be able to get the built-in one working.  That was until someone on the Linux Laptop mailing list told me about the Lucent driver.  You'll have to download the driver from <a href="http://www.linmodems.org/">linmodem.org</a>.  It's a kernel module, so you'll have to have loadable module support built into your kernel (If you don't know what this means, you probably have support built in.  It's in most of the standard distributions' default kernels).
 </p>

 <h3>Network</h3>
 <p>
  I got a Linksys EtherFast 10/100 PC Card.  It seems to work pretty well.  All I did to get it working was edit /etc/rc.d/rc.inet1 &amp; change the "no" to "yes" down where it sets up the DHCP stuff.  Since I rarely need network access, I don't have my machine set up to set all that stuff up at boot time.  I just run dhcpcd &amp; ifconfig manually when needed.
 </p>

 <h3>Conclusion</h3>
 <p>
  Over all, the 2100CDT is a pretty good machine.  The only thing I wish it had was a port replicator connection.  I didn't have any major problems getting Linux set up on it.  I would recommend it to someone wanting a good laptop for a fairly good price. 
 </p>

<h2>Debian GNU/Linux on a Toshiba Satellite 2100CDT</h2>

 <h3>Introduction</h3>
 <p>
  This document describes my install of Debian GNU/Linux 3.0 (woody) on a Toshiba Satellite 2100CDT.  
 </p><p>
  I finally decided that I'd had enough experimenting with other distributions on my laptop, so I naturally wanted to put Debian back on it.  Debian is my favorite distribution, after all.  Anyway, the info below is written a few days after the fact, and will not be step by step like my other pages have been.  If you have specific questions on anything, though, send me an email, and I'll be happy to answer (or attempt to answer) any questions you may have.  
 </p>

 <h3>Installation</h3>
 <p>
  I did this install mostly using floppies.  I downloaded the netinst CD image and burned it to disk, but my laptop wouldn't boot from it for some reason.  I downloaded the floppy images from the Debian FTP site, and proceeded with the install.  If you intend to go that route, you will need the rescue.bin, root.bin, and the base images (1-20).  After booting from the rescue &amp; root disks, I began the installation.  I ended up loading the drivers from the netinst CD I'd burned, but I don't think that was really necessary, since I didn't need any extra drivers.  
 </p><p>
  After partitioning the disk (see my <a href="<?php print $_SERVER['SCRIPT_NAME']; ?>?p=linux-laptop-redhat">RedHat document</a> for my partitioning preferences), I tried to set up my PCMCIA network card so that I could get the base system off my other PC across the network.  That, unfortunately did not work out - the system would get a kernel panic whenever I brought up the interface.  I didn't feel like screwing around with it, so I just used the base floppies.  All 20 of them...  It was FUN.  If you do go that route, do what I did and dd the images to disk on another machine while you're doing the install.  I'm sure it saved me a lot of time.
 </p><p>
  About all that was left was to upgrade the installed packages to the newest versions and install any packages that you want on the system.  I wanted to have a pretty empty system and only install things as needed, so I just upgraded what's in the base system, and installed the necessities like less and vim.  I plan to test out aptitude and its ability to un-install packages that were only installed to meet dependencies, so I installed that as well.
 </p><p>
  The PCMCIA stuff did start working after the install.  I don't know what it's problem was during the install, and frankly don't care now that I have it up and running.  My ethernet &amp; wireless cards work.  I haven't tried my modem, but I see no reason why it wouldn't work as well.  I rarely use it anymore anyway. 
 </p>

 <h3>Conclusion</h3>
 <p>
  As much as I hate to say this, Debian is not a distribution I would recommend as a first install.  At least not on this particular machine.  It may be easier on a desktop machine, but the apparently non-working PCMCIA system in the installer is a major drawback, in my opinion.  It wasn't hard, per se, to set up, but it definitely required some existing Linux knowledge.  I don't think someone new to Linux could have done this install.  If you are new, I would recommend <a href="http://www.slackware.com">Slackware</a> or <a href="http://www.redhat.com/">Red Hat</a>.  My last Slackware install was completely painless, but did require me to manually configure X.  My last Red Hat install is documented <a href="<?php print $_SERVER['SCRIPT_NAME']; ?>?p=linux-laptop-redhat">here</a> so you can check that out if you're interested.
 </p>


<h2>RedHat Linux on a Toshiba Satellite 2100CDT</h2>

 <h3>Introduction</h3>
 <p>
  This document describes my install of RedHat Linux 7.2 on a Toshiba Satellite 2100CDT.  
 </p><p>
  I had originally started my adventure in Linux using RedHat 5.0.  I've since found that Debian is the best distribution (in my opinion anyway - no flames please :) but figured that RedHat must be doing some things right.  It is the most popular distribution, after all (even if Linux != RedHat, if you know what I mean).  I've been wanting to try RedHat out again for quite some time now, so I spent a few weeks downloading the 2 ISO images (I am still using a 56K dial-up).  Below, I will document the installation onto my laptop.  I am writing this as I perform the installation, so I don't know what is ahead of me.  Oh what an adventure...
 </p>

 <h3>Getting started</h3>
 <p>
  The first thing you'll see when booting from the floppy (the CD I downloaded wasn't bootable, so I was forced to use floppies to boot the install) is a menu giving you a choice between graphical and text mode (plus some others).  I just chose graphical, since the graphical installation seems to be preferred by many new users, and as a result seems to be something that many distributions put a great deal of work into.  The next thing is to choose a keyboard and mouse.  I chose a generic keyboard and a generic 2-button mouse with 3-button emulation.  I chose a custom install so that I can use GRUB, my boot loader of choice.  I figured it will also give me a chance to browse the list of packages and see what cool stuff is offered up without turning my laptop into one big security nightmare running every service there is.  We'll soon see.
 </p>

 <h3>Partitioning</h3>
 <p>
  I tried the automatic partitioning, but didn't care for the partition sizes, so I went back and manually (using Disk Druid) partitioned my disk.  When I start with a new distribution, I like to use 1 swap partition (192 MB in this case) and 1 large root partition.  Then after I get familiar with the system, I'll go back and reinstall everything, and partition the disk in a better scheme, using separate partitions, instead of one large /.  I'm formatting my root partition as ext3.   I've never used ext3 before, so we'll see how it goes...
 </p>

 <h3>Installation</h3>
 <p>
  Next, the installer asks various boot loader questions (which loader, where to install, etc).  I of course chose GRUB, and installed it on the MBR of /dev/hda.  Everything else looks good, so let's continue...  
 </p><p>
  I was (pleasantly) surprised to see a firewall configuration screen.  I chose the High Security option since I don't need to provide any services to the outside (this is a laptop after all, not a server).
 </p><p>
  After choosing my language (English USA).  The installer crashed.  This doesn't inspire confidence, but things happen; I tried again.  It turns out that my CD went to crap for some reason.  After burning a new one (and grabbing some dinner), I was rolling again.  Next thing to do is to set the timezone.
 </p><p>
  Next, the installer gave me a chance to set up the root password and add any extra users to the system.  Remember to set up your own user (I'll assume you already know why doing all your normal work as root is bad).  You'll probably want to keep the two boxes at the top of the next screen checked.  I didn't enable NIS, LDAP, Kerberos, or SMB.  I have been thinking of setting up NIS or LDAP authentication on my home network, but that is a project for another time...
 </p><p>
  Once we get the authentication stuff done with, we have the chance to select extra package groups.  Install whatever you want.  You will, however, probably want to add the Laptop group.
 </p><p>
  Next, it asks about your video card.  Mine detected flawlessly.  Way to go RedHat. 
 </p><p>
  You'd might as well go grab a drink or something at this point.  My install took about 25 minutes to do its thing.  It did die part way through because of (guess what) bad media again.  One bad copy of disk 1 and three (yes, 3) bad copies of disk2 was VERY annoying.  These blank Cd-Rs that I've got suck.  I can't wait until they're gone.  I may even toss 'em if this keeps happening.  Enough of my ranting about an unrelated topic.  Let's get back to the install...  
 </p>

 <h3>Post Install Configuration</h3>
 <p>
  YES!  I made it through.  I let it make a boot disk (skip that part if you prefer), then it began to configure X.  I just accepted the  "monitor" that it detected.  Next it asks about the graphics config.  I took the default of 800x600, High Color(16 Bit) and chose to run KDE as my default desktop environment (I had installed it when asked which package groups to install).
 </p><p>
  All we have to do now is hit Exit and let it reboot.  Now let's go see what we've got...
 </p><p>
  My machine locked up when it tried to start PCMCIA.  I had to boot into single-user mode (add init=/bin/bash to the kernel command line) and disable PCMCIA in order to get my machine to boot.   Once I did that, it booted fine, going directly to the display manager login screen.  
 </p> 

 <h3>First Impressions Of The System</h3>
 <p>
  I had set up the machine to boot to graphical mode, so after logging into the display manager, I was dropped directly into my GNOME session.  Odd, since I chose KDE as my default environment at the end of the install.  I'll look into that.  Not that I have any preference, per se, but the fact it didn't do what was expected is a bit annoying.  Aside from that though, I'm pretty impressed with what I am seeing so far.  I'll post an update to this page once I get a chance to fully explore the system. 
 </p>

 <h3>Conclusion</h3>
 <p>
  The installer has certainly come a long way since my early days using Linux.  It's no wonder that RedHat is so popular.
 </p><p>
  I'll have to figure out what is screwed in the PCMCIA config that's locking up the machine, so check back here for updates.  I'll try and get that taken care of in the next couple of days since I have no access to the Internet or to my home network until I fix that (my modem and network card are PCMCIA).
 </p><p>
  (Update - 2/7/02) I've decided to nuke this install and move on. I went through all the config files, and found that everything is the same as my previously working Debian install.  Beats me why I had problems w/ RedHat.  Aside from the PCMCIA problems, though, it is a decent system.  A little too dumbed down for me though.  I like working primarily with the command line, only using X when I want to browse the web or have several shell windows up at the same time.  The graphical tools would no doubt be nice for a beginner, but they're not for me.  I'm going to try out Slackware 8.0 next, then OpenBSD.  I may stick with one of them, or I may put Debian back on.  We'll soon see...  I will probably come back to RedHat just to figure out what the hell is going on though.  This really bothers me that a distribution that is so well known for being easy to install and use has a problem in something as important as PCMCIA.  It has to be something simple that I am overlooking.
 </p>

</page>

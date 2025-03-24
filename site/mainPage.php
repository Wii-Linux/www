<!DOCTYPE html>
<html lang=en>
<head>
<style>
	img {
		display: inline;
		height: 32px;
		width: auto;
	}
</style>
<?php globalHeadStuff(); ?>
<title>Wii Linux</title>
</head>
<body>
<pre>
Wii Linux
---------

<?php
global $isWii;
if ($isWii) {
	echo("Hello fellow Wii user!\r\nI hope you appreciate all of the work that I've done to get this working properly\r\non the Wii's Opera 9.0 Internet Channel.\r\n(Yes, I can detect that you are visiting from a Wii.  If this is a false-positive,\r\nplease let me know and I will do my best to fix it!)\r\n\r\n");
}

if ($oldBrowser) {
	echo("Legacy browser detected, compatibility fixes applied!\r\n\r\n");
}
?>
It's Linux on the Wii, but it's actually modern, and (soon) works well!

What works and works well:
- Booting
  - Booting properly to a getty or display-manager
  - Booting from the <a href=https://wiibrew.org/wiki/MINI>MINI</a> firmware replacement for the <a href=https://wiibrew.org/wiki/MINI>Starlet co-processor</a>
- Hardware
  - Using a portion of <a href=https://wiibrew.org/wiki/Memory_map>MEM2</a> to boost the total usable memory count from 24MB to ~72MB
  - Internal Broadcom 4318 Wi-Fi
  - Bluetooth using bluez
  - USB ports, hubs, and devices
  - SD Cards
  - USB Gecko (serial console in GameCube memory card ports)
  - Graphics output, in either 480i or 480p, using either the Linux VT, or anything that writes to /dev/fb0 (e.g. Xorg)
  - Swapping to SD Card or USB device
- App support
  - Most applications that you would want to use - anything in ArchPOWER officially, including handpicked extras on my own repo.

What works if you ignore the obvious problems:
- Booting from HBC (Homebrew Channel) under Starlet IOS
- Anything that uses Java (memory issues, and INCREDIBLY slow)

What doesn't work at all:
- The DVD driver
- Wayland support (requires a Direct Rendering Manager / "DRM" driver for the Wii's GPU)
- KGDB - Linux kernel deugger, works over USB Gecko (previously worked, but the driver I previously used is no longer present in 4.5)
- Running under the vWii (it can't use BootMii/MINI)

What's not known yet:
- When did IOS-based SD Card support break?
- Does the gamecube_defconfig work on the GameCube?

Links
-----
- <a href="/downloads">Downloads page</a>  <b>Get all of the files here!</b>
- <a href="https://discord.com/invite/D9EBdRWzv2">Official Discord Server</a>
- <a href="https://wiki.wii-linux.org/wiki/Installation_Guide">Installation Guide</a>
- <a href="https://wiki.wii-linux.org/">Official Wii Linux Wiki</a>
- <a href="/blog">Wii Linux developers blog</a>  See progress updates and generally what's going on here.

Developers
-----------
- "Techflash" (Michael)
    - Lead project organizer
    - Tester
    - Gives Support
    - Most of the current kernel development
    - Does most of the compiling
    - Built essentially all of this website so far
    - Got kernel 4.5.0 working
    - Attempting kernel 6.6 port
</pre>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href="https://techflash.site"><img src="/icons/web_32x32.png" alt="Globe icon"></a>
<a href="https://github.com/techflashYT"><img <?img("github");?> alt="GitHub Icon"></a>
<a href="https://youtube.com/techflashYT"><img <?img("youtube");?> alt="YouTube Icon"></a>
<pre>
- "TheOtherOne" / "ThatsItForTheOtherOne"
    - Previously the main kernel developer
    - Hosts docker container for build tools
    - Got kernel 4.4.302 working in the first place
    - Very knowledgable about the inner workings of the Wii
</pre>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href="https://github.com/ThatsItForTheOtherOne"><img <?img("github");?> alt="GitHub Icon"></a>
<pre>
- Alexander Baldeck / "kth5"
    - Creator of ArchPOWER
    - Helps fix bugs from time to time
    - Allows Techflash to use a VM on a POWER9 system for building ArchPOWER packages
</pre>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href="https://github.com/kth5"><img <?img("github");?> alt="GitHub Icon"></a>
<pre>
- "Foxlet"
    - Main Void Linux handler
    - Expert at all things userspace
    - Runs the Void Linux PPC project, which was previously used by us, and we actively help with
    - Showed us how we can get more than an old Gentoo tarball from 2010 working
</pre>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href="https://github.com/foxlet"><img <?img("github");?> alt="GitHub Icon"></a>
<a href="https://codeberg.org/foxlet"><img <?img("codeberg");?> alt="Codeberg Icon"></a>


<pre>
Special thanks
---------------
- Owen Rummage / "n1xn0v4"
    - Owner of <a href="https://nixlabs.dev">NixLabs</a>, the server provider we use
    - Generously gives all hosting and compute space for free, as we are a sponsored project
    - Helps out with the actual project work occasionally here and there
    - Great friend
</pre>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href="https://rummage.cc"><img src="/icons/web_32x32.png" alt="Globe icon"></a>
<a href="https://github.com/owenrummage"><img <?img("github");?> alt="GitHub Icon"></a>

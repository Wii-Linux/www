<?php

function img($name) {
	global $isWii;
	// workaround for Wii's stupid internet channel
	echo("src=\"/icons/");
	if ($isWii) {
		echo($name . "_32x32.png");
	}
	else {
		echo("$name.svg");
	}
	echo("\"");
}
?>
<!DOCTYPE html>
<html>
<head>
<style>
	img {
		display: inline;
		height: 32px;
		width: auto;
	}
</style>
</head>
<body>
<pre>
Wii Linux
-----------

<?php
global $isWii;
if ($isWii) {
	echo("Hello fellow Wii user!\r\nI hope you appreciate all of the work that I've done to get this working properly\r\non the Wii's Opera 9.0 Internet Channel.\r\n(Yes, I can detect that you are visiting from a Wii.  If this is a false-positive,\r\nplease let me know and I will do my best to fix it!)\r\n\r\n");
}
?>
It's Linux on the Wii, but it's actually modern, and (soon) works well!

What works and works well:
- Booting to a command line
- Running various command line apps
- Wi-Fi
- USB Storage
- SD Cards
- Terminal graphics output in either 480i/480p
- Booting from MINI
- USB Gecko (serial console in GameCube memory card ports)
- KGDB - Linux kernel deugger, works over USB Gecko
- USB Keyboards
- Using a portion of <a href=https://wiibrew.org/wiki/Memory_map>MEM2</a> to boost the total usable memory count from 24MB to 74MB
- Swapping to any USB/SD disk to increase the total ""memory"" count to theoretically any number
- Any USB 2.0, 1.1, or 1.0 device
- Bluetooth using bluez

What works if you ignore the obvious problems:
- Anything that writes to /dev/fb0 [see <a href="/blog/12-30-2023_dev_fb0">why</a>]
- Xorg (graphical output) [it writes to /dev/fb0]
- USB Mice [only useful for Xorg]
- Theoretically any Xorg app if you can put up with the colors
- any USB 3.0 device [see <a href="/blog/12-30-2023_usb_3_0">why</a>]
- USB (3.0 only??) Hubs 

What doesn't work at all:
- Booting from HBC (Homebrew Channel) under Starlet IOS
- Anything that depends on Starlet, such as the disk drive
- Anything that uses Java (memory issues, refuses to swap)

What's not known yet:
- Do all USB Hubs break, or is it just USB 3.0 based hubs?
    - Feel free to shoot us a message in our Discord server if you can test it!

Links
-----------
- <a href="https://discord.com/invite/D9EBdRWzv2">Official Discord Server</a>
- <a href="/installation_guide">Install Guide (TBD, ask Techflash until it's done!)</a>
- <a href="/blog">Wii Linux developers blog</a>  See progress updates and generally what's going on here.
- Latest build's rootfs (.tar.xz, extract to the root of your USB device's ext4 partition) <a href="/latest_full.tar.xz">here.</a>
- Latest build's SD Card files (.tar.gz, extract to the root of your SD Card) <a href="/latest_sd_files.tar.gz">here.</a>

Specialized (already included in the above)
-----------
- Latest build's kernel modules (.tar.gz, need these for Wi-Fi primarily, extract to USB root) <a href="/latest-modules.tar.gz">here.</a>
- Wi-Fi Firmware (.tar.gz.  extract to the root of your USB disk) <a href="/openfwwf-5.2-bin.tar.gz">here.</a>  See the <a href="/openfwwf-5.2-LICENSE.txt">LICENSE</a>

Developers
-----------
- "Techflash" (Michael)
    - Lead project organizer
    - Tester
    - Gives Support
    - Some kernel development
    - Does most of the compiling
<?php // TODO: Update the below when/if it changes. ?>
    - Built essentially all of this website so far
</pre>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href="https://techflash.wtf"><img src="/icons/web_32x32.png" alt="Globe icon"></a>
<a href="https://github.com/techflashYT"><img <?img("github");?> alt="GitHub Icon"></a>
<a href="https://discord.com/invite/FnseMDFBH6"><img <?php img("discord"); ?> alt="Discord icon"></a>
<a href="https://youtube.com/techflashYT"><img src="/icons/youtube.png" alt="YouTube Icon"></a>
<pre>
- "TheOtherOne" / "ThatsItForTheOtherOne"
    - Main kernel developer
    - Hosts build tools
    - Got kernel 4.x working in the first place
    - Very knowledgable about the inner workings of the Wii
</pre>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href="https://github.com/ThatsItForTheOtherOne"><img <?img("github");?> alt="GitHub Icon"></a>
<pre>
- "Foxlet"
    - Main Void Linux handler
    - Expert at all things userspace
    - Runs the Void Linux PPC project, which is used by us, and we actively help with
    - Showed us how we can get more than an old Gentoo tarball from 2010 working
</pre>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href="https://github.com/foxlet"><img <?img("github");?> alt="GitHub Icon"></a>
<a href="https://codeberg.org/foxlet"><img <?img("codeberg");?> alt="Codeberg Icon"></a>
</body>
</html>

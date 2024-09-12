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
- USB
- SD Cards
- Terminal graphics output in either 480i/480p
- Booting from MINI
- USB Gecko (serial console in GameCube memory card ports)
- KGDB - Linux kernel deugger, works over USB Gecko
- USB Keyboards
- Using a portion of <a href=https://wiibrew.org/wiki/Memory_map>MEM2</a> to boost the total usable memory count from 24MB to 74MB
- Swapping to any USB/SD disk to increase the total ""memory"" count to theoretically any number
- Bluetooth using bluez
- The framebuffer
- Xorg

What works if you ignore the obvious problems:
- Booting from HBC (Homebrew Channel) under Starlet IOS

What doesn't work at all:
- The DVD driver
- Anything that uses Java (memory issues, refuses to swap, but in fact now it crashes)

What's not known yet:
- When did IOS-based SD Card support break?
- Does the gamecube_defconfig work on the GameCube?
- Does a Wii build work on the Wii U's vWii?

Links
-----------
- <a href="https://discord.com/invite/D9EBdRWzv2">Official Discord Server</a>
- <a href="/installation_guide">Install Guide (TBD, ask Techflash until it's done!)</a>
- <a href="/blog">Wii Linux developers blog</a>  See progress updates and generally what's going on here.
- Latest build's rootfs (.tar.xz, extract to the root of your SD/USB device's ext4 partition) <a href="/latest_full.tar.xz">here.</a>
- Latest build's (kernel 4.5.0) SD Card files (.tar.gz, extract to the root of your SD Card's FAT32 partition) <a href="/latest_4.5_sd_files.tar.gz">here.</a>

Specialized (already included in the above)
-----------
- Latest build's (kernel 4.5.0) loader.img (raw file, put in gumboot on your SD Card's FAT32 partition) <a href="/latest-loader-4.5.img">here.</a>
- Latest build's kernel (4.5.0) modules (.tar.gz, need these for Wi-Fi primarily, extract to rootfs) <a href="/latest_4.5_modules.tar.gz">here.</a>
- Latest build's raw kernel (4.5.0), put this as a file named v4_5_0.krn in the gumboot directory on your SD Card's FAT32 partition <a href="/latest-kernel_4.5.elf">here.</a>
- Wi-Fi Firmware (.tar.gz.  extract to the root of your USB disk) <a href="/openfwwf-5.2-bin.tar.gz">here.</a>  See the <a href="/openfwwf-5.2-LICENSE.txt">LICENSE</a>


In-Development versions
It's highlight likely that these versions will have serious problems.
It's recommended to NOT use these.
--------------
- Latest build's (kernel 4.20.0) loader.img (raw file, put in gumboot on your SD Card's FAT32 partition) <a href="/latest-loader_dev.img">here.</a>
- Latest build's kernel (4.20.0) modules (.tar.gz, need these for Wi-Fi primarily, extract to rootfs) <a href="/latest_dev_modules.tar.gz">here.</a>
- Latest build's raw kernel (4.20.0), put this as a file named v4_20_0.krn in the gumboot directory on your SD Card's FAT32 partition <a href="/latest-kernel_dev.elf">here.</a>

Legacy versions
You shouldn't need these, but they are kept around for historical reasons
--------------
- Latest kernel 4.4.302 SD Card files (.tar.gz, extract to the root of your SD Card's FAT32 partition) <a href="/latest_4.4.302_sd_files.tar.gz">here.</a>
- Latest kernel (4.4.302) modules (.tar.gz, need these for Wi-Fi primarily, extract to rootfs) <a href="/latest_4.4.302_modules.tar.gz">here.</a>
- Latest build's raw kernel (4.4.302), put this as a file named v4_4_302.krn in the gumboot directory on your SD Card's FAT32 partition <a href="/latest-kernel_4.4.302.elf">here.</a>
- <a href="/archive">The archive</a> - really old versions, and superseded releases of the current versions


Developers
-----------
- "Techflash" (Michael)
    - Lead project organizer
    - Tester
    - Gives Support
    - Most of the current kernel development
    - Does most of the compiling
<?php // TODO: Update the below when/if it changes. ?>
    - Built essentially all of this website so far
    - Got kernel 4.5.0 working
</pre>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href="https://techflash.wtf"><img src="/icons/web_32x32.png" alt="Globe icon"></a>
<a href="https://github.com/techflashYT"><img <?img("github");?> alt="GitHub Icon"></a>
<a href="https://discord.com/invite/FnseMDFBH6"><img <?php img("discord"); ?> alt="Discord icon"></a>
<a href="https://youtube.com/techflashYT"><img src="/icons/youtube.png" alt="YouTube Icon"></a>
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
- "Foxlet"
    - Main Void Linux handler
    - Expert at all things userspace
    - Runs the Void Linux PPC project, which is used by us, and we actively help with
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

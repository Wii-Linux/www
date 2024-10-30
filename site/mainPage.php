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
- USB Keyboards
- Using a portion of <a href=https://wiibrew.org/wiki/Memory_map>MEM2</a> to boost the total usable memory count from 24MB to 74MB
- Swapping to any USB/SD disk to increase the total ""memory"" count to theoretically any number
- Bluetooth using bluez
- The framebuffer
- Xorg

What works if you ignore the obvious problems:
- Booting from HBC (Homebrew Channel) under Starlet IOS
- Anything that uses Java (memory issues, and INCREDIBLY slow)

What doesn't work at all:
- The DVD driver
- Wayland support (requires a Direct Rendering Manager / "DRM" driver for the Wii's GPU)
- KGDB - Linux kernel deugger, works over USB Gecko (previously worked)

What's not known yet:
- When did IOS-based SD Card support break?
- Does the gamecube_defconfig work on the GameCube?
- Does a Wii build work on the Wii U's vWii?

Links
-----------
- <a href="https://discord.com/invite/D9EBdRWzv2">Official Discord Server</a>
- <a href="/installation_guide">Install Guide (not yet finalized, WIP copy is in the Discord)</a>
- <a href="/blog">Wii Linux developers blog</a>  See progress updates and generally what's going on here.
- <a href="/kernel-docs.zip">Linux 4.5 Documentation (HTML)</a>, built, and then assembled as a ZIP archive.
- <b>NEW!</b> Latest build's ArchPOWER rootfs (.tar.gz, extract to the root of your SD/USB device's ext4 partition) <a href="/files/wii_linux_rootfs_archpower-latest.tar.gz">here.</a>
- <b>NEW!</b> Latest build's ArchPOWER rootfs (.img, flash to your SD/USB device's ext4 partition, then resize2fs expand the fs to the partition size) <a href="/files/wii_linux_rootfs_archpower-latest.img.gz">here.</a>
- <b>NEW!</b> Latest build's ArchPOWER SD Card files (.tar.gz, extract to the root of your SD Card's FAT32 partition) <a href="/files/wii_linux_sd_files_archpower-latest.tar.gz">here.</a>

Specialized (already included in the above)
-----------
- Latest build's (kernel 4.5.0) loader.img (raw file, put in wiilinux on your SD Card's FAT32 partition) <a href="/files/wii_linux_loader_v4_5_0-latest.img">here.</a>
- Latest build's kernel (4.5.0) modules (.tar.gz, need these for Wi-Fi primarily, extract to rootfs) <a href="/files/wii_linux_modules_v4_5_0-latest.tar.gz">here.</a>
- Latest build's raw kernel (4.5.0), put this as a file named v4_5_0.krn in the wiilinux directory on your SD Card's FAT32 partition <a href="/files/wii_linux_kernel_v4_5_0-latest.elf">here.</a>
- Wi-Fi Firmware (.tar.gz.  extract to the root of your USB disk) <a href="/openfwwf-5.2-bin.tar.gz">here.</a>  See the <a href="/openfwwf-5.2-LICENSE.txt">LICENSE</a>


In-Development versions
It's highlight likely that these versions will have serious problems.
It's recommended to NOT use these.
--------------
- None for now!  Check back later!

Legacy versions
You shouldn't need these, but they are kept around for historical reasons
--------------
- <a href="/archive">The archive</a> - really old versions, and superseded releases of the current versions
- <a href="https://archive.org/details/wii-linux-backup_202409">archive #1</a> of old pre-server-crash releases of Wii Linux - by Selim
- <a href="http://pretzels.onthewifi.com/files/wii_linux/">archive #2</a> of old pre-server-crash releases of Wii Linux - by Tech64


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
<a href="https://techflash.site"><img src="/icons/web_32x32.png" alt="Globe icon"></a>
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

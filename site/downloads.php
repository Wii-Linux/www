<!DOCTYPE html>
<html lang=en>
<head>
<style>
	img {
		display: inline;
		height: 16px;
		width: auto;
	}
</style>
<?php globalHeadStuff(); ?>
<title>Wii Linux</title>
</head>
<body>
<pre>
Wii Linux - Downloads
---------------------
<a href="/">Back to main page</a>
<b>You can refer to the <a href="https://wiki.wii-linux.org/wiki/Installation_Guide">Installation Guide</a> to install these.</b>

Tier 1 Distros
--------------
These are distros that have the full support of the Wii-Linux team.  Custom packages are created, and you should get kernel and loader updates from here.
They are verified to work reasonably well on the Wii's limited hardware, and get modern updates.  Automatic tarball and image creation is supported.
You will recieve support for using these distros.

<b>NEW!  ArchPOWER is now based on 4.19!</b>
- Flashable images
  For use with Linux `dd`, Balena Etcher on Windows/Linux, etc
  Any disk image flasher should work.
  - <b>(Recommended)</b> Latest build's <img <?img("arch");?> alt="Arch Linux Icon"> ArchPOWER SD Card image (.img.gz) <a href="/files/wii_linux_full_sd_archpower-latest.img.gz">here.</a>
  - Latest build's <img <?img("arch");?> alt="Arch Linux Icon"> ArchPOWER rootfs (.img.gz) <a href="/files/wii_linux_rootfs_archpower-latest.img.gz">here.</a>

- Tarballs / Archives
  Requires installation via Linux on a PC
  - Latest build's <img <?img("arch");?> alt="Arch Linux Icon"> ArchPOWER rootfs (.tar.gz) <a href="/files/wii_linux_rootfs_archpower-latest.tar.gz">here.</a>
  - Latest build's <img <?img("arch");?> alt="Arch Linux Icon"> ArchPOWER SD Card files (.tar.gz) <a href="/files/wii_linux_sd_files_archpower-latest.tar.gz">here.</a>
  - Latest build's <img <?img("arch");?> alt="Arch Linux Icon"> ArchPOWER SD Card files (.zip) <a href="/files/wii_linux_sd_files_archpower-latest.zip">here.</a>


Tier 2 Distros
--------------
These distros are verified to at least function properly, but might have some issues, notably, it may not have custom apps packaged,
it may run poorly, it may not get updates anymore, and it may not have automatic image creation scripts.  You will recieve limited support
for using these distros.  The support team may choose to reject a support request due to it being too much hassle on these lower-quality distros.

- Tarballs / Archives
  Requires installation via Linux on a PC
  - Latest build's <img <?img("fedora");?> alt="Fedora Linux Icon"> Fedora 20 rootfs (.tar.gz) <a href="/files/wii_linux_rootfs_fedora_20-latest.tar.gz">here.</a>
  - Latest build's <img <?img("fedora");?> alt="Fedora Linux Icon"> Fedora 20 SD Card files (.tar.gz) <a href="/files/wii_linux_sd_files_fedora_20-latest.tar.gz">here.</a>
  - Latest build's <img <?img("fedora");?> alt="Fedora Linux Icon"> Fedora 20 SD Card files (.zip) <a href="/files/wii_linux_sd_files_fedora_20-latest.zip">here.</a>


Tier 3 Distros
--------------
The graveyard.  These distros are completely abandoned, broken, or worse.  They are provided for historical purposes only, and should not
be used under any circumstances.  You will recieve minimal support for getting these distros to boot, are not garuanteed anything else.

- Tarballs / Archives
  Requires installation via Linux on a PC
  - Latest build's <img <?img("void");?> alt="Void Linux Icon"> Void-PPC rootfs (.tar.xz) <a href="/files/wii_linux_rootfs_void_ppc-latest.tar.xz">here.</a>
  - Latest build's <img <?img("void");?> alt="Void Linux Icon"> Void-PPC SD Card files (.tar.gz) <a href="/files/wii_linux_sd_files_void_ppc-latest.tar.gz">here.</a>

Non-Distro Downloads
--------------------
Various bits and pieces, mainly for developers looking to create their own distro.

- Latest build's (kernel 4.19.325) loader.img <a href="/files/wii_linux_loader_v4_19_325-latest.img">here.</a>
- Latest build's kernel (4.19.325) modules (.tar.gz) <a href="/files/wii_linux_modules_v4_19_325-latest.tar.gz">here.</a>
- Latest build's kernel (4.19.325) binary <a href="/files/wii_linux_kernel_v4_19_325-latest.elf">here.</a>
- Latest build's (kernel 4.5.0) loader.img <a href="/files/wii_linux_loader_v4_5_0-latest.img">here.</a>
- Latest build's kernel (4.5.0) modules (.tar.gz) <a href="/files/wii_linux_modules_v4_5_0-latest.tar.gz">here.</a>
- Latest build's kernel (4.5.0) binary <a href="/files/wii_linux_kernel_v4_5_0-latest.elf">here.</a>
- Wi-Fi Firmware (.tar.gz.  extract to the root of your USB disk) <a href="/openfwwf-5.2-bin.tar.gz">here.</a>  See the <a href="/openfwwf-5.2-LICENSE.txt">LICENSE</a>
- <a href="/kernel-docs.zip">Linux 4.5 Documentation (HTML)</a>, built, and then assembled as a ZIP archive.


In-Development versions
It's highlight likely that these versions will have serious problems.
It's recommended to NOT use these.
-----------------------
See testing files <a href="/files/testing">here.</a>

Legacy versions
You shouldn't need these, but they are kept around for historical reasons
--------------
- <a href="/files/archive">The archive</a> - really old versions, and superseded releases of the current versions
- <a href="https://archive.org/details/wii-linux-backup_202409">archive #1</a> of old pre-server-crash releases of Wii Linux - by Selim
- <a href="http://pretzels.onthewifi.com/files/wii_linux/">archive #2</a> of old pre-server-crash releases of Wii Linux - by Tech64

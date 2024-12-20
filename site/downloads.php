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

- Flashable images
  For use with Linux `dd`, Balena Etcher on Windows/Linux, etc
  Any disk image flasher should work.
  - <b>(Recommended)</b> Latest build's <img <?img("arch");?> alt="Arch Linux Icon"> ArchPOWER SD Card image (.img.gz, decompress, then flash to your SD card directly) <a href="/files/wii_linux_full_sd_archpower-latest.img.gz">here.</a>
  - Latest build's <img <?img("arch");?> alt="Arch Linux Icon"> ArchPOWER rootfs (.img.gz, decompress, then flash to your SD/USB device's ext4 partition) <a href="/files/wii_linux_rootfs_archpower-latest.img.gz">here.</a>

- Tarballs / Archives
  Requires installation via Linux on a PC
  - Latest build's <img <?img("arch");?> alt="Arch Linux Icon"> ArchPOWER rootfs (.tar.gz, extract to the root of your SD/USB device's ext4 partition) <a href="/files/wii_linux_rootfs_archpower-latest.tar.gz">here.</a>
  - Latest build's <img <?img("arch");?> alt="Arch Linux Icon"> ArchPOWER SD Card files (.tar.gz, extract to the root of your SD Card's FAT32 partition) <a href="/files/wii_linux_sd_files_archpower-latest.tar.gz">here.</a>
  - Latest build's <img <?img("arch");?> alt="Arch Linux Icon"> ArchPOWER SD Card files (.zip, extract to the root of your SD Card's FAT32 partition) <a href="/files/wii_linux_sd_files_archpower-latest.zip">here.</a>


Specialized (already included in the above)
-------------------------------------------
- Latest build's (kernel 4.5.0) loader.img (raw file, put in wiilinux on your SD Card's FAT32 partition) <a href="/files/wii_linux_loader_v4_5_0-latest.img">here.</a>
- Latest build's kernel (4.5.0) modules (.tar.gz, need these for Wi-Fi primarily, extract to rootfs) <a href="/files/wii_linux_modules_v4_5_0-latest.tar.gz">here.</a>
- Latest build's raw kernel (4.5.0), put this as a file named v4_5_0.krn in the wiilinux directory on your SD Card's FAT32 partition <a href="/files/wii_linux_kernel_v4_5_0-latest.elf">here.</a>
- Wi-Fi Firmware (.tar.gz.  extract to the root of your USB disk) <a href="/openfwwf-5.2-bin.tar.gz">here.</a>  See the <a href="/openfwwf-5.2-LICENSE.txt">LICENSE</a>
- <a href="/kernel-docs.zip">Linux 4.5 Documentation (HTML)</a>, built, and then assembled as a ZIP archive.


In-Development versions
It's highlight likely that these versions will have serious problems.
It's recommended to NOT use these.
-----------------------
- None for now!  Check back later!

Legacy versions
You shouldn't need these, but they are kept around for historical reasons
--------------
- <a href="/archive">The archive</a> - really old versions, and superseded releases of the current versions
- <a href="https://archive.org/details/wii-linux-backup_202409">archive #1</a> of old pre-server-crash releases of Wii Linux - by Selim
- <a href="http://pretzels.onthewifi.com/files/wii_linux/">archive #2</a> of old pre-server-crash releases of Wii Linux - by Tech64

<?php
$title = "Progress update";
$date = "Nov 27, 2024";
$author = "Techflash";
require "___header.php";
global $noLoad;
if ($noLoad === true) {
	return;
}
?>

So it's been a while since the last blog post, huh?
I just wanted to pop over here, and give a quick progress update as to what's been going on with Wii Linux.

A few important milestones have been reached since the last post:

<b>10/25/2024</b>
	Finally, the release of <a href="/downloads">ArchPOWER for the Wii</a>!  It was the culmination of a lot of effort,
	but it did eventually work out.  There's still some progress to be made with it, but it's out, and quite possibly
	the most usable release that Wii Linux has ever had.

<b>11/5/2024</b>
	<a href="https://wiki.wii-linux.org">Wii Linux Wiki</a> created!  It's not very complete yet, but it does have some stuff.
	Feel free to go create an account and add / edit some pages!

<b>11/14/2024</b>
	<a href="https://github.com/PPCDroid-Revival">PPCDroid</a> ported to the Wii, decided to make entire revival project.
	The plan is to eventually upgrade it to Android 4.0 Ice Cream Sandwich.  It should be possible, but tricky.
	I'm not yet sure how to migrate such a large amount of repos.

<b>Future plans</b>
	The future is uncertain, but a few projects that you may, or may not, see soon:
	- More packages in the extra repo for ArchPOWER
	- More work on PPCDroid
	- Linux being bootable via HBC, but with full hardware support
	- Modern Gentoo for the Wii (not an old tarball from 2010)
	- New loader, replacing Gumboot and the custom boot menu thingy

That's all from me for now, see ya next time!

<?php require "___footer.php"; ?>

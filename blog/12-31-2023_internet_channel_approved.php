<?php
$title = "wii-linux.org is now Wii Internet Channel Approved!";
$date = "Dec 31, 2023";
$author = "Techflash";
require '___header.php';
global $noLoad;
if ($noLoad === true) {
	return;
}
?>

I've tested the site with loading it on an actual Wii with
the Opera 9.0-based Internet Channel.  It needed a bit of work
to function properly, but now I have it working with a few
special hacks specific to the Wii.

<video class="video-js" id="my-video">
  <source src="/blog/media/internet_channel_approved.mp4" type="video/mp4">
  <source src="/blog/media/internet_channel_approved.webm" type="video/webm">
  Your browser does not support HTML5 video. &nbpsp;Trying to load an Adobe Flash version for ancient browsers.
</video>
<script src="/video.js">
	const player = videojs(document.querySelector('.video-js'));
</script>

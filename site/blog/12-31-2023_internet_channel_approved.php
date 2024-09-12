<?php
$title = "wii-linux.org is now Wii Internet Channel Approved!";
$date = "Dec 31, 2023";
$author = "Techflash";

$injectHead = null;
global $isWii;
require '___header.php';
global $noLoad;
if ($noLoad === true) {
	return;
}
$fn = "/blog/media/internet_channel_approved"
?>

I've tested the site with loading it on an actual Wii with
the Opera 9.0-based Internet Channel.  It needed a bit of work
to function properly, but now I have it working with a few
special hacks specific to the Wii.


<?php
if (!$isWii) {
?>
<video controls="true">
	<source src="<?echo $fn;?>.mp4" type="video/mp4">
	<source src="<?echo $fn;?>.webm" type="video/webm">
	<source src="<?echo $fn;?>.flv" type="video/flv">
	
	<!-- fallback for older browsers that don't support HTML5 video.  Should work on most. -->
	<object type="application/x-shockwave-flash" data="<?echo $fn;?>.swf">
	<embed src="<?echo $fn;?>.swf">
	</object>
</video>

<?php }
else {
?>
You are watching this on a Wii.
Embedding *old* flash media player to attempt to get something to play.

<object type="application/x-shockwave-flash" data="/player_flv_mini.swf" width=640 height=360>
	<param name="movie" value="/player_flv_mini.swf">
	<param name="FlashVars" value="flv=<?echo $fn;?>.flv">
</object>
<br><br><br>
<?php
}
require '___footer.php'
?>


<?php
$title = "Over 190 million Nintendo devices run Java";
$date = "Oct 20, 2025";
$author = "Techflash";
require '___header.php';
global $noLoad;
if ($noLoad === true) {
	return;
}
?>
Yeah, you read that title right.
Over <b>6%</b> of the "over 3 billion device" that run Java, are actually
produced by Nintendo, and it's actually painfully obvious.

Let's do the math.  There are 3 devices produced by Nintendo, that can
be described to "run Java" (they contain support for natively exeucting
JVM bytecode in their respective ARM processor):
- <b>Wii</b> [Starlet, ARM926EJ-S]: sold <b>101.63 million</b> units
- <b>Wii U</b> [Starbuck, ARM926EJ-S]: sold <b>13.56 million</b> units
- <b>3DS</b> [Main CPU, ARM11 MPCore]: sold <b>75.94 million</b> units
- Total: <b>191.13 million Nintendo devices sold that can "run Java"</b>

Simple division then shows: <b>6.371%</b> of those "over 3 billion devices",
are actually produced by Nintendo, and ironically, would
<b>never see a single byte of JVM bytecode under normal operation</b>.

That's all, just thought that was a really funny statistic that more people should know.
Thanks for reading!
<?php
require '___footer.php'
?>

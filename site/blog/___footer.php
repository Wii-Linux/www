<?php
global $request;
if ($request === null) {
	// we didn't come from index.php
	require("../index.php");
}
// don't request this directly
if (str_contains($request, "/blog/___footer")) {
	do404();
}
require '___version.php'
?>

<footer>
-----------------------------------------------------------
Page generated by the Wii Linux blog manager verion <?php echo($blogman_ver);?>.
Wii Linux blog manager written by Techflash.
</footer>
</pre>
</body>
</html>

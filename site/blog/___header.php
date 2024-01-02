<?php
global $noLoad;
global $request;
global $injectHead;
if ($noLoad === true) {
	return;
}
if ($request === null) {
	// we didn't come from index.php
	require("../index.php");
}
if (str_contains($request, "/blog/___header")) {
	do404();
}

include '___version.php'
?>
<!DOCTYPE html>
<html>
<head>
	<title>Wii Linux - Blog: <?php echo $title?></title>
	<?php
	if ($injectHead !== null) {
		echo($injectHead);
	}
	?>
</head>
<body>
<pre>
Wii Linux Developers Blog
-------------------------

Blog Post
---------

<a href="/blog">Back to list</a>
Title: <?php echo "$title\r\n"?>
Date: <?php echo "$date\r\n"?>
By: <?php echo "$author\r\n"?>



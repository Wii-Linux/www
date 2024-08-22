<?php
$files = glob($_SERVER['DOCUMENT_ROOT'] . '/site/blog/' . '*.php');
global $files;
$metadata = array();
global $metadata;
foreach ($files as $file) {
	// don't include ourself
	if (!str_contains($file, "index.php") && !str_contains($file, "___")) {
		$noLoad = true;
		global $noLoad;

		include $file;
		$post = array("title"=>$title, "date"=>$date, "author"=>$author);

		$fileWithoutExt = pathinfo($file, PATHINFO_FILENAME);
		$metadata[$fileWithoutExt] = $post;
		//echo("<pre>");
		//print_r($metadata);
		//echo("</pre>");
	}
}

// sort it
uasort($metadata, function ($a, $b) {
	return strtotime($b['date']) - strtotime($a['date']);
});

?>

<!DOCTYPE html>
<html lang=en>
<head>
<title>Wii Linux Developers Blog</title>
<?php globalHeadStuff(); ?>
</head>
<body>
<pre>
Wii Linux Developers Blog
-------------------------
<a href="/">Back to main page</a>
<?php
// display it
foreach ($metadata as $file => $data) {
    echo('['.$data['date'].'] '.$data['author'].': <a href="/blog/'.$file.'">'.$data['title']."</a>\r\n");
}
?>

</pre>
</body>
</html>

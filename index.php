<?php
function do404() {
	require $_SERVER['DOCUMENT_ROOT'] . '/404.php';
	die();
}

$request = $_SERVER['REQUEST_URI'];
global $request;
$type = "text/php";
global $type;

if ($request == '/' || $request == '/index.php') {
	// Request for main page
	$file = '/mainPage.php';
}
else if (substr($request, -1) == '/') {
	// Request for a directory
	$file = $request . 'index.php';
}
else if (!preg_match('/\./', $request)) {
	// Request with no extension
	if (file_exists($_SERVER['DOCUMENT_ROOT'] . '/site' . $request . '/index.php')) {
		$file = $request . '/index.php';
	}
	else {
		$file = $request . '.php';
	}
}
else {
	// Request for any other type of file
	$file = $request;
	global $type;
	$type = mime_content_type($_SERVER['DOCUMENT_ROOT'] . '/site' . $file);
	header("Content-Type: $type");
}

$file_path = $_SERVER['DOCUMENT_ROOT'] . '/site' . $file;

if (file_exists($file_path)) {
	global $type;
	if (str_contains($type, "text")) {
		try {
			require $file_path;
		}
		catch (Exception $e) {
			// Display 500.php on any exception
			require $_SERVER['DOCUMENT_ROOT'] . '/500.php';
		}
	}
	else {
		readfile($file_path);
	}
}
else {
	// Display 404.php if file doesn't exist
	do404();
}
?>

<?php
function do404() {
	require $_SERVER['DOCUMENT_ROOT'] . '/404.php';
	die();
}
$isWii = false;
if (strpos($_SERVER['HTTP_USER_AGENT'], 'Opera/9') !== false) {
	$isWii = true;
}
$request = $_SERVER['REQUEST_URI'];
$request = strtok($request, '?');

$type = "text/php";

if ($request == '/' || $request == '/index.php') {
	// Request for main page
	$file = '/mainPage.php';
}
elseif (!preg_match('/\./', $request) || substr($request, -1) == '/') {
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

	$file_path = $_SERVER['DOCUMENT_ROOT'] . '/site' . $file;
	if (file_exists($file_path)) {
		global $type;
		$type = mime_content_type($file_path);
		if (substr($request, -3) == '.js') {
			global $type;
			$type = "text/javascript";
		}
	}
	else {
		readfile($file_path);
	}
	header("Content-Type: $type");
}


$file_path = $_SERVER['DOCUMENT_ROOT'] . '/site' . $file;
if (file_exists($file_path)) {
	global $type;
	if (str_contains($type, "text") && $type !== "text/javascript" && $type !== "text/xml") {
		if (exec('grep \'<?\' '.$file_path)) {
			try {
				require $file_path;
			}
			catch (Exception $e) {
				// Display 500.php on any exception
				require $_SERVER['DOCUMENT_ROOT'] . '/500.php';
			}
		}
	}
	else {
		readfile($file_path);
	}
}
else {
	// Display 404.php if file doesn't exist
	header("Content-Type: text/html");
	do404();
}

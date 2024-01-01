<?php
function do404() {
	require $_SERVER['DOCUMENT_ROOT'] . '/404.php';
	die();
}

$request = $_SERVER['REQUEST_URI'];
global $request;

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
}

$file_path = $_SERVER['DOCUMENT_ROOT'] . '/site' . $file;

if (file_exists($file_path)) {
	try {
		require $file_path;
	}
	catch (Exception $e) {
		// Display 500.php on any exception
		require $_SERVER['DOCUMENT_ROOT'] . '/500.php';
	}
}
else {
	// Display 404.php if file doesn't exist
	do404();
}
?>

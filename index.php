<?php
function do404() {
	require $_SERVER['DOCUMENT_ROOT'] . '/404.php';
	die();
}

function img($name) {
	global $isWii;
	// workaround for Wii's stupid internet channel
	echo("src=\"/icons/");
	if ($isWii) {
		echo($name . "_32x32.png");
	}
	else {
		echo("$name.svg");
	}
	echo("\"");
}

function globalHeadStuff() {
	global $isHTML;
	$isHTML = true;
	echo '<meta name="viewport" content="width=device-width, initial-scale=1" />';
	echo '<meta name="description" content="Small project dedicated to getting modern Linux running on the Nintendo Wii and GameCube" />';
}
$isWii = false;
$isHTML = false;
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
	elseif (file_exists($_SERVER['DOCUMENT_ROOT'] . '/site' . $request . '.php')) {
		$file = $request . '.php';
	}
	elseif (file_exists($_SERVER['DOCUMENT_ROOT'] . '/site' . $request . '/index.html')) {
		$file = $request . '/index.html';
		$type = "text/html";
	}
	else {
		header("Content-Type: text/html");
		do404();
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
	header("Content-Type: $type");
}


$file_path = $_SERVER['DOCUMENT_ROOT'] . '/site' . $file;
if (file_exists($file_path)) {
	global $type;
	if ($type == "text/php") {
		if (exec('grep \'<?\' '.$file_path)) {
			try {
				require $file_path;
				if ($isHTML) {
					require $_SERVER['DOCUMENT_ROOT'] . '/page_footer.php';
				}

			}
			catch (Exception $e) {
				// Display 500.php on any exception
				require $_SERVER['DOCUMENT_ROOT'] . '/500.php';
			}
		}
	}
	else {
		ob_end_flush();
		$len = filesize($file_path);
		header("Content-Length: $len");
		readfile($file_path);
	}
}
else {
	// Display 404.php if file doesn't exist
	header("Content-Type: text/html");
	do404();
}

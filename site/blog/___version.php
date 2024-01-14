<?php
global $request;
if ($request === null) {
	// we didn't come from index.php
	require("../index.php");
}
if (str_contains($request, "/blog/___version")) {
	do404();
}
$blogman_ver = "v0.0.1";
global $blogman_ver;

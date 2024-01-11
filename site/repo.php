<?php
$username = 'Wii-Linux';

// Check if the 'r' GET parameter is set
if (!isset($_GET['r'])) {
    echo "Repository parameter missing.";
    die();
}

// Construct the URL with the repo name
$url = "https://github.com/$username/{$_GET['r']}";

// redirect
header("Location: $url");
return
?>

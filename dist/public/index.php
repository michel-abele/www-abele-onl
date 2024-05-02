<?php

# variable to store the request
$request = $_SERVER['REQUEST_URI'];
$request = preg_replace('/^\//', '', $request);

# switch to include the correct file
$content = '';
switch ($request) {
    case '':
        header('Location: /de');
        break;
    case 'de':
        include '../html/de.php';
        break;
    case 'en':
        include '../html/en.php';
        break;
    default:
        include '../html/404.php';
        header("HTTP/1.0 404 Not Found");
        break;
}

# include the file head and foot
include '../html/file-head.php';
include '../html/file-foot.php';

# build the page
$page = $fileHead . $content . $fileFoot;

# output the page
echo $page;

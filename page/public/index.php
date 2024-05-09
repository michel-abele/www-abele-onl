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
        include '../php/de.php';
        break;
    case 'en':
        include '../php/en.php';
        break;
    default:
        include '../php/404.php';
        header("HTTP/1.0 404 Not Found");
        break;
}

# include the file parts
$page  = file_get_contents('../html/file-head.html');
$page .= $content;
$page .= file_get_contents('../html/file-foot.html');

# function: replace HTML variables
function replaceVariables ($html, $array) {
    foreach ($array as $key => $value) {
        $html = str_replace('#{' . $key . '}', $value, $html);
    }
    return $html;
}

# replace the variables
$page = replaceVariables($page, $var_page);
$page = replaceVariables($page, $var_navbar);

# output the page
echo $page;

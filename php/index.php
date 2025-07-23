<?php
echo "Hello from PHP dir!";
require_once $_SERVER['DOCUMENT_ROOT'] . '/init.php';
//require_once $_SERVER['DOCUMENT_ROOT'] . '/init.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/php/routers/router.php';
function print_info($text)
{
    echo "<pre>";
    print_r($text);
    echo "<pre>";
}

print_info($_GET);
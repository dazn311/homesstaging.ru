<?php
$request = htmlspecialchars(explode("&", $_SERVER['REQUEST_URI'])[0], ENT_QUOTES);

switch (true) {
    case $request == '/':
//        echo $_SERVER['DOCUMENT_ROOT'];///var/www/html/homes_staging/public_html
        require $_SERVER['DOCUMENT_ROOT'] . '/../pages/main-page.php';
        break;
    case $request == '/page':
        echo "router: new page";
        break;
    case str_starts_with($request, "/page/"):
        echo "router: new page3";
        break;
    default:
        echo "404 page";
}

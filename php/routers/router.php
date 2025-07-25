<?php
$request = htmlspecialchars(explode("?", $_SERVER['REQUEST_URI'])[0], ENT_QUOTES);
$path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
print_r($path);

$root_path = dirname(__DIR__);
$root_path2 = dirname($_SERVER['DOCUMENT_ROOT']);

//echo 'req: ' . $request;
switch (true) {
    case $request == '/':
//        echo $_SERVER['DOCUMENT_ROOT'];///var/www/html/homes_staging/public_html
        require "$root_path2/pages/main-page.php";
//        echo "DOCUMENT_ROOT: " . $_SERVER['DOCUMENT_ROOT'] . "\n";
        break;
    case $request == '/page':
        echo "[15]router: new page";
        break;
    case $path == '/user':
        require "$root_path2/pages/user.php";
        break;
//    case preg_match("/^\/user/", $request ):
//        require "$root_path2/pages/user.php";
//        break;
    case str_starts_with($request, "/pages/mitinskii-les"):
        require "$root_path2/pages/mitinskii-les.php";
        break;
    default:
        echo "404 page";
}

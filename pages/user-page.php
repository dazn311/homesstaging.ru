<?php
session_start();
$dbh = require_once "../bin/connectPDO.php";
require_once "../bin/api.php";
require '../bin/auth.php';
require '../bin/helpers.php';

use Utils\GetLink;
$user = trim($_GET["name"] ?? '');
$limit = trim($_GET["limit"] ?? '15');
$user = filter_var($user, FILTER_SANITIZE_FULL_SPECIAL_CHARS);

//get data;
// $result = addUserPDO($dbh,"userName",'userMail');
// $result = addUserPDO($dbh,"userName2",'userMail2');
$result = getUsersPDO($dbh,$limit);

$root_path = dirname($_SERVER['DOCUMENT_ROOT']);

if (!check_auth($dbh)) {
//    header("Location: login");
    redirect('/login');
}

$user = get_user($dbh);

//////////
//$user2 = getUserPDO($dbh,$user,$limit);//false| user;
//if (!$user2) {
//    die('no user in db');
//}
// var_dump($user2);
//////////

// if(mb_strlen($user) <10) {
//   echo $user.PHP_EOL;
// }

// $searchParams = $_GET;
// foreach ($searchParams as $row) {
//     echo $row;
// }
// var_dump($searchParams('user'));
// echo $_SERVER['REMOTE_ADDR'];
// foreach ($_SERVER as $parm => $value)  echo "$parm = '$value'\n";
// $conn->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
</head>
<body>
<?php
require '../template/navbar.php';
// echo GetLink::get('auth-page');
if ($result) {
    foreach ($result as $row) {
        echo '<li>' . $row["email"] . ' (' . $row["name"] . ')' . $row["createDate"] . '</li>';
    }
}

//if ($user2) {
//    echo '<li>' . $user2["name"] . ' (' . $user2["email"] . ')' . '</li>';
//}


// try {
//   $homepage = file_get_contents('https://www.homesstaging.online/mitino1-details.html');
//   var_dump($homepage);
// } catch (\JsonException $e) {
//           echo $e;
// }

?>
</body>
</html>
<?php
//session_start();
$dbh = require_once "../bin/connectPDO.php";
require_once "../bin/api.php";
//require "../Lib/Utils/printLine.php";

$user = trim($_GET["name"] ?? '');
$limit = trim($_GET["limit"] ?? '15');
$user = filter_var($user, FILTER_SANITIZE_FULL_SPECIAL_CHARS);


$link = new Utils\GetLink;
//echo printLine("[12user] name: $user- limit: $limit");
//var_dump($link->linkAlias);
//phpinfo();
//echo get_called_class(Utils\GetLink::get('33'));
//echo Utils\GetLink::get('auth-page');

//get data;
// $result = addUserPDO($dbh,"userName",'userMail');
// $result = addUserPDO($dbh,"userName2",'userMail2');
 $result = getUsersPDO($dbh,$limit);

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
</head>
<body>
<?php
// var_dump($result);

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
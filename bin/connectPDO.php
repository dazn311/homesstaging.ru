<?php

$options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_STRINGIFY_FETCHES => false,
    PDO::ATTR_EMULATE_PREPARES => false
];
$DBH_ARRAY = array (
    "host" => $_ENV['DB_HOST'],
    "dbname" => $_ENV['DB_DATABASE'],
    "port" => $_ENV['DB_PORT']
);
$userName = $_ENV['DB_USERNAME'];
$userPassword = $_ENV['DB_PASSWORD'];

$dbhStr = create_dbh($DBH_ARRAY);

try {
    $dbh = new PDO($dbhStr, $userName, $userPassword,$options);
    return $dbh;
} catch (PDOException $e) {
    die($e->getMessage());
}

function create_dbh(array $array): string
{
    $res = [];
    foreach ($array as $key => $value) {
        $res[] = $key . '=' . $value;
    }

    return "mysql:" . implode(';', $res);
}
<?php
declare(strict_types=1);
  $options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_STRINGIFY_FETCHES => false,
    PDO::ATTR_EMULATE_PREPARES => false
  ];
  // print_r(PDO::getAvailableDrivers());
  // Array ( [0] => dblib [1] => mysql [2] => odbc [3] => pgsql [4] => sqlite )
try {
    $dsn = "mysql:host=mysql;dbname=example;port:3309;charset=utf8mb4";
    $dbh = new PDO($dsn, 'root', '12345',$options);
    return $dbh;
} catch (PDOException $e) {
    die($e->getMessage());
}

//    $dsn2 = "mysql:host=mysql-hst;dbname=example;port=3306";
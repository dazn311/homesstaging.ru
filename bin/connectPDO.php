<?php

  $options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_STRINGIFY_FETCHES => false,
    PDO::ATTR_EMULATE_PREPARES => false
  ];
  // print_r(PDO::getAvailableDrivers());
  // Array ( [0] => dblib [1] => mysql [2] => odbc [3] => pgsql [4] => sqlite )
try {
    $dbh = new PDO('mysql:host=mysql-hst;dbname=example;port=3306', 'root', '12345',$options);
} catch (PDOException $e) {
    die($e->getMessage());
}
<?php

  $options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_STRINGIFY_FETCHES => false,
    PDO::ATTR_EMULATE_PREPARES => false
  ];
  $dbh = new PDO('mysql:host=localhost;dbname=example;port=3309', 'root', '12345',$options);
  // print_r(PDO::getAvailableDrivers());
  // Array ( [0] => dblib [1] => mysql [2] => odbc [3] => pgsql [4] => sqlite )
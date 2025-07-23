<?php

declare(strict_types=1);

/** @var PDO[] $connections */
$connections[] = require 'mysql_connection.php';
//$connections[] = require 'pgsql_connection.php';
//$connections[] = require 'sqlite_connection.php';

$email = 'daz4@gmail.com';
$password = '12345';

foreach ($connections as $pdo) {
    $sth = $pdo->prepare('SELECT * FROM users WHERE email = :email');
    $sth->execute(['email' => $email]);
    $row = $sth->fetch();
    if (!empty($row) && password_verify($password, $row['password'])) {
        echo "success id is {$row['id']}" . PHP_EOL;
    } else {
        echo 'fail' . PHP_EOL;
    }
}

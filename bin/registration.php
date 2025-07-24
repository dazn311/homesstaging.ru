<?php
declare(strict_types=1);

/** @var PDO[] $connections */
$connections[] = require 'mysql_connection.php';
//$connections[] = require 'pgsql_connection.php';
//$connections[] = require 'sqlite_connection.php';

$email = 'registration55@gmail.com';
$password = '12345';
$createDate = date('Y-m-d H:i:s');

foreach ($connections as $connection) {
    $sth = $connection->prepare('INSERT INTO users (email, password,createDate) values (:email, :password, :createDate)');
    $sth->execute([
        'email' => $email,
        'password' => password_hash($password, PASSWORD_DEFAULT),
        'createDate' => $createDate
    ]);
    var_dump($connection->lastInsertId());
}
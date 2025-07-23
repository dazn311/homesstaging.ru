<?php
declare(strict_types=1);

/** @var PDO[] $connections */
$connections[] = require 'mysql_connection.php';
//$connections[] = require 'pgsql_connection.php';
//$connections[] = require 'sqlite_connection.php';

$email = 'registration@gmail.com';
$password = '12345';

foreach ($connections as $connection) {
    $sth = $connection->prepare('INSERT INTO users (email, password) values (:email, :password)');
    $sth->execute([
        'email' => $email,
        'password' => password_hash($password, PASSWORD_DEFAULT)
    ]);
    var_dump($connection->lastInsertId());
}
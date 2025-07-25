<?php

declare(strict_types=1);

/** @var PDO[] $connections */
$pdo = require 'mysql_connection.php';

$email = 'daz4@gmail.com';
$password = '12345';

$sth = $pdo->prepare('SELECT * FROM users WHERE email = :email');
$sth->execute(['email' => $email]);
$row = $sth->fetch();
if (!empty($row) && password_verify($password, $row['password'])) {
    echo "success id is {$row['id']}" . PHP_EOL;
} else {
    echo 'fail' . PHP_EOL;
}

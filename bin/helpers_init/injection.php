<?php

declare(strict_types=1);

$email = 'test5@gmail.com';
$password = 'example';
//$email = "evil@gmail.com'; DROP TABLE test #";
//$example_hash = password_hash($password, PASSWORD_DEFAULT);
//$email = "something' union select id, email, '{$example_hash}' as 'password' from users where id = 5 #";

$pdo = require 'connectPDO.php';

$while = ['id', 'email'];

//$sql = "SELECT * FROM users WHERE email = :email";
$sql = "SELECT * FROM users WHERE email = '{$email}'";
echo "SQL: {$sql}" . PHP_EOL;
//$sth = $pdo->prepare($sql);
//$sth->execute(['email' => $email]);
$sth = $pdo->query($sql);
$user = $sth->fetch();
if ($user && password_verify($password, $user['password'])) {
    echo 'valid';
} else {
    echo 'invalid';
}

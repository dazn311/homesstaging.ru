<?php

function debug($data = []): void
{
    echo '<pre>' . print_r($data, 1) . '</pre>';
}

function register($pdo,array $data = []): bool
{
    $stmt = $pdo->prepare("SELECT count(*) FROM users WHERE email = ?");
    $stmt->execute([$data['email']]);
    if ($stmt->fetchColumn()) {
        $_SESSION['error'] = 'Email already exists';
        return false;
    }
    $password = password_hash($data['password'], PASSWORD_DEFAULT);
    $stmt = $pdo->prepare("insert into users (name, email, password) values (?, ?, ?)");
    $stmt->execute([$data['name'], $data['email'], $password]);
    $_SESSION['success'] = 'User created';
    return true;
}

function login($pdo,$data): bool
{
//    global $pdo;
    $stmt = $pdo->prepare("SELECT * FROM users WHERE email = ?");
    $stmt->execute([$data['email']]);

    if (!$user = $stmt->fetch()) {
        $_SESSION['error'] = 'Wrong email or password';
        return false;
    }
    if (!password_verify($data['password'], $user['password'])) {
        $_SESSION['error'] = 'Wrong email or password';
        return false;
    }
    $_SESSION['user'] = $user['id'];
    $_SESSION['success'] = 'Successfully logged in';

    if (!empty($data['remember_me'])) {
        $remember = md5(uniqid(rand(), true) . $user['id'] . microtime(true));
        $stmt = $pdo->prepare("update users set remember_me = ? WHERE id = ?");
        $stmt->execute([$remember, $user['id']]);
        setcookie('remember_me', $remember, time() + 3600 * 24 * 30, '/');
    }

    return true;
}

function check_auth($pdo): bool
{
    if (isset($_SESSION['user'])) {
        return true;
    } elseif (isset($_COOKIE['remember_me'])) {
        $remember_me = $_COOKIE['remember_me'];
        $stmt = $pdo->prepare("SELECT id FROM users WHERE remember_me = ?");
        $stmt->execute([$remember_me]);
        if ($user_id = $stmt->fetchColumn()) {
            $_SESSION['user'] = $user_id;
            return true;
        }
    }
    return false;
}

function get_user($pdo)
{
    if (!check_auth($pdo)) {
        return null;
    }
    $stmt = $pdo->prepare("select id, name, email FROM users WHERE id = ?");
    $stmt->execute([$_SESSION['user']]);
    return $stmt->fetch();
}

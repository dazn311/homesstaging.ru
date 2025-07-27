<?php

function debug($data = []): void
{
    echo '<pre>' . print_r($data, 1) . '</pre>';
}

function register($pdo,array $data = []): bool
{
//    global $pdo;
    $email = $data['email'] ?? '';
    $passwordData = $data['password'] ?? '';
    $name = $data['name'] ?? '';

    $stmt = $pdo->prepare("SELECT count(*) FROM users WHERE email = ?");
    $stmt->execute([$email]);
    if ($stmt->fetchColumn()) {
        $_SESSION['error'] = 'Email already exists';
        return false;
    }
    $password = password_hash($passwordData, PASSWORD_DEFAULT);
    $stmt = $pdo->prepare("insert into users (name, email, password) values (?, ?, ?)");
    $stmt->execute([$name, $email, $password]);
    $_SESSION['success'] = 'User created';
    return true;
}

function login($pdo,$data): bool
{
//    global $pdo;
    $email = $data['email'] ?? '';
    $password = $data['password'] ?? '';
    $remember_me = $data['remember_me'] ?? '';

    $stmt = $pdo->prepare("SELECT * FROM users WHERE email = ?");
    $stmt->execute([$email]);

    if (!$user = $stmt->fetch()) {
        $_SESSION['error'] = 'Wrong email or password';
        return false;
    }
    if (!password_verify($password, $user['password'])) {
        $_SESSION['error'] = 'Wrong email or password';
        return false;
    }
    $_SESSION['user'] = $user['id'];
    $_SESSION['success'] = 'Successfully logged in';

    if (!empty($remember_me)) {
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
        if (!$pdo) {
            return false;
        }
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

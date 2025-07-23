<?php
require_once 'vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

// Теперь переменные из .env доступны
$databaseUrl = $_ENV['DATABASE_URL'];
//$databaseName = $_ENV['DB_DATABASE'];
echo "Database URL: " . $databaseUrl . "\n";
//echo "Database Name: " . $databaseName . "\label{code:php-dotenv}";




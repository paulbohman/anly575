<?php

/**
* Connect to the database
*/
$host = '127.0.0.1';
$db   = 'anly575take2';
$user = 'webserveruser';
$pass = 'th84#nR$x!jo';
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];
try {
     $pdo = new PDO($dsn, $user, $pass, $options);
} catch (\PDOException $e) {
     throw new \PDOException($e->getMessage(), (int)$e->getCode());
}

$sql = 'SELECT * FROM `users`;';

$data = $pdo->query($sql)->fetchAll(PDO::FETCH_OBJ);

echo '<pre>';
print_r($data);
echo '</pre>';
<?php

/**
* Connect to the database
*/
$host = '127.0.0.1';
$db   = 'put-database-name-here';
$user = 'put-username-here';
$pass = 'put-password-here';
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

/**
 * Define the query you want to run
 */
$sql = 'SELECT * FROM `users`;';


/**
 * Run the query and return the results as an array of objects
 */
$data = $pdo->query($sql)->fetchAll(PDO::FETCH_OBJ);

/**
 * show the results on the screen for debugging purposes
 */
echo '<pre>';
print_r($data);
echo '</pre>';
<?php

/**
* Connect to the database
*/
$host = 'localhost';
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

$sql = 'SELECT * FROM `users`;';

$data = $pdo->query($sql)->fetchAll(PDO::FETCH_OBJ);

$nl = "\n";

$pageStart = '<!DOCTYPE html>
<html lang="en">
<head>
<title>Data practice page</title>
<style>
table,td,th {
      border-collapse: collapse;
      border: 1px solid #1e1e1e;
}
td,th {
     padding:5px;
}
</style>
</head>
<body>
<main>
<h1>Data practice page</h1>
';

$pageEnd = '
</main>
</body>
</html>';


$debug = '<p>Debug view of query results:</p>' . $nl;
$debug .= '<pre>' . $nl;
$debug .= print_r($data, true);
$debug .= '</pre>' . $nl;

/**
 * Render the results in a table
*/
$tableStart = $nl . '<table>' . $nl;
$tableStart .= '    <caption>Users</caption>' . $nl;

$tableHeaders = '    <tr>' . $nl;
$tableHeaders .= '        <th scope="col">ID</th>' . $nl;
$tableHeaders .= '        <th scope="col">First name</th>' . $nl;
$tableHeaders .= '        <th scope="col">Last name</th>' . $nl;
$tableHeaders .= '        <th scope="col">Email</th>' . $nl;
$tableHeaders .= '    </tr>' . $nl;

$tableEnd = '</table>' . $nl;

$tableRows = null;
foreach ($data as $key => $row) {
     $tableRows .= '    <tr>' . $nl;
     $tableRows .= '        <td>' . $row->id . '</td>' . $nl;
     $tableRows .= '        <td>' . $row->firstname . '</td>' . $nl;
     $tableRows .= '        <td>' . $row->lastname . '</td>' . $nl;
     $tableRows .= '        <td>' . $row->email . '</td>' . $nl;
     $tableRows .= '    </tr>' . $nl;
}

echo $pageStart;
echo $debug;
echo $tableStart . $tableHeaders . $tableRows . $tableEnd;
echo $pageEnd;
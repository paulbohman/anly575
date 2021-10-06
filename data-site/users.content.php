<?php
$db = new Database();

$sql = 'SELECT `id` FROM `users`;';

$users = $db->object('User');

echo '<pre>';
print_r($users);
echo '</pre>';
<?php
$db = new Database();

$users = $db->object('User');
echo '<pre>';
print_r($users);
echo '</pre>';
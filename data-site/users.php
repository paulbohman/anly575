<?php
include 'init/init.php';

$values->title = 'Users';
$values->heading = 'Users';

$page = new Page('main.page');
$page->render($values, __FILE__);
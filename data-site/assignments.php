<?php
include 'init/init.php';

$values->title = 'Assignments';
$values->heading = 'Assignments';

$page = new Page('main.page');
$page->render($values, __FILE__);
<?php
include 'init/config.php';
include 'init/init.php';

$values->title = 'Home';
$values->heading = 'Home';

$page = new Page('main.page');
$page->render($values, __FILE__);
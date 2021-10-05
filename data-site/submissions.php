<?php
include 'init/config.php';
include 'init/init.php';

$values->title = 'Submissions';
$values->heading = 'Submissions';

$page = new Page('main.page');
$page->render($values, __FILE__);
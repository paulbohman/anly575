<?php
include 'init/init.php';

$values->title = 'Home';
$values->heading = 'Home';
//$values->header = TEMPLATE_PATH . 'secondary.header.template.php';

$page = new Page('main.page');
$page->render($values, __FILE__);
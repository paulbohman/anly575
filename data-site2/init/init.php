<?php
ob_start();
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include '/Users/paulbohman/GitHub/anly575/data-site2/init/config.php';

include CLASS_PATH . 'Base.class.php';
include CLASS_PATH . 'Session.class.php';
include CLASS_PATH . 'Database.class.php';
include CLASS_PATH . 'Page.class.php';

$values = new stdClass();


// start or resume existing PHP session
session_start();

// create an instance of our Session class
$session = new Session();

$loggedIn = $session->checkLoginStatus();

//$session->print(true);

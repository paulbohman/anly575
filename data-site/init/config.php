<?php

// localhost
if ( ($_SERVER['HTTP_HOST'] == 'localhost') || ($_SERVER['HTTP_HOST'] == '127.0.0.1') ) {
	define("ROOT_PATH", '/Users/paulbohman/GitHub/anly575/data-site/');
	define("PROTOCOL", 'http://');
	define("DOMAIN", 'localhost/');
	define('DB', array(
		'host' => 'localhost',
		'db'   => 'anly575take2',
		'user' => 'webserveruser',
		'pass' => 'th84#nR$x!jo',
		'charset' => 'utf8mb4'
	));
	
} else {
	// public server
	define("ROOT_PATH", '/home/paulbohm/public_html/data-site/');
	define("PROTOCOL", 'http://');
	define("DOMAIN", 'paulbohman.georgetown.domains/');
	define('DB', array(
		'host' => 'paulbohman.georgetown.domains',
		'db'   => 'paulbohm_anly575',
		'user' => 'paulbohm_user1',
		'pass' => '.57Z(thIm7SR',
		'charset' => 'utf8mb4'
	));
}

define("ADMIN_EMAIL", 'pb924@georgetown.edu');
define("CLASS_PATH", ROOT_PATH . '/classes/');
define("TEMPLATE_PATH", ROOT_PATH . '/templates/');
define("SUBFOLDER", 'data-site/');
define("URL_ROOT", PROTOCOL . DOMAIN . SUBFOLDER);
define ('TABLES', array(
	'User' => 'users',
	'Assignment' => 'assignments',
	'Submission' => 'submissions',
	'Course' => 'courses'
));
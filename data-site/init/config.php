<?php
define("ROOT_PATH", '/Users/paulbohman/GitHub/anly575/data-site/');
define("CLASS_PATH", ROOT_PATH . '/classes/');
define("TEMPLATE_PATH", ROOT_PATH . '/templates/');
define("PROTOCOL", 'http://');
define("DOMAIN", 'localhost/');
define("SUBFOLDER", 'data-site/');
define("URL_ROOT", PROTOCOL . DOMAIN . SUBFOLDER);
const TABLES = array(
	'User' => 'users',
	'Assignment' => 'assignments',
	'Submission' => 'submissions'
);
const DB = array(
	'host' => 'localhost',
	'db'   => 'anly575take2',
	'user' => 'webserveruser',
	'pass' => 'th84#nR$x!jo',
	'charset' => 'utf8mb4'
);
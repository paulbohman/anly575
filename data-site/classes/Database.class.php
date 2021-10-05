<?php

class Database {

	function pdo() {
		$host = '127.0.0.1';
		$db   = 'anly575take2';
		$user = 'webserveruser';
		$pass = 'th84#nR$x!jo';
		$charset = 'utf8mb4';

		$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
		$options = [
		    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
		    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
		    PDO::ATTR_EMULATE_PREPARES   => false,
		];
		try {
		     $pdo = new PDO($dsn, $user, $pass, $options);
		     //echo 'try succeeded';
		} catch (\PDOException $e) {
			//echo 'try failed';
		     throw new \PDOException($e->getMessage(), (int)$e->getCode());
		}
		return $pdo;
	}

	function tableName($objectType) {
		include_once('classes/'. $objectType . '.class.php');
		$tables = array(
			'User' => 'users',
			'Assignment' => 'assignments',
			'Submission' => 'submissions'
		);
		if (array_key_exists($objectType, $tables)) {
			//echo $tables[$objectType];
			return $tables[$objectType];
		} else {
			return false;
		}
	}

	function object($objectType, $query = null) {
		if (!$query) {
			if (!$tableName = $this->tableName($objectType)) {
				echo '<p>Error: unknown table</p>';
				return false;
			}
			$query = "SELECT * FROM `$tableName`";
		}
		$pdo = $this->pdo();
		$data = $pdo->query($query)->fetchAll(PDO::FETCH_CLASS, $objectType);
		return $data;
	}

	function query($query = null) {
		$pdo = $this->pdo();
		$data = $pdo->query($query)->fetchAll(PDO::FETCH_OBJ);
		return $data;
	}


}
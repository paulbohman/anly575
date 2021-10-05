<?php

class Database {

	/**
	 * Connect to the database
	 */
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
		} catch (\PDOException $e) {
		     throw new \PDOException($e->getMessage(), (int)$e->getCode());
		}
		return $pdo;
	}

	/**
	 * Match the class names with the corresponding table names
	 */
	function tableName($objectType) {
		include_once('classes/'. $objectType . '.class.php');
		if (array_key_exists($objectType, TABLES)) {
			return TABLES[$objectType];
		} else {
			return false;
		}
	}

	/**
	 * submit a query that returns a particular type of object
	 */
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

	/* submit a custom query */
	function query($query = null) {
		$pdo = $this->pdo();
		$data = $pdo->query($query)->fetchAll(PDO::FETCH_OBJ);
		return $data;
	}


}
<?php namespace inyavicsage;

use \PDO;
use \PDOException;

class DB {
	private static $dsn;
	private static $username;
	private static $password;

	private static $conn;

	public static function conn($DBPos) {
		$config = include 'db/config.php';

		self::$dsn = $config[$DBPos]['dsn'];
		self::$username = $config[$DBPos]['username'];
		self::$password = $config[$DBPos]['password'];

		try {
			self::$conn = new PDO(self::$dsn, self::$username, self::$password);
			self::$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		} catch (PDOException $e) {
			echo 'Database connection failed: ', $e->getMessage();
		}
	}

	public static function quote($str) {
		return self::$conn->quote($str);
	}

	public static function query($SQLStatement) {
		try {
			return self::$conn->query($SQLStatement);
		} catch (PDOException $e) {
			echo 'Database query failed: ', $e->getMessage();
		}
	}
}
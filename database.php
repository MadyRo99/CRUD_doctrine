<?php

class Database {

	private static $em = null;

	public static function getConnection()
	{
		include (__DIR__."/options.php");

		if (self::$em == null) {
			try {
				self::$em = $entityManager;
			} catch (PDOException $e) {
				echo $e->getMessage();
			}
		}
		return self::$em;
	}

}
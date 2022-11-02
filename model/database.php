<?php 
	class Database{
		// private $servername = 'localhost' ;
		// private $username 	= 'root' ;
		// private $password 	= '' ;
		// private $dbname 	= 'test' ;

		public static $connect = null;
		
		public function __construct( ){
			self::$connect = new mysqli( DB_HOST, DB_USER, DB_PASSWORD, DB_NAME );
		}
		
	}
	new Database();
?>
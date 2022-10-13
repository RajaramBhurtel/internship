<?php 
	class Database{
		private $servername = 'localhost' ;
		private $username 	= 'root' ;
		private $password 	= '' ;
		private $dbname 	= 'test' ;

		public static $connect = null;
		
		public function __construct( ){
			self::$connect = new mysqli( $this->servername, $this->username, $this->password, $this->dbname );
		}
		
	}
	new Database();
?>
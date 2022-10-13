<?php 
	require 'database.php';
	
	class Base_Model{
		public function separater( $data, $operator = 'AND' ){
			$qry = '';
			foreach ( $data as $key => $val ){
				$qry .= ( $qry == "" ) ? "" : " $operator ";
				$qry .= "$key = '$val'";				
			}
			return $qry;
		}

		public function query(){
			return Database::$connect->query( $this->sql );
		}

		public function fetch(){
			$query = $this->query();
			return mysqli_fetch_all( $query, MYSQLI_ASSOC );
		}

		public function get_by( $data ){
			$qry = $this->separater( $data );
			$this->sql = "SELECT * FROM $this->table WHERE $qry";
			return $this->fetch() ;
		}

		public function save( $data ){
			$qry = $this->separater( $data, ',' );
			$this->sql = "INSERT INTO $this->table SET $qry";
			$result = $this->query( );
			return true;
		}
	}

?>
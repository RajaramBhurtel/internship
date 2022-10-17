<?php 
	require 'database.php';
	
	class Base_Model{
		private $per_page = 10;
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

		public function get( $page = false ){
			$this->sql = "SELECT * FROM $this->table"; 

			if( false != $page ){
				$first_page_result = ( $page - 1 ) * $this->per_page;
				$this->sql .=  " LIMIT $first_page_result, $this->per_page";
			}
			
			return $this->fetch();
		}

		public function save( $data ){
			$qry = $this->separater( $data, ',' );
			$this->sql = "INSERT INTO $this->table SET $qry";
			$result = $this->query( );
			return true;
		}
		public function delete( $id ){
			$this->sql = "DELETE FROM $this->table WHERE id = $id";
			$result = $this->query(  );
		}
		
		public function update(  $data=array() , $id ){
			$qry = $this->separater( $data, ',' );
			$this->sql="UPDATE  $this->table SET $qry";
            $this->sql .=" WHERE id= $id";
            $result = $this->query(  );
		}

		public function get_total_rows(  ){
			$this->sql = "SELECT COUNT( * ) FROM $this->table";
			$result = $this->query(  );
			$total_rows = mysqli_fetch_array( $result )[0];
			return $total_rows;
		}

		public function get_total_pages(){
			$total_rows = $this->get_total_rows();
			$total_pages = ceil( $total_rows / $this->per_page );
			return $total_pages;
		}
	}

?>
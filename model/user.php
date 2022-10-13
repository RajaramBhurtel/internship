<?php 
	include 'base_model.php';
	
	class User extends Base_Model{
		protected $table 	= "tbl_user";
		private $columns 	="";
		public $value 		= "";
		public $qry 		= "";
        		
	}
?>
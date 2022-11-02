<?php 

class Helper{
	public function require( $file, $data = false ){
		
		if( $data ){
			extract( $data );
		
		}
		
		require_once PATH . $file . '.php';
	}

	
}
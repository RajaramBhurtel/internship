<?php 
	function cleanArr( &$array ){

		foreach( $array as $key => $val ){
			if (! is_array( $val ) ) {
				$array[$key] =  trim( stripslashes( strip_tags( $val ) ) );
			}else{

				cleanArr( $val );
			}	
		}
	}

?>

<?php 
	function get_array( $array ){
  		$len = count($array);
  		$i = 1;
  		$newarr = [];
  		foreach($array as $key => $arr){
  			if ( $i < $len) {
  				$newarr[$key] = $arr;
  				$i ++;
  			}
  		}
		return $newarr;
  	}
?>
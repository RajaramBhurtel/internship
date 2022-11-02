<?php 
	class Transient{

		protected static $instance = null;

		public static function get_instance(){
			if( self::$instance ){
				return self::$instance;
			}

			self::$instance =  new self();
			return self::$instance;
		}

		public function set( $key, $transient ){
	        $_SESSION[ $key ] = $transient;
      	}

        public function get( $key ){
        	$transient = $_SESSION[ $key ];
        	unset( $_SESSION[ $key ] );
	        return $transient;  
      }

	}

?>
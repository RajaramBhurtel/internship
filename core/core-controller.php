<?php 
class Core_Controller extends Helper{
	
	public static $instance = null;
	public static $count = 0;

	public static function get_instance(){

		if( !self::$instance ){
			self::$instance = new self();
		}

		return self::$instance;
	}

	public function __construct(){
		if( 0 == self::$count ){
			self::$count++;
			$this->load();
		}
	}

	public function load(){
		$query = isset( $_GET[ 'query' ] ) ?  $_GET[ 'query' ]  : $GLOBALS[ 'default_controller'] . '/index';
		$temp = $query;
		$query = explode( '/' , $query);
		
		$c = $query[ 0 ];
		if( !isset( $query[ 1 ] ) || empty( $query[ 1 ] ) ){
			$query[ 1 ] = 'index';
		}

		$m = $query[ 1 ];

		$public_routes = [ 'user', 'user/', 'user/index', 'user/index/', 'user/signup', 'user/signup/', 'user/login', 'user/login/'  ];

		$admin_methods = ['view_all', 'delete', 'edit'];
		if ( ! $this->is_admin() &&  in_array( $m, $admin_methods)  ) {
			echo "You don`t have permission.";
			die;
		}

		if ( is_file( 'controller/' .$c. '.php') ) {
			$this->require( 'controller/' . $c );
			$class = ucfirst( $c ) . '_Controller';
			$instance = new $class();
			$data = array_splice( $query, 2 );
			
			if ( ! method_exists( $instance, $m ) ) {
				$this->set_transient( 'msg' , $m ." not defined.");
				$this->redirect( 'index' );

			}

			if ( in_array( $temp, $public_routes) && $this->is_logged_in()) {

				$data = [ 'action' => 'home' ];
				$m = 'index';
			}
			
			call_user_func_array( array( $instance, $m ), [ $data ] );
		}else{
			
			echo "page not found. 404";
		}
	
	}

	public function load_view( $view, $data = false ){
		if ( ! is_file( 'view/' .$view. '.php' ) ) {
			echo "page not found. 404";
			die; 
		}
		$this->require( 'view/' . $view, $data );
		
	}

	public function load_model( $model ){
		$this->require( 'model/' . $model );
		$class = ucfirst( $model ) . '_Model';
		return new $class();
	}

	public function is_logged_in(){
		if ( isset( $_SESSION[ 'user' ] ) ) {
			return true;
		}else{
			return false;
		}
	}

	public function is_admin(){
		if ( isset( $_SESSION[ 'user' ] ) && ( $_SESSION[ 'user'] ) == 'admin') {
			return $_SESSION[ 'user'];die;
		}else{
			return false;
		}
	}

	public function is_session( $name ){
		if ( isset( $_SESSION[ $name ] ) ) {
			return true;
		}
	}

	public function logout(){
		session_destroy();
		unset($_SESSION[ 'user' ]);
		$this->redirect('user/login');
	}

	public function redirect( $location ){
		// $this->load_view( $location );
		header( 'location:/office/'.$location );
	}

	public function error_box(){
		
		if ($this->is_session('msg')) {
			echo"<div class='alert1' id='hideMeAfter5Seconds'>";
			echo $this->transient()->get('msg');
			echo "</div>";
		} 
		if ($this->is_session('success')) {
			echo"<div class='alert2' id='hideMeAfter5Seconds'>";
			echo $this->transient()->get('success');
			echo "</div>";
		}

		
	}

	
}

Core_Controller::get_instance();
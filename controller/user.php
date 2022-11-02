<?php
	class User_Controller extends Core_Controller{

	private $errors = array();
	/**
	 * Loading default files and routing
	 **/
	public function index( $data = false ){
		$data = empty( $data ) ? [ 'action' => 'login' ] : $data;

		$this->load_view( 'default', $data );	
	}
	public function login(){

		$data 	= $this->get_data();

		if ( null == $data) {
			$this->redirect( 'user/index' );
			die;
		}

		$user_m = $this->load_model( 'user' );

		if ( isset( $_POST[ 'login' ] ) ) {
			$username = $_POST[ 'username' ];
			$password = $_POST[ 'password' ];

			if( empty( $username )){
				 $this->errors[ 'username' ] = "Username cannot be empty" ;
			}elseif ( !preg_match( "/^\S.*[ a-zA-Z-' ]*$/",$username )) {
    			 $this->errors[ 'username' ] = "Only letters,numbers and white space allowed" ; 
    		}
    		

			if( empty( $password )){
				$this->errors[ 'password' ] = "Password cannot be empty" ;
			}elseif ( strlen( $password ) < 5 ){
				 $this->errors[ 'password' ] = "Password must be greater than 5 characters" ;
			}

		}
		
		if ( 0 == count( $this->errors) ) {
			$result = $user_m->get_by( $data );

			if ( null != $result){
				$data = [
					'action' => 'home'
				];
				$this->transient()->set( 'user' , $result[0]['Username'] );
				$this->transient()->set( 'success' , "Logged in successful");
				$this->index( $data );
				
			}else{

				$this->transient()->set( 'msg' , "Wrong username or password.");
				$this->index( );
				
			}
		}else{
			$this->index( );
		}
		
	}
	public function transient(){
		return $transient = Transient::get_instance();
	}
	public function display_error() {
		if (count($this->errors) > 0){
			echo ' <div class="alert1" id="hideMeAfter5Seconds">';
				
				
				foreach ($this->errors as $key => $error){
					echo $error .'<br>';
				}
			echo '</div>';
		}
	}

	public function signup(){
		$data 	= $this->get_data();
		if ( null == $data) {
			$data = [
				'action' => 'signup'
			];
			$this->index( $data );
			die;
		}
		$user_m = $this->load_model( 'user' );

		if ( isset( $_POST[ 'signup' ] ) ) {
			$username = $_POST[ 'username' ];
			$lastname = $_POST[ 'lastname' ];
			$email = $_POST[ 'email' ];
			$password = $_POST[ 'password' ];

			if( empty( $username )){
				$this->errors[ 'username' ] = "Username cannot be empty" ;
			}elseif ( !preg_match( "/^\S.*[ a-zA-Z-' ]*$/",$username )) {
    			$this->errors[ 'username' ] = "Only letters,numbers and white space allowed" ; 
    		}

    		if( empty( $lastname )){
				 $this->errors[ 'lastname' ] = "Lastname cannot be empty" ;
			}elseif ( !preg_match( "/^\S.*[ a-zA-Z-' ]*$/",$lastname )) {
    			$this->errors[ 'lastname' ] = "Only letters,numbers and white space allowed"; 
    		}

    		if( empty( $email )){
				$this->errors[ 'email' ] = "Email cannot be empty" ;
			}elseif ( !filter_var( $email, FILTER_VALIDATE_EMAIL )) {
			    $this->errors[ 'email' ] = "Invalid email format" ; 
    		}

			if( empty( $password )){
				$this->errors[ 'password' ] = "Password cannot be empty" ;
			}elseif ( strlen( $password ) < 5 ){
				$this->errors[ 'password' ] = "Password must be greater than 5 characters";
			}

			$check = $user_m->get_by( array(
				'username' => $username
			));
			if ( $check) {
				$this->errors[ 'username' ] = "Username already exists." ;
			}

		}

		if ( 0 == count( $this->errors) ) {

					
			$result = $user_m->save( $data );

			if ( null != $result){
				$data = [
					'action' => 'signup'
				];
				$this->transient()->set( 'success' , "Successful signup. Proceed to <a href='/office/'>login. </a>");
				$this->index( $data );
				
			}else{
				$this->redirect( 'user' );
				die;
			}
		}else{
			$data = [
					'action' => 'signup'
				];
			$this->index( $data );
		}
	}

	public function get_data(){
		$array = $_POST;
		array_pop( $array );
		// print_r($array);
	
		return $array;
		
	}

	public function view_all( $data = false ){
		$user_m = $this->load_model( 'user' );
		if (empty($data[ 0 ])) {
			$data[ 0 ] = 1 ;	
		}
		$result = $user_m->get($data[ 0 ]);
		$this->index();
		$this->load_view( 'users', $result );	
	}
	public function delete( $data = false ){
		$user_m = $this->load_model( 'user' );
		$result = $user_m->delete($data[ 0 ]);
		$this->transient()->set( 'msg' , "Data deleted .");	
		$this->index();
		$this->load_view( 'home');
	
	}

	public function edit( $data = false ){
		$user_m = $this->load_model( 'user' );
		$array = array(
			'id' => $data[ 0 ]
		);
		if ( isset( $_POST[ 'update' ] ) ) {
			$udata =  $this->get_data();
			$res  =  $user_m->update( $udata, $data[ 0 ]);
			$this->transient()->set( 'success' , "Data successfully updated.");
		}
		$result = $user_m->get_by( $array );
		$this->index();
		$this->load_view( 'edit_user', $result );
	}

	public function rows_pages(){
		$user_m = $this->load_model( 'user' );
		$rows = $user_m->get_total_rows();
		$page = $user_m->get_total_pages();
		$data = array(
			'row' => $rows,
			'page'=> $page
		);
		return $data;
	}
}
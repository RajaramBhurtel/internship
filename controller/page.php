<?php 
	class Page_Controller extends Core_Controller{
		public function index( $data = false ){
			$data = empty( $data ) ? [ 'action' => 'login' ] : $data;
			$this->load_view( 'default', $data );	
		}
		
		public function about(){
			$data = [
				'action' => 'about'
			];
			$this->index( $data );
		}

		public function contact(){
			$data = [
				'action' => 'contact'
			];
			$this->index( $data );
		}
	}
?>
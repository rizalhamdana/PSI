<?php 	
/**
* 
*/
class C_Users extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
	}
	public function index(){
		$this->load->view('v_login');
	}

	public function dashboard() {
		$this->load->view('user/dashboard');
	}
	
}

 ?>
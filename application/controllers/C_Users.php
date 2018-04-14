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

	public function login(){
		$username=$this->input->post('username');
		$password=$this->input->post('password');
		echo $username."<br>";
		echo $password;
	}

	public function dashboard() {
		$this->load->view('user/dashboard');
	}
	
}

 ?>
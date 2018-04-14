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
		$this->load->model('M_Users','user');
	}
	public function index(){
		$this->load->view('user/v_login');
	}

	public function login(){
		$input =(object) $this->input->post();
		//echo $username."<br>";
		//echo $password;

		if($this->user->cekLogin($input)){
			$userAktif=$this->session->userdata('nama_pengguna');
			$this->load->view('user/v_dashboard',compact('userAktif'));
		}else{
			redirect('C_Users');
		}

	}
	
}

 ?>
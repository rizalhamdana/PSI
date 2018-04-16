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
		if(!$this->session->has_userdata('username')){
			$input =(object) $this->input->post();
			if($this->user->cekLogin($input)){
				$userAktif=$this->session->userdata('nama_pengguna');
				/*digunakan untuk redirect ke halaman dashboard*/
				$this->load->view('user/v_dashboard', compact('userAktif'));
			}	else{
				redirect('C_Users');
			}
		}else{
			$this->load->view('user/v_dashboard');
		}

	}
	public function logout(){
		if(!$this->session->has_userdata('id_pengguna')){
			redirect('C_Users');
		}else{
			$this->user->logout();
			redirect('C_Users');
		}
	}

	public function dashboard() {
		$this->load->view('user/v_dashboard');
	}
	
}

 ?>
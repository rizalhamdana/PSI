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
		if($this->session->has_userdata('username')){
			redirect('C_Bencana');
		}else{
			$this->load->view('user/v_login');	
		}
		
	}

	public function login(){
		if(!$this->session->has_userdata('username')){
			$input =(object) $this->input->post();
			if($this->user->cekLogin($input)){
				$userAktif=$this->session->userdata('nama_pengguna');
				/*digunakan untuk redirect ke halaman dashboard*/
				if($this->session->userdata('status_pengguna')=='1'){
					redirect('C_Bencana');	
				}else{
					echo "HalamanPelapor Di sini";
				}
				
			}	else{
				redirect('C_Users');
			}
		}else{
			redirect('C_Bencana');
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
	
}

 ?>
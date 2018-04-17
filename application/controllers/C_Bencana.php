<?php 

/**
* 
*/
class C_Bencana extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();

	}
	function index(){
		if($this->session->has_userdata('username')){
			$userAktif=$this->session->userdata('nama_pengguna');
			$this->load->view('user/v_dashboard',compact('userAktif'));	
		}
		
	}
}

 ?>
<?php 

	/**
	* 
	*/
	class C_PelaporBencana extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct();
			$this->load->model('M_Bencana','bencana');
		}
		function index(){
			$id_wilayah=$this->session->userdata('id_wilayah');
			$result=$this->bencana->getBencanaPelapor($id_wilayah);
			$this->load->view('user/v_pelapor_index',compact('result'));
		}
	}
 ?>
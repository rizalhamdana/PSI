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

		function viewBencanaPelapor(){
			$id_bencana=$this->input->get('id_bencana');
			$result=$this->bencana->namaBencana($id_bencana);
			$this->load->view('user/v_detail_bencana_for_pelapor',compact('result'));
		}
		function tambahLaporan(){
			if(!$_POST){
				$this->load->view('user/v_tambah_laporan');

			}else{
				
			}
		}


	}
 ?>
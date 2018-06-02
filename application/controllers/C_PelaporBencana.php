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
			$this->load->model('M_Kerusakan','kerusakan');
			$this->load->model('M_Laporan','laporan');
		}
		function index(){
			$id_wilayah=$this->session->userdata('id_wilayah');
			$result=$this->bencana->getBencanaPelapor($id_wilayah);
			$this->load->view('user/v_pelapor_index',compact('result'));
		}

		function viewBencanaPelapor($bencana=null){
			if($bencana==null){
				$id_bencana=$this->input->get('id_bencana');
			}else{
				$id_bencana=$bencana;
			}
			
			$hasil_semua_laporan=$this->laporan->getUserLaporan($this->session->userdata('id_pengguna'),$id_bencana);
			$result=$this->bencana->namaBencana($id_bencana);
			//print_r($hasil_semua_laporan);
			$this->load->view('user/v_detail_bencana_for_pelapor',compact('result','id_bencana','hasil_semua_laporan'));
		}
		function tambahLaporan($bencana=null){
			if($bencana==null){
				$id_bencana=$this->input->get('id_bencana');
			}else{
				$id_bencana=$bencana;
			}
			if(!$_POST){
				
				$jenis_rusak=$this->kerusakan->getAllKerusakan();
				$this->load->view('user/v_tambah_laporan',compact('jenis_rusak','id_bencana'));

			}else{
				$input=(object) $this->input->post();
				//print_r($input);
				$berhasil=$this->laporan->insertLaporan($input);
				if($berhasil){
					$url=base_url().'C_PelaporBencana/viewBencanaPelapor/'.$input->id_bencana;
					redirect($url);
				}else{
					echo "gagal";
				}
				
			}
		}


	}
 ?>
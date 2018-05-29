<?php 

/**
* 
*/
class C_Bencana extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->helper('url', 'date');
		$this->load->model('M_Bencana','bencana');
		$this->load->model('M_Wilayah','wilayah');
		$this->load->model('M_Users','user');
	}
	function index(){
		if($this->session->has_userdata('username')){
			$userAktif=$this->session->userdata('nama_pengguna');
			$bencana=$this->bencana->getBencana();
			
			$this->load->view('user/v_dashboard_bencana', compact('userAktif','bencana'));			
		}else{
			redirect('C_Users');
		}
	}
	function tampilPelapor() {
		$userAktif=$this->session->userdata('nama_pengguna');
		$allWilayah=$this->wilayah->getAllWilayah();
		$allUser=$this->user->getAllUsers();
		$this->load->view('user/v_list_pelapor', compact('userAktif','allUser','allWilayah'));
	}
	

	function tambahBencana() {
		$wilayah=$this->wilayah->getAllWilayah();
		$this->load->view('user/v_tambah_bencana',compact('wilayah'));

		$wilayah = $this->input->post('Wilayah');


		$data = array(
			'nama_bencana' => $this->input->post('Bencana'),
			'tanggal_bencana' => $this->input->post('Date'), 
			'id_wilayah' => $this->input->post('Wilayah')
		);

		$this->form_validation->set_rules('Bencana', 'bencana', 'required');
		$this->form_validation->set_rules('Wilayah', 'wilayah', 'required');
		$this->form_validation->set_rules('Date', 'date', 'required');

		if($this->form_validation->run() == TRUE) {
			$query = $this->bencana->tambahBencana($data);
			$userAktif=$this->session->userdata('nama_pengguna');
			redirect('C_Bencana');
		} else {
			echo $wilayah;
		}
	}

	function bukaDetailBencana() {
		$id_bencana = $this->input->get('id_bencana');
		$search = $this->bencana->namaBencana($id_bencana);
		$this->load->view('user/v_dashboard_pelapor', compact('search'));
	}

}

?>
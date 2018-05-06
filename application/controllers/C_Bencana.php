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
	}
	function index(){
		if($this->session->has_userdata('username')){
			$userAktif=$this->session->userdata('nama_pengguna');
			$this->load->view('user/v_dashboard_bencana', compact('userAktif'));			
		}else{
			redirect('C_Users');
		}
	}
	function tampilPelapor() {
		$userAktif=$this->session->userdata('nama_pengguna');
		$this->load->view('user/v_dashboard_pelapor', compact('userAktif'));
	}

	function tambahBencana() {
		$this->load->view('user/v_tambah_bencana');

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
			$this->load->view('user/v_dashboard_bencana', compact('userAktif'));
		} else {
			echo $wilayah;
		}
	}

}

?>
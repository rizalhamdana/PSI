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

		$data = array(
			'bencana' => $this->input->post('Bencana'),
			'wilayah' => $this->input->post('Wilayah'),
			'date' => $this->input->post('Date') 
		);

		$this->form_validation->set_rules('Bencana', 'bencana', 'required');
		$this->form_validation->set_rules('Wilayah', 'wilayah', 'required');
		$this->form_validation->set_rules('Date', 'date', 'required');

		if($this->form_validation->run() == TRUE) {
			$query = $this->bencana->tambahBencana($data);
			$this->load->view('user/v_dashboard_bencana');
		} else {
			echo $data['date'];
		}
	}

}

?>
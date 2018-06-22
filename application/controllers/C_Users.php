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
		$this->load->model('M_Wilayah','wilayah');
	}
	public function index(){
		if($this->session->has_userdata('username')){
			if($this->session->userdata('status_pengguna')=='1'){
					redirect('C_Bencana');	
				}else{
					redirect('C_PelaporBencana');
				}
		}
		else{
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
					redirect('C_PelaporBencana');
				}
				
			}else{
				$pesanSalah="Username atau Password anda salah";
				$this->load->view('user/v_login',compact('pesanSalah'));
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
	
	public function addUserPelapor(){
		if(!$_POST){
			$allWilayah=$this->wilayah->getAllWilayah();
			$this->load->view('user/v_form_add_user_pelapor',compact('allWilayah'));
		}else{
			$dataInput=array(
				'nama_pengguna'=>$this->input->post('nama_pengguna'),
				'username'=>$this->input->post('username'),
				'password'=>md5($this->input->post('password')),
				'status_pengguna'=>$this->input->post('status_pengguna'),
				'id_wilayah'=>$this->input->post('id_wilayah')
			);
			//echo $dataInput['password'];
			$this->user->insertNewUser($dataInput);
			redirect('C_Bencana/tampilPelapor');
		}
	}

	public function EditDataPelapor(){
		if(!$_POST){
			$allWilayah=$this->wilayah->getAllWilayah();
			$id_pelapor=$this->input->get('id_pengguna');
			$pelapor=$this->user->getSpesifikPelapr($id_pelapor);
			$this->load->view('user/v_form_edit_data_pelapor', compact('pelapor','allWilayah'));
		}else{
			$dataInput=array(
				'nama_pengguna'=>$this->input->post('nama_pengguna'),
				'username'=>$this->input->post('username'),
				//'password'=>md5($this->input->post('password')),
				//'status_pengguna'=>$this->input->post('status_pengguna'),
				'id_wilayah'=>$this->input->post('id_wilayah'),
				'id_pengguna'=>$this->session->userdata('id_pengguna')
			);
			$this->user->UpdateDataPelapor($dataInput);
			redirect('C_PelaporBencana/index');
		}
		
	}

	public function deleteUserPelapor() {
		$id_pelapor = $this->input->get('id_pengguna');
		$hapusPelapor = $this->user->hapusPelapor($id_pelapor);
		redirect('C_Bencana/tampilPelapor');
	}
}

 ?>
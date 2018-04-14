<?php 
/**
* 
*/
class M_Users extends CI_Model
{
	public function cekLogin($input){
		$hasil=$this->db->where('username',$input->username)
						->where('password',md5($input->password))
						->limit(1)
						->get('pengguna')
						->row();

		if(count($hasil)){
			$dataSession=['login'=>true,'id_pengguna'=>$hasil->id_pengguna,'username'=>$hasil->username,
							'nama_pengguna'=>$hasil->nama_pengguna,'status_pengguna'=>$hasil->status_pengguna
						];
			$this->session->set_userdata($dataSession);
			return true;
		}else{
			return false;
		}
	}	

}

 ?>
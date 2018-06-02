<?php

/**
* 
*/
class M_Bencana extends CI_Model {
	
	function tambahBencana($data) {
		$this->db->insert('bencana', $data);
	}

	function getBencana() {
		$result = $this->db->get('bencana'); 

		if($result->num_rows()>0){
			return $result->result();
		}else{
			return array();
		}
	}

	function getAllJenisBencana(){
		$result=$this->db->get('JenisBencana');

		if($result->num_rows()>0){
			return $result->result();
		}else{
			return array();
		}
	}

	function namaBencana($id_bencana) {
		$result = $this->db->where('id_bencana', $id_bencana)
							->limit(1)
						   ->get('bencana');
		return $result->result();
	}

	function getBencanaPelapor($id_wilayah){
		$result=$this->db->where('id_wilayah',$id_wilayah)
						->get('bencana');
		if($result->num_rows()>0){
			return $result->result();
		}else{
			return array();
		}
	}

	//join table dari laporan detail bencana
	function getLaporanBencana($id_bencana){	
		$result=$this->db->select('*')
				->from('laporan l')
				->join('pengguna p', 'p.id_pengguna=l.id_pengguna')
				->join('kerusakan k', 'k.id_kerusakan=l.id_kerusakan')
				->where('id_bencana', $id_bencana)
				->get();
		return $result->result();
	}
}

?>
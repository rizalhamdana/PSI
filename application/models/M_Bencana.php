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
}

?>
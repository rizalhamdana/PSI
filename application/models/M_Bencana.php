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
}

?>
<?php

/**
* 
*/
class M_Bencana extends CI_Model {
	
	function tambahBencana($data) {
		$this->db->insert('bencana', $data);
	}

	function getBencana() {
		$this->db->get('bencana');
	}
}

?>
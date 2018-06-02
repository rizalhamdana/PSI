<?php

/**
 * 
 */
class M_Kerusakan extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
	}
	function getAllKerusakan(){
		$result=$this->db->get('kerusakan');
		if($result->num_rows()>0){
			return $result->result();

		}else{
			return array();
		}
	}
}
?>
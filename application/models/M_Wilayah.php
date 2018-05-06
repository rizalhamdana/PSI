<?php 
/**
* 
*/
class M_Wilayah extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
	}

	function getAllWilayah(){
		$hasil=$this->db->get('wilayah');

		if($hasil->num_rows()>0){
			return $hasil->result();
		}else{
			return array();
		}
	}
}
 ?>
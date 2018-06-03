<?php 
/**
 * 
 */
class M_Chart extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
	}

	function getDataChartdJenisBencana(){
		$query=$this->db->query("select count(jenis_bencana) as 'jumlah_bencana',jenis_bencana from bencana group by jenis_bencana;");

		if($query->num_rows()>0){
			foreach ($query->result() as $data) {
				$hasil[]=$data;
			}
			return $hasil;
		}else {
			return array();
		}
	}
}
 ?>
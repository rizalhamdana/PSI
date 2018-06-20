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

	function getDataChartKerusakan($id_bencana){
		$query=$this->db->query("select count(laporan.id_kerusakan) as 'count_jenis_kerusakan',kerusakan.jenis_kerusakan from laporan join kerusakan on laporan.id_kerusakan=kerusakan.id_kerusakan where id_bencana=".$id_bencana." group by kerusakan.jenis_kerusakan;");
		if($query->num_rows()>0){
			foreach ($query->result() as $data) {
				$hasil[]=$data;
			}
			return $hasil;
		}else {
			return array();
		}
	}
	function getDataBarChartObjek($id_bencana){
		$query=$this->db->query("select count(objek) as 'count_objek', objek from laporan where id_bencana=".$id_bencana." group by objek");
		if($query->num_rows()>0){
			foreach ($query->result() as $data) {
				$hasil[]=$data;
			}
			return $hasil;
		}else {
			return array();
		}
	}
	function getDataLineChartTahunan(){
		$query=$this->db->query("select count(*) as jumlah, YEAR(tanggal_bencana) as 'tahun' from bencana group by YEAR(tanggal_bencana)");
		if($query->num_rows()>0){
			foreach($query->result() as $data){
				$hasil[]=$data;
			}
			return $hasil;
		}else{
			return array();
		}
	}
}

 ?>
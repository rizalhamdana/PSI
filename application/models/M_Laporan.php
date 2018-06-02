<?php

/**
 * 
 */
class M_Laporan extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
	}

	function insertLaporan($input){
		$this->db->insert('laporan',$input);
		return true;
	}
	function getUserLaporan($id_pengguna,$id_bencana){
		$hasil=$this->db->where('id_pengguna',$id_pengguna)
						->where('id_bencana',$id_bencana)
						->join('kerusakan','laporan.id_kerusakan=kerusakan.id_kerusakan')
						->join('wilayah','laporan.id_wilayah=wilayah.id_wilayah')
						->get('laporan');

		return $hasil->result();
	}

	function deleteLaporan($id_laporan){
		$this->db->where('id_laporan',$id_laporan)
				->delete('laporan');
	}

	function getLaporanSpesifik($id_laporan){
		$hasil=$this->db->where('id_laporan',$id_laporan)
						->limit(1)
						->get('laporan');

		return $hasil->row();
	}
	function updateLaporan($input,$id_laporan){
		$this->db->where('id_laporan',$id_laporan)
				->update('laporan',$input);
		
	}

}
?>
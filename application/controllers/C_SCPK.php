<?php 
	/**
	 * 
	 */
	class C_SCPK extends CI_Controller
	{
		/*$min_ringan=25;
		$max_ringan=50;
		$min_sedang=25;
		$max_sedang=75;
		$min_berat=50;
		$max_berat=75;*/
		function __construct()
		{
			parent::__construct();
			$this->load->model('M_SCPK','scpk');
			
		}
		function index(){
			echo $this->scpk->hitungFuzzy(40,30);
		}

		
	}
 ?>
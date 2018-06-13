<?php 
/**
 * 
 */
class Rules_scpk
{
	public $kondisi1='';
	public $kondisi2='';
	public $hasil='';
	function __construct()
	{
		
	}
	public function set_rules($kondisi1,$kondisi2,$hasil){
		$this->kondisi1=$kondisi1;
		$this->kondisi2=$kondisi2;
		$this->hasil=$hasil;
	}
}


 ?>
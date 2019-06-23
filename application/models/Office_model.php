<?php 
class Office_model extends Mudl_model{

	protected	$_table_name		= 'offices';
	protected	$_primary_key		= 'off_id';	

	function __construct(){
		parent::__construct();
	}

	public function get_new(){
		$office = new stdClass();

		$office->off_id = null;
		$office->off_title_dari = null;
		$office->off_title_pashto = null;
		$office->off_title_eng = null;
		$office->off_desc_dari = null;
		$office->off_desc_pashto = null;
		$office->off_desc_eng = null;
		
		return $office;
	}

}
<?php 
class High_council_ud_model extends Mudl_model{

	protected	$_table_name		= 'high_council_ub';
	protected	$_primary_key		= 'h_id';	

	function __construct(){
		parent::__construct();
	}

	public function get_new(){
		$high_council = new stdClass();

		$high_council->h_id = null;
		$high_council->h_title_dari = null;
		$high_council->h_title_pashto = null;
		$high_council->h_title_eng = null;
		$high_council->h_desc_dari = null;
		$high_council->h_desc_pashto = null;
		$high_council->h_desc_eng = null;
		$high_council->h_file = null;
		$high_council->h_date = null;
		
		return $high_council;
	}

}
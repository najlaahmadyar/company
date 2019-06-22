<?php 
class Major_work_model extends Mudl_model{

	protected	$_table_name		= 'ministry_major_works';
	protected	$_primary_key		= 'mw_id';	

	function __construct(){
		parent::__construct();
	}

	public function get_new(){
		$work = new stdClass();

		$work->mw_id = null;
		$work->mw_title_dari = null;
		$work->mw_title_pashto = null;
		$work->mw_title_eng = null;
		$work->mw_desc_dari = null;
		$work->mw_desc_pashto = null;
		$work->mw_desc_eng = null;
		$work->mw_image = null;
		
		return $work;
	}

}
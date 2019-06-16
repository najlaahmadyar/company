<?php 
class Press_release_model extends Mudl_model{

	protected	$_table_name		= 'press_release';
	protected	$_primary_key		= 'pr_id';	

	function __construct(){
		parent::__construct();
	}

	public function get_new(){
		$press_release = new stdClass();

		$press_release->pr_id = null;
		$press_release->pr_title_dari = null;
		$press_release->pr_title_pashto = null;
		$press_release->pr_title_eng = null;
		$press_release->pr_file = null;
		$press_release->pr_date = null;
		
		return $press_release;
	}

}
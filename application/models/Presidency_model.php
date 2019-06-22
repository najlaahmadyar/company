<?php 
class Presidency_model extends Mudl_model{

	protected	$_table_name		= 'presidencies';
	protected	$_primary_key		= 'pr_id';	

	function __construct(){
		parent::__construct();
	}

	public function get_new(){
		$presidency = new stdClass();

		$presidency->pr_id = null;
		$presidency->pr_title_dari = null;
		$presidency->pr_title_pashto = null;
		$presidency->pr_title_eng = null;
		$presidency->pr_desc_dari = null;
		$presidency->pr_desc_pashto = null;
		$presidency->pr_desc_eng = null;
		$presidency->pr_exe_id= null;
		
		return $presidency;
	}

}
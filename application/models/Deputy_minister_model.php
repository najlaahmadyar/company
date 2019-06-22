<?php 
class Deputy_minister_model extends Mudl_model{

	protected	$_table_name		= 'executions';
	protected	$_primary_key		= 'exe_id';	

	function __construct(){
		parent::__construct();
	}

	public function get_new(){
		$execution = new stdClass();

		$execution->exe_id = null;
		$execution->exe_name_dari = null;
		$execution->exe_name_pashto = null;
		$execution->exe_name_eng = null;
		
		return $execution;
	}

}
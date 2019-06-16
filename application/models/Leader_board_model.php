<?php 
class Leader_board_model extends Mudl_model{

	protected	$_table_name		= 'leader_board';
	protected	$_primary_key		= 'l_id';	

	function __construct(){
		parent::__construct();
	}

	public function get_new(){
		$leader = new stdClass();

		$leader->l_id = null;
        $leader->l_fullname = null;
		$leader->l_bio_dari = null;        
		$leader->l_bio_pashto = null;
		$leader->l_bio_eng = null;
		$leader->l_photo = null;
		
		return $leader;
	}

}
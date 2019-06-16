<?php 
class Partners_model extends Mudl_model{

	protected	$_table_name		= 'partner_offices';
	protected	$_primary_key		= 'po_id';	

	function __construct(){
		parent::__construct();
	}

	public function get_new(){
		$partner = new stdClass();

		$partner->po_id = null;
		$partner->po_name_dari = null;
		$partner->po_name_pashto = null;
		$partner->po_name_eng = null;
		$partner->po_photo = null;
		
		return $partner;
	}

}
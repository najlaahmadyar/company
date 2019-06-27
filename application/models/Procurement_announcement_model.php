<?php 
class Procurement_announcement_model extends Mudl_model{

	protected	$_table_name		= 'procurement_announcement';
	protected	$_primary_key		= 'pa_id';	

	function __construct(){
		parent::__construct();
	}

	public function get_new(){
		$announcement = new stdClass();

		$announcement->pa_id = null;
		$announcement->pa_subject = null;
		$announcement->pa_office_name = null;
		$announcement->pa_start_date = null;
		$announcement->pa_end_date = null;
		$announcement->pa_email = null;
		$announcement->pa_phone= null;
		$announcement->pa_bidding_doc = null;
		$announcement->pa_attachement = null;
		
		return $announcement;
	}
}
<?php 
class Report_model extends Mudl_model{

	protected	$_table_name		= 'reports';
	protected	$_primary_key		= 'rep_id';	

	function __construct(){
		parent::__construct();
	}

	public function get_new(){
		$report = new stdClass();

		$report->rep_id = null;
		$report->rep_title_dari = null;
		$report->rep_title_pashto = null;
		$report->rep_title_eng = null;
		$report->rep_desc_dari = null;
		$report->rep_desc_pashto = null;
		$report->rep_desc_eng = null;
		$report->rep_image = null;
		$report->rep_date = null;
		
		return $report;
	}

}
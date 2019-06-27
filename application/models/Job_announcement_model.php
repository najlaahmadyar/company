<?php 
class Job_announcement_model extends Mudl_model{

	protected	$_table_name		= 'job_announcement';
	protected	$_primary_key		= 'ja_id';	

	function __construct(){
		parent::__construct();
	}

	public function get_new(){
		$announcement = new stdClass();

		$announcement->ja_id = null;
		$announcement->ja_title = null;
		$announcement->ja_office_name = null;
		$announcement->ja_start_date = null;
		$announcement->ja_expiration_date = null;
		$announcement->ja_duty_station = null;
		$announcement->ja_edu_degree = null;
		$announcement->ja_field_of_study = null;
		$announcement->ja_exp_year = null;
		$announcement->ja_email = null;
		$announcement->ja_attachement = null;
		
		return $announcement;
	}
}
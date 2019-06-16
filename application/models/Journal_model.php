<?php 
class Journal_model extends Mudl_model{

	protected	$_table_name		= 'journal';
	protected	$_primary_key		= 'j_id';	

	function __construct(){
		parent::__construct();
	}

	public function get_new(){
		$journal = new stdClass();

		$journal->j_id = null;
		$journal->j_date = null;
		$journal->j_category = null;
		$journal->j_file = null;
		
		return $journal;
	}

	public function journal_category(){
		return $this->db->get('journal_category')->result();
	}

}
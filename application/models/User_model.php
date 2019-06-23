<?php 
class User_model extends Mudl_model{

	protected	$_table_name		= 'user';
	protected	$_primary_key		= 'id';	

	function __construct(){
		parent::__construct();
	}

}
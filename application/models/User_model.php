<?php 
class User_model extends Mudl_model{

	protected	$_table_name		= 'users';
	protected	$_primary_key		= 'id';	

	function __construct(){
		parent::__construct();
	}

}
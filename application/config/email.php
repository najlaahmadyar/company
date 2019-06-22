<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

	$config['protocol']    = 'smtp';
	$config['smtp_host']    = 'ssl://smtp.googlemail.com';
	$config['smtp_port']    = '587';
	$config['smtp_timeout'] = '7';
	$config['smtp_user'] = 'email should be setuped';
	$config['smtp_pass'] = 'Password';
	$config['charset']    = 'utf-8';
	$config['newline']    = "\r\n";
	$config['mailtype'] = 'text'; // or html
	$config['validation'] = FALSE;
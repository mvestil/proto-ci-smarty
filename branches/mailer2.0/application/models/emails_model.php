<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Emails_Model extends MY_Model {

	function __construct() {
		parent::__construct();
	}
	
	function getAllMMGEmails() {
		$query = "select * from mmgemails where status = 1 group by email_address";
		$result = $this->db->query($query);
		return $this->processResultList($result);
	}
}
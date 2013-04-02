<?php

class Users_Model extends MY_Model {

	function __construct() {
		parent::__construct();
	}
	
	function getUser($username, $password) {
		$result = parent::getRecord(USERS, array('username' => $username, 'password' => $password));
		return $result;
	}	

	
}
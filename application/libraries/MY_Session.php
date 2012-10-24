<?php

define("ADMIN_INFO", 'admininfo');

class MY_Session extends CI_Session {

	function __construct() {
        parent::__construct();
    }
	
	function setAdminInfo($userdata) {
		$this->set_userdata(array( ADMIN_INFO => $userdata) );
	}
	
	function unsetAdminInfo() {
		$this->session->sess_destroy();
	}
	
	function getAdminInfo() {
		return $this->userdata(ADMIN_INFO);
	}

}
<?php

class Login extends MY_Controller {

	function __construct() {
		parent::__construct();
		$this->load->model('users_model');
	}
	
	function index() {
		$this->load->view('login/index');
	}
	
	function loginUser() {
		$error_message = '';
		
		$requiredParams = array(
			 'username' => 'Username'
			,'password' => 'Password'
		);
		
		$ret = $this->_check_required($_POST, $requiredParams);
		$error_code = $ret['err_cd'];

		if ($error_code == NO_ERROR) {
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			$result = $this->users_model->getUser($username, $password);
			if ($result['count'] > 0) {
				$userdata = array(
					 array('username' => $result['data']['username']
						  ,'first_name' => $result['data']['first_name']
						  ,'last_name' => $result['data']['last_name'] 
						  ,'email_address' => $result['data']['email_address'] 
					)
				);
				
				$this->session->setAdminInfo($userdata);
				//print_r($this->session->getAdminInfo()); die();
				redirect('/admin');
			} else {
				$error_message = "User does not exist";
			}
			
		} else {
			$error_message = "Missing Parameter";
		}
		
		if ($error_message != '') {
			show_error($error_message);
		}
	}
	
	function logoutUser() {
		$this->session->unsetAdminInfo();
		redirect('/login');
	}	
	
}
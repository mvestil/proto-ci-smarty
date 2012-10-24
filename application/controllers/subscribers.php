<?php

class Subscribers extends MY_Controller {

	function __construct() {
		parent::__construct();
		$this->load->model('subscribers_model');
		$this->load->model('subscriptions_model');
	}
	
	function index() {
		$result = $this->subscriptions_model->getAllSubscriptions();
		$this->load->view('subscribers/index', $result);
	}
	
	function subscribe() {
		$error_message = '';
		
		if ($_POST) {
			//print_r($_POST); die();
			$requiredParams = array(
				 'first_name' => 'First Name'
				,'last_name' => 'Last Name'
				,'email_address' => 'Email Address'
			);
			
			$ret = $this->_check_required($_POST, $requiredParams);
			$error_code = $ret['err_cd'];
			
			if ($error_code == NO_ERROR) {
				if (valid_email($_POST['email_address']) && !$this->_checkEmail($_POST['email_address'])) {
					$this->db->trans_start();
					
					$data['first_name'] = $_POST['first_name'];
					$data['last_name'] = $_POST['last_name'];
					$data['email_address'] = $_POST['email_address'];
					$data['created_by'] = 1; // admin id - assumption
					$result = $this->subscribers_model->subscribe($data);
					$error_code = $result['error_code'];
					if ($error_code == NO_ERROR) {
						if (isset($_POST['subscription_type']) && count($_POST['subscription_type']) > 0) {
							$subscriptions = $_POST['subscription_type'];
							$subscriber_id = $result['insert_id'];
							foreach($subscriptions as $key => $row) {
								$sub_data[$key]['subscriber_id'] = $subscriber_id;
								$sub_data[$key]['subscription_id'] = $row;
								$sub_data[$key]['created_date'] = date("Y-m-d H:i:s"); 
								$sub_data[$key]['modified_date'] = date("Y-m-d H:i:s"); 
							}
							$result = $this->subscribers_model->assignSubscriptions($sub_data);
							$error_code = $result['error_code'];
							
							if ($error_code == NO_ERROR) {
								echo "Test Page - Subscription Completed";
							} else {
								$error_message = "Unable to subscribe. Please try again.";
							}
						}
					}
					
					$this->db->trans_complete();
				} else {
					$error_message = "Invalid Email / Email Already Exist.";
				}
			} else {
				$error_message = "Missing Parameter";
			}
		} else {
			redirect('/index');
		}
		
		if ($error_message != '') {
			show_error($error_message);
		}
	}
	
	function unsubscribe() {
		$error_message = '';
		
		$requiredParams = array(
			 'id' => 'Subscriber ID'
			,'sid' => 'Subscription ID'
			,'email_address' => ' Email Address'
		);
		
		$result = $this->_check_required($_REQUEST, $requiredParams);
		$error_code = $result['err_cd'];
		
		if ($error_code == NO_ERROR) {
			$subscriber_id = $_REQUEST['id'];
			$email_address = $_REQUEST['email_address'];
			$subscription_id = $_REQUEST['sid'];
			
			$result = $this->subscribers_model->getSubscriber($subscriber_id, $email_address);
			if ($result['count'] > 0) {
				$cond['subscriber_id'] = $subscriber_id;
				$cond['subscription_id'] = $subscription_id;
				
				//print_r($result);
				$result = $this->subscribers_model->unsubscribe($cond);
				$error_code = $result['error_code'];
				
				if ($error_code == NO_ERROR) {
					$result = $this->subscriptions_model->getSubscription($subscription_id);
					if ($result['count'] > 0) {
						//print_r($result);
						echo "Test Page - You have unsubscribe to " . $result['data']['name'];
					} else {
						$error_message = "Subscription does not exist.";
					}
					
				} else {
					$error_message = "Failed to unsubscribe. Please try again.";
				}
			} else {
				$error_message = "Subscriber does not exist";
			}
			
		} else {
			$error_message = "Missing Parameter";
		}
		
		if ($error_message != '') {
			show_error($error_message);
		}
	}
	
	function _checkEmail($email_address) {
		$isExist = false;
		
		$result = $this->subscribers_model->checkEmail($email_address);
		if ($result['count'] > 0)
			$isExist = true;
			
		return $isExist;
	}
	
}

<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Subscribers_Model extends MY_Model {

	function __construct() {
		parent::__construct();
	}

	/**
	 * Add new subscriber
	 */
	function subscribe($data) {
		$result = parent::insert(SUBSCRIBERS, $data);
		$result['insert_id'] = $this->db->insert_id();
		
		return $result;
	}
	
	/**
	 * Update status of subscriber to 0
	 */
	function unsubscribe($condition) {
		$data['status'] = 0;
		return parent::update(SUBSCRIBERS_SUBSCRIPTIONS, $condition, $data);
	}
	
	/**
	 * Check if email address already exist
	 */
	function checkEmail($email_address) {
		return parent::getRecord(SUBSCRIBERS, array('email_address' => $email_address, 'status' => 1));
	}
	
	function assignSubscriptions($data) {
		$this->db->insert_batch(SUBSCRIBERS_SUBSCRIPTIONS, $data);
		return $this->processResult(); 
	}
	
	/**
	 * Get subscriber using id and email address
	 */
	function getSubscriber($id, $email_address) {
		return parent::getRecord(SUBSCRIBERS, array('id' => $id, 'email_address' => $email_address,
													'status' => 1));
	}
	
	/**
	 * Get the subscribers who subscribed of the given subscription id
	 */
	function getBySubscription($ids) {
		$query = "Select sub.* from " . SUBSCRIBERS . " sub ";
		$query.= "INNER JOIN " . SUBSCRIBERS_SUBSCRIPTIONS . " ss ON sub.id = ss.subscriber_id ";
		$query.= "WHERE ss.subscription_id IN (?)";
		
		$result = $this->db->query($query, $ids);
		return $this->processResultList($result);
	}
	
	function getAllSubscribers() {
		return parent::getRecordList(SUBSCRIBERS);
	}

}
<?php


class Subscriptions_Model extends MY_Model {

	function __construct() {
		parent::__construct();
	}

	/**
	 * Get all subscriptions
	 */
	function getAllSubscriptions() {
		return parent::getRecordList(SUBSCRIPTIONS);
	}
	
	/**
	 * Get subscription
	 */
	function getSubscription($id) {
		return parent::getRecord(SUBSCRIPTIONS, array('id' => $id));
	}

}
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

define('SUBSCRIBERS', 'subscribers');
define('SUBSCRIPTIONS', 'subscriptions');
define('SUBSCRIBERS_SUBSCRIPTIONS', 'subscribers_subscriptions');
define('USERS', 'users');

class MY_Model extends CI_Model {	
	
	/**
     * Get a record
	 *
     * @param string $table_name - tablename in query
     * @param array $condition - the conditions in query
     * @param string $select - fields to select
	 *
     * @return array - result record data
     */
    function getRecord($table_name, $condition, $select = null) {
    	log_message('debug', "[START] BaseModel : getRecord[".$table_name."]");
    	
    	if ($select)
    		$this->db->select($select);
		$this->db->from($table_name);
		$this->db->where($condition);		
		$result = $this->db->get();
		  	
    	log_message('debug', "[END] BaseModel : getRecord[".$table_name."]");
    	
    	return $this->processResult($result);    	
    }

    /**
     * Get a list of record
	  *
     * @param string $table_name - tablename in query
     * @param array $condition - the conditions in query
     * @param string $select - fields to select
     * @param string $order_by - order by string
	 *
     * @return array - result record list
     */
    function getRecordList($table_name, $condition = null, $select = null, $order_by = null) {
    	log_message('debug', "[START] BaseModel : getRecordList[".$table_name."]");
    	
    	if ($select)
    		$this->db->select($select);

		$this->db->from($table_name);
        
		if ($condition)
			$this->db->where($condition);

        if ($order_by)
            $this->db->order_by($order_by);
        
		$result = $this->db->get();
		  	
    	log_message('debug', "[END] BaseModel : getRecordList[".$table_name."]");
    	
    	return $this->processResultList($result);    	
    }
    
    /**
     * Insert into Table data information
	 *
     * @param string $table_name - tablename in query
     * @param array $data - data to insert
	 *
     * @return array - query result details
     */
    function insert($table_name, $data) {
    	log_message('debug', "[START] BaseModel : insert[".$table_name."]");
     	
		//set created_date and modified_date to current date  
		$cur_date = date("Y-m-d H:i:s"); 
		$data['created_date'] = $cur_date;
		$data['modified_date'] = $cur_date;
		$data['modified_by'] = $data['created_by'];
			
		$this->db->insert($table_name, $data);
			
    	log_message('debug', "[END] BaseModel : insert[".$table_name."]"); 
    	   	
    	return $this->processResult();   	
    }   
    
	/**
	 * Updates Table data information using condition
	 *
	 * @param string $table_name - tablename in query
	 * @param array $condition - the conditions in query
	 * @param array $data - data to update
	 * @param string $date - current date
	 * 
	 * @return array - query result details
	 */
    function update($table_name, $condition, $data, $date = null) {
    	log_message('debug', "[START] BaseModel : update[".$table_name."]");
     	
		//set modified_date to current date  
	    $cur_date = isset($date) ? $date : date("Y-m-d H:i:s");
		$data['modified_date'] = $cur_date;
		$this->db->where($condition);
		$this->db->update($table_name, $data);
			
    	log_message('debug', "[END] BaseModel : update[".$table_name."]"); 
    	   	
    	return $this->processResult();   	
    }   
    
    /**
     * Deletes data on the given table with the condition
	 *
     * @param string $table_name - tablename in query
     * @param array $condition - the conditions in query
	 *
     * @return array - query result details
     */
    function delete($table_name, $condition) {
    	log_message('debug', "[START] BaseModel : delete[".$table_name."]");
     	$this->db->delete($table_name, $condition); 
			
    	log_message('debug', "[END] BaseModel : delete[".$table_name."]"); 
    	   	
    	return $this->processResult();   	
    }
    
    
    /**
     * Displays necessary log information after query 
     */
    function _query_log() {
    	log_message('debug', "[START] _query_log");
    	log_message('debug', "SQL = ".$this->db->last_query());
    	log_message('debug', "error_code = ".$this->db->_error_number());
    	log_message('debug', "error_message = ".$this->db->_error_message());
    	log_message('debug', "[END] _query_log");
    }

    /**
     * Formats Result query result listing
	 *
     * @param array $result - resultset
     * @param integer $count - count, use value if present
	 *
     * @return array $ret - query result details
     */
    function processResultList($result, $count = null){
    	log_message('debug', "[START] processResultList");
    	if($this->db->_error_message() == ''){  
			$error_code = '0'; 
		} else {
			$error_code = $this->db->_error_number();
    	}
    	
    	$ret = array(
    		'error_code' => $error_code,
    		'error_message' => $this->db->_error_message(),
    		'data' => $result != null && $result->num_rows() > 0 ? $result->result_array() : null, 
    		'count' => $result == null ? 0 : ($count != null ? $count : $result->num_rows())
    	); 
    	
    	$this->_query_log();
		log_message('debug', "count = ".$ret['count']);
		log_message('debug', "[END] processResultList");
    	return $ret;
    	
    }
    
    /**
     * Formats Results query result
	 *
     * @param array $result - resultset
	 *
     * @return array $result - query result details
     */
    function processResult($result = null){
    	log_message('debug', "[START] processResult");
    	if($this->db->_error_message() == ''){  
			$error_code = '0'; 
		} else {
			$error_code = $this->db->_error_number();
    	}
    	
    	$result = array(
    		'error_code' => $error_code,
    		'error_message' => $this->db->_error_message(),
    		'data' => $result != null && $result->num_rows() > 0 ? $result->row_array() : null, 
    		'count' => $result == null ? 0 : $result->num_rows()
    	); 
    	
    	$this->_query_log();
		log_message('debug', "count = ".$result['count']);
		log_message('debug', "[END] processResult");
    	return $result;
    	
    }
	
}
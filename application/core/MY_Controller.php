<?php

define('NO_ERROR', 0);
define('MISSING_PARAM', 1);

class MY_Controller extends CI_Controller {

	protected $authenticated = false;
	
	function __construct($redirect = true) {
		parent::__construct();
		//echo "<pre>";
		$this->_authenticate();
		
		if ($this->authenticated) {
			
		} else {
			if ($redirect) {
				redirect('/login');
			}
		}
	}
	
	function _base_check() {
		return $this->authenticated;
			
	}
	
	function _authenticate() {
		$info = $this->session->getAdminInfo();
		if (!empty($info)) {
			$this->authenticated = true;
		}
	}
	
	/**
	 * For parameter validation and error checking
	 *
	 * @param array $array_obj - object used invalidation
	 * @param array $param_list - data to validate
	 *
	 * @return array $ret - query return details
	 */
	function _check_required($array_obj, $param_list)
	{
		log_message('debug', "[START] _check_required_generic");
        $_data = array();

        foreach($param_list as $key => $val) {
            if(!array_key_exists($key,$array_obj) || trim($array_obj[$key]) == '') {
                $_data[$key] = $val.' is required';
            }
        }

        if (count($_data) > 0) {
            log_message('debug', "has error(s)");
            $ret = array('err_cd' => MISSING_PARAM, 'data' => $_data);
        } else {
            log_message('debug', "has no error(s)");
            $ret = array('err_cd' => NO_ERROR, 'data' => '');
        }

        log_message('debug', "[END] _check_required_generic");
		return $ret;
	}
	
	/**
     * Called in every controller functions to send data to front-end
	 *
     * @param integer $error_code - the error code 
     * @param array $error_list - the error list
     * @param string $error_msg - the error message
     * @param array $list_data - record list data
     * @param integer $total - number of records
     * @param array $extra - additional data
	 *
     * @return string $json_result - json encoded data
     */
    function _json_output($error_code, $error_list, $error_msg, $list_data, $total = null, $extra = null) {
		$ret = array(
			'success' => $error_code == '0',
           	'error_code' => $error_code,
			'error_message' => $error_msg,
			'errors' => $error_list,			
			'total' => $total != null ? $total : ($list_data == null ? 0 : count($list_data)),
			'data' => $list_data
        );
        
        if ($extra != null && count($extra) > 0) {
        	foreach ($extra as $key => $value) {
        		$ret[$key] = $value;
        	}
        }
        
        $json = json_encode($ret);
        
        // replace '\/' to '/'
        $json_result = str_replace("\/", "/", $json);	        
        echo $json_result;	
        
    }
	
	/**
	 * Sends Email
	 *
	 * @param string $to - Email To
	 * @param string $cc - Email CC
	 * @param string $subject  - Email Subject
	 * @param string $msg - Email Body
	 * @param file $attach_file - file attachment
	 * @param string $from - Email From
	 * @param string $from_name - Email From Name
	 * @param string $bcc - Email BCC
	 * @param string $reply_to - Email Reply To
	 * @param string $reply_to_name - Email Reply To Name
	 *
	 * @return array $ret - sending email result
	 */
	function send_mail($to, $cc = null, $subject, $msg, $attach_file = null, $from = null, $from_name = null, $bcc = null, $reply_to = null, $reply_to_name = null) {
		log_message('debug', "[START] Controller BaseController:send_mail");
		
		log_message('debug', "to : ".var_export($to, 1));
		log_message('debug', "from : ".$from);
		log_message('debug', "from_name : ".$from_name);
		
		//Send Email
        $this->email->clear();            
		$this->email->set_newline("\r\n"); //this line is important in sending gmail
		//$this->email->set_crlf("\r\n"); //this line is important in sending gmail
		
		//FROM
		if ($from == null) {
			$from = $this->CI->config->item('app_mail_from');
			$this->email->from($from, $this->CI->config->item('app_mail_from_name'));
			if ($reply_to != null) {
				$this->email->reply_to($reply_to, $reply_to_name);
			}	
		} else {
			$this->email->from($from, $from_name);
			$this->email->reply_to($from, $from_name);
		}
		//TO
		$this->email->to($to);
		//CC
		if ($cc) {
			$this->email->cc($cc);
		}
        //BCC
        $dwh_email_flag = $this->CI->config->item('dwh_email_flag');
        if($dwh_email_flag == true) {
        	if($bcc != null || $bcc != '') {
				if ($bcc) {
					$this->email->bcc($bcc);
				}
        	}
        }
		//SUBJECT
		$this->email->subject($subject);
		//MESSAGE
		$this->email->message($msg);
		//ATTACHMENT
		if ($attach_file != null && count($attach_file)) {
			foreach ($attach_file as &$_file) {
				$this->email->attach($_file['file']);//,$_file['name']);	
			}
		}
		
		$ret['error_code'] = NO_ERROR;
		$ret['error_message'] = '';
		log_message('debug', "Sending Mail... from: ".$from." to: ".var_export($to, 1));
		try {
			if (!$this->email->send()) {
				$ret['error_code'] = ERROR_SENDING;
				$ret['error_message'] = $this->email->print_debugger();
				log_message('error', "error_message = ".$ret['error_message']);
			}
		} catch (Exception $e) {
			$ret['error_code'] = ERROR_SENDING;
			$ret['error_message'] = $e->getMessage();
			log_message('error', "error_message = ".$ret['error_message']);
		}

		log_message('debug', "error_code = ".$ret['error_code']);
		log_message('debug', "error_message = ".$ret['error_message']);
		log_message('debug', "[END] Controller BaseController:send_mail");
		
		return $ret;
	}	

}
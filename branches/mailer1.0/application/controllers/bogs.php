<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Bogs extends MY_Controller {

	function __construct() {
		parent::__construct();
		$this->load->model('emails_model');
		$this->load->library('email');
		$this->email->set_newline("\r\n");
	}
	
	function preblast() {
		$this->load->view('bogs/preblast');
	}
	
	function blast() {
		set_time_limit(0);
		$error_message = '';
		
		$requiredParams = array(
			 'title' => 'Email Title'
			,'html_message' => 'Email Message'
		);
		
		$ret = $this->_check_required($_POST, $requiredParams);
		$error_code = $ret['err_cd'];

		if ($error_code == NO_ERROR) {
			$result = $this->emails_model->getAllMMGEmails();
			//print_r($result);
			if ($result['count'] > 0) {
				foreach ($result['data'] as $row) {
					$mmgemails[] = $row['email_address'];
				}
				//echo "<pre>";
				//print_r($mmgemails);
				//die();
				$this->email->from('neilrowd.kennyster@gmail.com', 'Neilrowd Marketing');
				$this->email->to(array()); 
				$this->email->reply_to('neilrowd.kennyster@gmail.com');
				$this->email->bcc($mmgemails); 
				//$this->email->bcc(array('isbogs@gmail.com', 'dadingdodo@gmail.com', 'lendltae123@gmail.com')); 
				
				$this->email->subject($this->input->post('title'));
				$this->email->message($this->input->post('html_message'));	

				//echo $this->input->post('html_message');
				
				if ($this->email->send()) {
					echo "<a href='/admin/'>Go back to home page</a>";
				} else {
					echo "Error on sending email.";
				}
				
				echo $this->email->print_debugger(); 
			}
			
		} else {
			$error_message = "Missing Parameter";
		}
		
		if ($error_message != '') {
			show_error($error_message);
		}
		
	}
	
}
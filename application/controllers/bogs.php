<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Bogs extends MY_Controller {

	function __construct() {
		parent::__construct();
		$this->load->model('emails_model');
		$this->load->library('email');
		$this->email->set_newline("\r\n");
	}
	
	function preblast() {
		if ($this->_base_check()) {
			$this->load->view('bogs/preblast');
		}
	}
	
	function blast() {
		if ($this->_base_check()) {
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
					
					$this->email->from('neilrowd.kennyster@gmail.com', 'Neilrowd Kennyster');
					$this->email->to(array()); 
					$this->email->reply_to('neilrowd.kennyster@gmail.com');
					$this->email->bcc($mmgemails); 
					
					$this->email->subject($this->input->post('title'));
					$this->email->message($this->input->post('html_message'));	

					if (isset($_POST['submit'])) {
						if ($_POST['submit'] == 'Preview') {
							echo $this->input->post('html_message');
							die();
						} else if ($_POST['submit'] == 'Test') {
							$this->email->bcc('isbogs@gmail.com');
						}
					}
					
					//die();
					if ($this->email->send()) {
						//echo "<a href='/admin/'>Go back to home page</a>";
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
	
}
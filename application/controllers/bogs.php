<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Bogs extends MY_Controller {

	function __construct() {
		parent::__construct();
		$this->load->model('emails_model');
		$this->load->library('email');
		$this->email->set_newline("\r\n");
                ini_set('memory_limit', '-1');
	}
	
	function preblast() {
		if ($this->_base_check()) {
			$this->load->view('bogs/preblast');
		}
	}
	
	function katherinepreblast() {
		if ($this->_base_check()) {
			$this->load->view('bogs/katherinepreblast');
		}
	}
	
	function moneyforyoupreblast() {
		if ($this->_base_check()) {
			$this->load->view('bogs/moneyforyoupreblast');
		}
	}
	
	function cindypreblast() {
		if ($this->_base_check()) {
			$this->load->view('bogs/cindypreblast');
		}
	}
	
	function blast() {
		if ($this->_base_check()) {
			set_time_limit(0);
			$error_message = '';
			
			$requiredParams = array(
				 'title' => 'Email Title'
				,'html_message' => 'Email Message'
				,'dest_url' => 'Referral Link'
				,'banner_url' => 'Banner URL'
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
					//print_r($_POST) ; die();
					$this->email->to(null);
					$this->email->from('firsttoearn@programalert.biz', 'Program Alert');
					//$this->email->from('alert@honesthyipmonitor.biz', 'HYIP Short Term');
					$this->email->reply_to('rudyneilrudyneil@gmail.com');
					//$this->email->from('alert@honesthyipmonitor.biz', 'Neilrowd Kennyster');
					//$this->email->reply_to('musica.kennyster@gmail.com');
					$this->email->bcc($mmgemails); 
					
					$this->email->subject($this->input->post('title'));
					//$message = $this->input->post('html_message');
					// add footer
					/*$message .= "<p>
							=================================================</p>
						<div>
							This message is not a spam. I have no intention to spam&nbsp;anyone.</div>
						<div>
							You are receiving new program&nbsp;updates and alerts since you&nbsp;</div>
						<div>
							were part of my mailing list and have shown interest in online marketing.&nbsp;</div>
						<div>
							If you do not wish to receive email notification of this kind,&nbsp;</div>
						<div>
							please reply to this email and ask to be removed.&nbsp;</div>
						<div><br/>
							=================================================</div>";*/
					$data['reflink'] = $this->input->post('dest_url');
					$data['bannerlink'] = $this->input->post('banner_url');
					$data['message'] = $this->input->post('html_message');
					$message = $this->load->view('bogs/bogstemplate', $data, TRUE);		
					
					$this->email->message($message);	

					//$success = 0;
					//$fail = 0;
					
					if (isset($_POST['submit'])) {
						if ($_POST['submit'] == 'Preview') {
							echo $message;
							die();
						} else if ($_POST['submit'] == 'Test') {
						
							/*
							$this->email->to('isbogs@gmail.com');
							if ($this->email->send()) {
								$success++;
							} else {
								$fail++;
							}*/
							
							$this->email->bcc('isbogs@gmail.com'); 
							
						} else {
						
							//$mmgemails = array('isbogs@gmail.com', 'neilrowd.kennyster@gmail.com');
							/*foreach ($mmgemails as $row) {
								$this->email->to($row);
								if ($this->email->send()) {
									$success++;
								} else {
									$fail++;
								}
								//die();
							}*/
							
							
						}
					}
					
					//die();
					
					//echo "Successfully send : " . $success . "<br/>";
					//echo "Failure send : " . $fail . "<br/>";
					
					$this->email->send();
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
	
	function katherineblast() {
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
					//print_r($_POST) ; die();
					$this->email->from('firsttoearn@programalert.biz', 'Katherine Miller');
					$this->email->reply_to('kkatherine.miller@gmail.com');
					$this->email->to(null);
					$this->email->bcc($mmgemails); 
					
					$this->email->subject($this->input->post('title'));
					$message = $this->input->post('html_message');
					// add footer
					$message .= "<p>
							=================================================</p>
						<div>
							This message is not a spam. I have no intention to spam&nbsp;anyone.</div>
						<div>
							You are receiving new program&nbsp;updates and alerts since you&nbsp;</div>
						<div>
							were part of my mailing list and have shown interest in online marketing.&nbsp;</div>
						<div>
							If you do not wish to receive email notification of this kind,&nbsp;</div>
						<div>
							please reply to this email and ask to be removed.&nbsp;</div>
						<div><br/>
							=================================================</div>";
							
					$this->email->message($message);	

					//$success = 0;
					//$fail = 0;
					
					if (isset($_POST['submit'])) {
						if ($_POST['submit'] == 'Preview') {
							echo $message;
							die();
						} else if ($_POST['submit'] == 'Test') {
						
							/*
							$this->email->to('isbogs@gmail.com');
							if ($this->email->send()) {
								$success++;
							} else {
								$fail++;
							}*/
							
							$this->email->bcc('isbogs@gmail.com'); 
							
						} else {
						
							//$mmgemails = array('isbogs@gmail.com', 'neilrowd.kennyster@gmail.com');
							/*foreach ($mmgemails as $row) {
								$this->email->to($row);
								if ($this->email->send()) {
									$success++;
								} else {
									$fail++;
								}
								//die();
							}*/
							
							
						}
					}
					
					//die();
					
					//echo "Successfully send : " . $success . "<br/>";
					//echo "Failure send : " . $fail . "<br/>";
					
					$this->email->send();
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

        function moneyforyoublast() {
		if ($this->_base_check()) {
			set_time_limit(0);
			$error_message = '';
			
			$requiredParams = array(
				 'title' => 'Email Title'
				,'html_message' => 'Email Message'
				,'dest_url' => 'Referral Link'
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
					//print_r($_POST) ; die();
					$this->email->to(null);
					//$this->email->from('alert@honesthyipmonitor.biz', 'Money For You');
					$this->email->from('unlimitedincome@honestmailer.biz', 'Income Unlimited');
					$this->email->reply_to('sarahlabandera@gmail.com');
					$this->email->bcc($mmgemails); 
					
					$this->email->subject($this->input->post('title'));
					//$message = $this->input->post('html_message');
					// add footer
					/*$message .= "<p>
							=================================================</p>
						<div>
							This message is not a spam. I have no intention to spam&nbsp;anyone.</div>
						<div>
							You are receiving new program&nbsp;updates and alerts since you&nbsp;</div>
						<div>
							were part of my mailing list and have shown interest in online marketing.&nbsp;</div>
						<div>
							If you do not wish to receive email notification of this kind,&nbsp;</div>
						<div>
							please reply to this email and ask to be removed.&nbsp;</div>
						<div><br/>
							=================================================</div>";*/
					$data['reflink'] = $this->input->post('dest_url');
					$data['message'] = $this->input->post('html_message');
					$message = $this->load->view('bogs/moneyforyoutemplate', $data, TRUE);		
					
					$this->email->message($message);	

					//$success = 0;
					//$fail = 0;
					
					if (isset($_POST['submit'])) {
						if ($_POST['submit'] == 'Preview') {
							echo $message;
							die();
						} else if ($_POST['submit'] == 'Test') {
						
							/*
							$this->email->to('isbogs@gmail.com');
							if ($this->email->send()) {
								$success++;
							} else {
								$fail++;
							}*/
							
							$this->email->bcc('isbogs@gmail.com'); 
							
						} else {
						
							//$mmgemails = array('isbogs@gmail.com', 'neilrowd.kennyster@gmail.com');
							/*foreach ($mmgemails as $row) {
								$this->email->to($row);
								if ($this->email->send()) {
									$success++;
								} else {
									$fail++;
								}
								//die();
							}*/
							
							
						}
					}
					
					//die();
					
					//echo "Successfully send : " . $success . "<br/>";
					//echo "Failure send : " . $fail . "<br/>";
					
					$this->email->send();
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
	
	function cindyblast() {
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
					//print_r($_POST) ; die();
					$this->email->from('cindy@programalert.biz', 'Sure Wealth');
					$this->email->reply_to('Surewealthcindy1@gmail.com');
					$this->email->to(null);
					$this->email->bcc($mmgemails); 
					
					$this->email->subject($this->input->post('title'));
					$message = $this->input->post('html_message');
					// add footer
					$message .= '<p style="margin-bottom:1em;font-family:Geneva,Verdana,Arial,Helvetica,sans-serif;text-align:center;font-size:12px;line-height:1.34em;color:#999999;display:block">
									If you do want to receive email notification of this kind, ask to be removed.
								</p>';
							
					$this->email->message($message);	

					//$success = 0;
					//$fail = 0;
					
					if (isset($_POST['submit'])) {
						if ($_POST['submit'] == 'Preview') {
							echo $message;
							die();
						} else if ($_POST['submit'] == 'Test') {
						
							/*
							$this->email->to('isbogs@gmail.com');
							if ($this->email->send()) {
								$success++;
							} else {
								$fail++;
							}*/
							
							$this->email->bcc(array('isbogs@gmail.com', 'Surewealthcindy2@gmail.com')); 
							
						} else {
						
							//$mmgemails = array('isbogs@gmail.com', 'neilrowd.kennyster@gmail.com');
							/*foreach ($mmgemails as $row) {
								$this->email->to($row);
								if ($this->email->send()) {
									$success++;
								} else {
									$fail++;
								}
								//die();
							}*/
							
							
						}
					}
					
					//die();
					
					//echo "Successfully send : " . $success . "<br/>";
					//echo "Failure send : " . $fail . "<br/>";
					
					$this->email->send();
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
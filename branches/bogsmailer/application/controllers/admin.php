<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends MY_Controller {

	function __construct() {
		parent::__construct();
		$this->load->model('subscribers_model');
		$this->load->model('subscriptions_model');
		$this->load->model('emails_model');
		$this->load->library('email');
		$this->email->set_newline("\r\n");
                ini_set('memory_limit', '-1');
	}
	
	function index() {
		if ($this->_base_check()) {
			$result = $this->subscribers_model->getAllSubscribers();
			$this->load->view('admin/index', $result);
		}
	}
	
	function preblast() {
		if ($this->_base_check()) {
			$result = $this->subscriptions_model->getAllSubscriptions();
			$this->load->view('admin/preblast', $result);
		}
	}
	
	function blast() {
		if ($this->_base_check()) {
			$error_message = '';
			
			$requiredParams = array(
				 'title' => 'Email Title'
				,'message' => 'Email Message'
			);
			
			$ret = $this->_check_required($_POST, $requiredParams);
			$error_code = $ret['err_cd'];

			if ($error_code == NO_ERROR) {
				$sub_types = $this->input->post('subscription_type');
				$sub_ids = '';
				
				if (is_array($sub_types) && count($sub_types) > 0) {
					foreach ($sub_types as $row) {
						if ($sub_ids == '') {
							$sub_ids .= $row;
						} else {
							$sub_ids .= ', ' . $row;
						}
					}
				}
				$result = $this->subscribers_model->getBySubscription($sub_ids);
				
				$success_count = 0;
				$fail_count = 0;
				if ($result['count'] > 0) {
					$subscribers = $result['data'];
					
					foreach($subscribers as $row) {
						$this->email->from('no_reply@gmail.com', 'Anonymous');
						$this->email->to($row['email_address']); 
						$this->email->reply_to('no_reply@gmail.com'); 

						$this->email->subject($this->input->post('title'));
						$this->email->message($this->input->post('message'));	

						if ($this->email->send()) {
							$success_count++;
						} else {
							$fail_count++;
						}

						//echo $this->email->print_debugger();
					}
				}
				
				echo "Success : " . $success_count . "<br/>";
				echo "Fail : " . $fail_count;
				
			} else {
				$error_message = "Missing Parameter";
			}
			
			if ($error_message != '') {
				show_error($error_message);
			}
		}
	}
	
	function superpreblast() {
		if ($this->_base_check()) {
			$this->load->view('admin/superpreblast');
		}
	}
	
	function superblast() {
		if ($this->_base_check()) {
			set_time_limit(0);
			$error_message = '';
			
			$requiredParams = array(
				 'title' => 'Email Title'
				,'introduction' => 'Introduction'
				,'html_message' => 'Email Message'
				//,'banner_url' => 'Banner URL'
				,'dest_url' => 'Destination URL'
				,'processors' => 'Payment Processors'
				,'program_name' => 'Program Name'
				,'description' => 'Description'
			);
			
			$ret = $this->_check_required($_POST, $requiredParams);
			$error_code = $ret['err_cd'];
			//echo "<pre>";
			//print_r($_POST);
			
			if ($error_code == NO_ERROR) {
				$result = $this->emails_model->getAllMMGEmails();
				//print_r($result);
				if ($result['count'] > 0) {
					foreach ($result['data'] as $row) {
						$mmgemails[] = $row['email_address'];
					}
					//echo "<pre>";
					//print_r($mmgemails);
					$this->email->to(null);
					$this->email->from('alert@honesthyipmonitor.biz', 'Neilrowd Kennyster');
					$this->email->reply_to('moneymusica@gmail.com');
					$this->email->bcc($mmgemails); 					
					
					$this->email->subject($this->input->post('title'));
					$arr['introduction'] = $this->input->post('introduction');
					$arr['processors'] = $this->input->post('processors');
					$arr['program_name'] = $this->input->post('program_name');
					$arr['banner_url'] = $this->input->post('banner_url');
					$arr['dest_url'] = $this->input->post('dest_url');
					$arr['description'] = $this->input->post('description');
					$arr['html_message'] = $this->input->post('html_message');
					//$message = $this->load->view('emailtemplate/superblast', $arr, true);
					$message = $this->_formatEmail($arr);
					$this->email->message($message);

					$success = 0;
					$fail = 0;
					
					if (isset($_POST['submit'])) {
						if ($_POST['submit'] == 'Preview') {
							echo $message;
							die();
						} else if ($_POST['submit'] == 'Test') {
						
							/*$this->email->to('isbogs@gmail.com');
							if ($this->email->send()) {
								$success++;
							} else {
								$fail++;
							}*/
							
							$this->email->bcc('isbogs@gmail.com'); 
							
						} else {
						
							//$mmgemails = array('isbogs@gmail.com', 'neilrowd.kennyster@gmail.com', 'rudyneilrudyneil@gmail.com', 'kkatherine.miller@gmail.com', 'sopingstore@gmail.com', 'vgod.vigoss@gmail.com');
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
	
	function _startHTML($data) {
		$body = "<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN'>";
		$body.= "<html>";
		$body.= "<head><meta http-equiv='Content-Type' content='text/html; charset=ISO-8859-1; content-transfer-encoding: quoted-printable'/></head>";
		
		$body.= "<body style='background: #E4EEF0; margin: 0; padding: 20px;'>";
		$body.= "<h1 style='font-family: sans-serif; font-weight: normal; font-size: 23px; line-height: 1em; color: #fff; padding: 10px 20px; width: 627px; background: #0C1042; margin: 0;'>";
		
		$body.= "<font size='3'>" . $data['program_name'] . "</font>";
		$body .= "&nbsp;";
		$body.= "</h1>";		
		$body.= "<div style='width: 625px; min-height: 300px; padding: 10px 20px; color: #4d5052; font-family: Arial, sans-serif; font-size: 13px; background: #fff; border: 1px solid #91a7b1; border-top: 1px solid #fff;'>";
		
		return $body;
	}
	
	function _endHTML($footer) {
		$body = "</div><p style='width: 620px; font-family: Arial, sans-serif; font-size: 11px; color: #91a7b0; margin: 10px 0;'>";
		$body.= $footer;
		$body.= "</p></body></html>";
		return $body;
	}
	
	function _formatEmail($data) {
		$body = $this->_startHTML($data);	
		$body.= "<table style='border:0;' cellpadding='0' cellspacing='0'><tr><td valign='top'><p>Hi folks,</p>";
		$body.= "<p>" . $data['introduction'] . "</p>";
		//if (strlen($data->description) > 0) {
			$body.= "<div style='border-top: 1px solid #bacdd6; border-bottom: 1px solid #fff; margin: 20px 0;'></div><p>Program Name : <b>" . $data['program_name'] . "</b></p>";
		//}
		$body.= "<div style='border-top: 1px solid #bacdd6; border-bottom: 1px solid #fff; margin: 20px 0;'></div><table style='border:0;' cellpadding='0' cellspacing='0'>";
		if (isset($data['banner_url']) && $data['banner_url'] != '') {
			$body.= "<tr><td valign='middle'>";
			//$body.= "<a href='" . $data->companyurl . "' style='color: #236f8e; word-wrap: break-word'>";
			$body.= "<a href='" . $data['dest_url'] . "' style='color: #236f8e; word-wrap: break-word'>";
			$body.= "<img src='" . $data['banner_url'] . "' style='margin-right: 10px; width:100px; height: 100px' border='0'/></a>";
			$body.= "</td>";
		}
		$body.= "<td valign='middle'><div style='width: 320px'>";
		$body.= "<a href='' style='color: #236f8e; word-wrap: break-word'></a>";
		$body.= "<p>Accepts " . $this->styleProcessors($data['processors']) . "<br/>";
		$body.= $this->styleProcessors($data['description']) . "</p>";
		$body.= "</div></td></tr>";
		$body.= "<tr><td colspan='2'><br/>";
		$body.="<div style='border-top: 1px solid #bacdd6; border-bottom: 1px solid #fff;'>";
		// message converted from ckeditor
		$body.= $data['html_message'];
		
		$body.="<h2> <span style='font-size:14px;'><span style='color:#ff0000;'><strong>JOIN HERE </strong></span>&nbsp;: <a href='" . $data['dest_url'] . "'>" . $data['dest_url'] . "&nbsp;</a></span></h2></div></td></tr>";
		$body.= "</table><div style='border-top: 1px solid #bacdd6; border-bottom: 1px solid #fff; margin: 20px 0;'></div>";
		$body.= "<p><font face= 'Courier New'><em>To our success</em>,</font><br/><b><font face= 'Courier New'>Neilrowd K.(musica)</font></b><br/><!--<a href='http://moneymusica.pro'><font face= 'Courier New'>http://moneymusica.pro</font></a><br/>--><font face= 'Courier New'>Skype: <b>nk_musica</b></font></p></td><td valign='top'><div style='width: 178px; background: #d1d4d9; border-radius: 5px; margin: 20px 0 0 20px; padding:10px 0 10px;'>";
		$body.= "<h2 style='font-size: 12px; margin: 10px 10px 20px 44px;'>Happy Earnings!</h2>";
		$body.= "<div style='background: #1E3E96; margin: 10px; border-radius: 5px;'><a href='" . $data['dest_url'] . "' style='display: block; padding: 10px; color: #fff; font-weight: bold; text-align: center; text-decoration: none;'>Join Here</a></div></div></td></tr></table>";

		$footer = "This message is not a spam. I have no intention to spam anyone. You are receiving new program updates and alerts since you are part of my mailing list. If you do not wish to receive email notification of this kind, please reply to this email and ask to be removed. For general inquiries or if you have a program that you want me to promote, please feel free to contact <a href='mailto:neilrowd.kennyster@gmail.com' style='color: #236f8e;'>neilrowd.kennyster@gmail.com</a>.";
		
		$body.= $this->_endHTML($footer);
		
		return $body;
	}
	
	function styleProcessors($processors = '') {
		$proc = $processors;
		$proc = str_ireplace("payza", "<em><span style='color:#008000;'><strong>Payza</strong></span></em>", $proc);
		$proc = str_ireplace("stp", "<em><span style='color:#000080;'><strong>STP</strong></span></em>", $proc);
		$proc = str_ireplace("lr", "<em><span style='color:#ff0000;'><strong>LR</strong></span></em>", $proc);
		$proc = str_ireplace("pm", "<em><span style='color:#b22222;'><strong>PM</strong></span></em>", $proc);
		$proc = str_ireplace("egopay", "<em><span style='color:#ff8c00;'><strong>Egopay</strong></span></em>", $proc);
		
		return $proc;
	}
}
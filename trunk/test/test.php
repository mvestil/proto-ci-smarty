<?php 

	foreach (array('username','password') as $get_fields ){
  		${$get_fields} = $_REQUEST[$get_fields];
	}

	$location = "/test/page3.php";
	
	
	session_start();
	$_SESSION['username'] = $username;
	$_SESSION['password'] = $password;
	$_SESSION['error'] = "no password";

	echo "<pre>";
	print_r($_SESSION);



/*
	if (!headers_sent()) {
		//$current_page = current_page_url();
		if ((substr_count($location, 'http://') == 0) && (substr_count($location, 'https://') == 0)) {
			$location = $CONFIG->url . $location;
		}
		$param = SID;
		$location .= '?' . $param;
		header("Location: {$location}");
		exit;
	}
*/

?>
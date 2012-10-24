<?php
	
	session_start();
	
	$username = $_SESSION['username'];
	$error = $_SESSION['error'];

	$header = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML Basic 1.1//EN" "http://www.w3.org/TR/xhtml-basic/xhtml-basic11.dtd">';
	$header .= '<html><head>
						<title></title>
						<link href="../tools/settings.css" rel="stylesheet" type="text/css">
                        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
					</head>';
	$body = '<body>'.$error;

	$body .= '<form action="/test/test.php" method="post">
			hiragana: <input type="text" name="firstname" istyle="1"/><br />
			halfkana: <input type="text" name="firstname" istyle="2"/><br />
			alpha: <input type="text" name="firstname" istyle="3"/><br />
			numeric: <input type="text" name="lastname" istyle="4"/>
			
			</form>';
			
	$body .= '</body>';	
	
	echo $header;
	echo $body;

?>
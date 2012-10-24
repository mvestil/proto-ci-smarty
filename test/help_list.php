<?php
	
	session_start();

	$header = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML Basic 1.1//EN" "http://www.w3.org/TR/xhtml-basic/xhtml-basic11.dtd">';
	$header .= '<html><head>
						<title></title>
						<link href="../tools/settings.css" rel="stylesheet" type="text/css">
                        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
					</head>';
	$body = '<body>';

	$body .= '<a href="question1.php#question1">Question 1</a>';
	$body .= '<br><a href="question1.php#question2">Question 2</a>';
	$body .= '<br><a href="question1.php#question3">Question 3</a>';
	$body .= '<br><a href="question1.php#question4">Question 4</a>';
	$body .= '<br><a href="question1.php#question5">Question 5</a>';
	$body .= '<br><a href="question1.php#question6">Question 6</a>';
	
	$body .= '</body>';

	echo $header . $body;

?>
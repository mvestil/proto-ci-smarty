<?php
	
	session_start();
	
	$username = $_SESSION['username'];
	$error = $_SESSION['error'];

	$header = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML Basic 1.1//EN" "http://www.w3.org/TR/xhtml-basic/xhtml-basic11.dtd">';
	$header .= '<html><head>
						<title></title>
						<link href="../tools/settings.css" rel="stylesheet" type="text/css">
                        <meta http-equiv="Content-Type" content="text/html; charset=Shift_JIS">
					</head>';
	$body = '<body>'.$error;

	$body .= '<form action="/test/test.php" method="post">
			 <a href="mailto:j_minoza@alliance.com.ph?subject=test&body=test">test mail</a>
			 <select name="cars">
  <option value="volvo">Volvo</option>
  <option value="saab">Saab</option>
  <option value="mercedes">Mercedes</option>
  <option value="audi">Audi</option>
</select> 
			<input type="text"   name="username"  value="'.$username.'"/>
			<input type="text"   name="password"  value=""/>  
			<input name=""  type="submit" value="Log in"  />
			<input type="hidden" name="PHPSESSID" value="' . htmlspecialchars(session_id()) . '" >
			
			<br />
			First name: <input type="text" name="firstname" /><br />
			Last name: <input type="text" name="lastname" />
			
			</form>';
			
	$body .= '</body>';	
	
	echo $header;
	echo $body;

?>
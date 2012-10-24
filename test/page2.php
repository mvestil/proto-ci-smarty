<?php
	
	session_start();
	
	//change to limit-offset
	for($count=1;$count<=10;$count++){
		
		$id= "id".$count;
		//unset index incase user uncheck it
		unset($_SESSION[$id]);
		if(isset($_POST[$id])){		
			$_SESSION[$id] = $_POST[$id];	
		}
	}

	$header = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML Basic 1.1//EN" "http://www.w3.org/TR/xhtml-basic/xhtml-basic11.dtd">';
	$header .= '<html><head>
						<title></title>
						<link href="../tools/settings.css" rel="stylesheet" type="text/css">
                        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
					</head>';
	$body = '<body>'.$error;
	
	//items: 
	//name = row count from limit-offset range
	//value = guid
	//NameXX = handle name
	
	$body .= '<form action="/test/page3.php" method="post">			 
			
			<input type="checkbox" name="id11" value="name11" />Name11<br>
			<input type="checkbox" name="id12" value="name12" />Name12<br>
			<input type="checkbox" name="id13" value="name13" />Name13<br>
			<input type="checkbox" name="id14" value="name14" />Name14<br>
			<input type="checkbox" name="id15" value="name15" />Name15<br>
			<input type="checkbox" name="id16" value="name16" />Name16<br>
			<input type="checkbox" name="id17" value="name17" />Name17<br>
			<input type="checkbox" name="id18" value="name18" />Name18<br>
			<input type="checkbox" name="id19" value="name19" />Name19<br>
			<input type="checkbox" name="id20" value="name20" />Name20<br>
			<input type="hidden" name="PHPSESSID" value="' . htmlspecialchars(session_id()) . '" >
			<input type="hidden" name="t" value="'.date('ymdHis').'">			
			<input name=""  type="submit" value="to page 3"  />
			 
			</form>';
			
	$body .= '</body>';	
	
	echo $header;
	echo $body;

	echo "<pre>SELECTED from page 1:";
	print_r($_SESSION);

?>
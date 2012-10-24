<?php
	
	session_start();
	
	for($count=11;$count<=20;$count++){
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

	$body .= '<form action="/test/results.php" method="post">			 
			
			<input type="checkbox" name="id21" value="name21" />Name21<br>
			<input type="checkbox" name="id22" value="name22" />Name22<br>
			<input type="checkbox" name="id23" value="name23" />Name23<br>
			<input type="checkbox" name="id24" value="name24" />Name24<br>
			<input type="checkbox" name="id25" value="name25" />Name25<br>
			<input type="checkbox" name="id26" value="name26" />Name26<br>
			<input type="checkbox" name="id27" value="name27" />Name27<br>
			<input type="checkbox" name="id28" value="name28" />Name28<br>
			<input type="checkbox" name="id29" value="name29" />Name29<br>
			<input type="checkbox" name="id30" value="name30" />Name30<br>
			<input type="hidden" name="PHPSESSID" value="' . htmlspecialchars(session_id()) . '" >
			<input type="hidden" name="t" value="'.date('ymdHis').'">			
			<input name=""  type="submit" value="view results"  />
			 
			</form>';
			
	$body .= '</body>';	
	
	echo $header;
	echo $body;	
	
	echo "<pre>SELECTED from page 1 and 2:";
	print_r($_SESSION);
?>
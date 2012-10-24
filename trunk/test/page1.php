<?php
	
	session_start();
	
	$header = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML Basic 1.1//EN" "http://www.w3.org/TR/xhtml-basic/xhtml-basic11.dtd">';
	$header .= '<html><head>
						<title></title>
						<link href="../tools/settings.css" rel="stylesheet" type="text/css">
                        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
					</head>';
	$body = '<body>'.$error;

	$body .= '<form action="/test/page2.php" method="post">			 
			
			<input type="checkbox" name="id1" value="name1" />Name1<br>
			<input type="checkbox" name="id2" value="name2" />Name2<br>
			<input type="checkbox" name="id3" value="name3" />Name3<br>
			<input type="checkbox" name="id4" value="name4" />Name4<br>
			<input type="checkbox" name="id5" value="name5" />Name5<br>
			<input type="checkbox" name="id6" value="name6" />Name6<br>
			<input type="checkbox" name="id7" value="name7" />Name7<br>
			<input type="checkbox" name="id8" value="name8" />Name8<br>
			<input type="checkbox" name="id9" value="name9" />Name9<br>
			<input type="checkbox" name="id10" value="name10" />Name10<br>
			<input type="hidden" name="PHPSESSID" value="' . htmlspecialchars(session_id()) . '" >
			<input type="hidden" name="t" value="'.date('ymdHis').'">
			<input name=""  type="submit" value="to page 2"  disabled="true"/>
			 
			</form>';
			
	$body .= '</body>';	
	
	echo $header;
	echo $body;

?>
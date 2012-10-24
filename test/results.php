<?php 

	session_start();

	for($count=21;$count<=30;$count++){
		$id= "id".$count;
		//unset index incase user uncheck it
		unset($_SESSION[$id]);
		if(isset($_POST[$id])){
			$_SESSION[$id] = $_POST[$id];	
		}
	}

	echo "<pre>SELECTED:";
	print_r($_SESSION);

	
?>
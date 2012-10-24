<?php

echo "<pre>";
print_r($_REQUEST);

	//check which button was pressed
	if($_REQUEST['submit'] == 'Yes'){
		//move file from temp folder to upload folder
      	rename("temp/" .$_REQUEST['filename'],
      	"upload/" . $_REQUEST['filename']);
      	echo "Stored in: " . "upload/" . $_REQUEST['filename'];
	}else{
		//delete file in temp folder
		unlink("temp/" .$_REQUEST['filename']);
		echo "File not saved!";
	}
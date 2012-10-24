<?php

	//check filetype and file size
	if (($_FILES["file"]["type"] == "image/jpeg")
		&& ($_FILES["file"]["size"] < 200000))
  	{

  		if ($_FILES["file"]["error"] > 0){
    		echo "Return Code: " . $_FILES["file"]["error"] . "<br />";
    	}else{
  			
    		//get the temporary filename
    		$tmpname = $_FILES["file"]["tmp_name"];
    		
    		//get the filename uploaded + prefix timestamp
    		$filename = time().$_FILES["file"]["name"];
    		
    		//save file to temp folder
    		 move_uploaded_file($tmpname,
      			"temp/" . $filename);
    		
    		//show confirmation screen
			echo '<html>
				<body>
				
				<form action="upload_file.php" method="post">
				<label for="file">Save File?</label>
				<br />
				<input type="submit" name="submit" value="Yes" />
				<input type="submit" name="submit" value="No" />
					
				<input type="hidden" name="filename" value="'. $filename .'">
				
				</form>
				
				</body>
				</html>	';
    	}
	
  	}else{
  		echo "Invalid file";
  }
?> 
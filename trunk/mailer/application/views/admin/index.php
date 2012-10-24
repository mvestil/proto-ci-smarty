<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/css/mailer.css" />
<title>SlickRed | florida web design</title>
</head>

<body>
<div id="container">
		<div id="header">
        	<h1>is<span class="off">Bogs</span></h1>
        </div>   
        
        <div id="menu">
        	<ul>
            	<li class="menuitem"><a href="#">Home</a></li>
                <li class="menuitem"><a href="#">About</a></li>
				<li class="menuitem" style="align:right;"><a href="<?php echo base_url();?>login/logoutUser">Logout</a></li>
			</ul>
        </div>
        
        <div id="leftmenu">

        <div id="leftmenu_top"></div>

				<div id="leftmenu_main">    
                
                <h3></h3>
                        
                <ul>
                    <li><a href="<?php echo base_url();?>admin">Subscribers</a></li>
                    <li><a href="<?php echo base_url();?>admin/preblast">Email Subscribers</a></li>
					<li><a href="<?php echo base_url();?>admin/superpreblast">Email Blast</a></li>
                </ul>
</div>
                
                
              <div id="leftmenu_bottom"></div>
        </div>
        
        
        
        
		<div id="content">
        
        
        <div id="content_top"></div>
        <div id="content_main" style="padding:20px; height:100px;">
		<h2>Subscribers</h2>
			<div id="subinfo" style="padding:10px; padding-bottom:20px">
        	<table align="left">
				<tr>
					<th>First Name</th>
					<th>Last Name</th>
					<th>Email Address</th>
				</tr>
				<?php if (count($data) > 0 ) { 
						foreach ($data as $row) {
				?>
						<tr>
							<td width="200"><?php echo $row['first_name'];?></th>
							<td width="200"><?php echo $row['last_name'];?></th>
							<td width="200"><?php echo $row['email_address'];?></th>
						</tr>
				<?php 	} 
					 }
				?>
			</table>
			</div>
        </div>
        <div id="content_bottom"></div>
            
      </div>
   </div>
</body>
</html>

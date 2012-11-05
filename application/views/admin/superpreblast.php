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
        <div id="content_main" style="padding:20px">
		<h2>Blast Email</h2>
			<div id="superpreblast" style="align:left;">
        	
				<form method="post" action="superblast">
					<table>
						<tr>
							<td>Title</td>
							<td><input name="title" type="text" maxlength="100"/></td>
						</tr>
						<tr>
							<td>Introduction</td>
							<td><textarea name="introduction" type="textarea" cols="30" rows="4"></textarea></td>
						</tr>
						<tr>
							<td><br/><br/></td>
							<td></td>
						</tr>
						<tr>
							<td>Program Name</td>
							<td><input name="program_name" type="text" /></td>
						</tr>
						<tr>
							<td>Payment Processors</td>
							<td><input name="processors" type="text" /> &nbsp; <font size="1"><i>(Payza, STP, LR, PM, Egopay)</i></font></td>
						</tr>
						<tr>
							<td>Banner URL</td>
							<td><input name="banner_url" type="text" /></td>
						</tr>
						<tr>
							<td>Referral Link</td>
							<td><input name="dest_url" type="text" /></td>
						</tr>
						<tr>
							<td>Description</td>
							<td><textarea name="description" type="textarea" cols="30" rows="5"></textarea></td>
						</tr>
						<tr>
							<td>Message</td>
							<td><textarea name="html_message" type="textarea" cols="30" rows="10"></textarea></td>
						</tr>
						<tr>
							<td align="center" colspan="2">
							<input name="submit" type="submit" value="Submit" />
							<input name="submit" type="submit" value="Preview" />
							</td>
						</tr>
					</table>
				</form>

			</div>
        </div>
        <div id="content_bottom"></div>
            
      </div>
   </div>
</body>
</html>

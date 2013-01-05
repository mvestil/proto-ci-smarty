<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="css/epf.css" />
<title>Elite Prime Finance</title>
</head>
<body bgcolor="#FFFFFF">
 <div id="container">
  <div align="center">
   <div id="header">
    <div id="first_layer" class="header">
     <table cellpadding="0" cellspacing="0" width="998">
      <tr>
       <td align="left" valign="middle" class="h_85 w_237"><a href="?a=home"><img src="images/logo.png" width="237" height="57" /></a></td>
      </tr>
     </table>
    </div>
    <div id="second_layer" class="clear w_998 banner"><img src="images/b.gif" /></div>
   </div>
   <div id="contents" class="clear">
    <div id="nav1" align="center" class="d_blue">
     <table cellpadding="0" cellspacing="0" width="998">
      <tr>
       <td width="269" class="nav"><img src="images/b.gif" /></td>
       <td class="pad_20_l">
        <div class="float_l"><a href=?a=home><div class="home" style="float:left;"></div></a></div>
        <div class="float_l"><a href=?a=rules><div class="terms" style="float:left;"></div></a></div>
		{if $userinfo.logged != 1}
		{*<a href=?a=signup class=toplink>Sign up1</a> &middot; 
		<a href=?a=home class=toplink>Login</a> &middot;*}
			<div class="float_r pad_22_r">
				<div class="float_l pad_13_t pad_22_r"><a href=?a=signup><div class="signup_btn"></div></a></div>
				<div class="float_r pad_13_t"><a href=?a=home><div class="user_login_btn"></div></a></div>
			</div>
		{else}
			{*<a href=?a=logout class=toplink>Logout</a> &middot; *}
			<div class="float_r pad_22_r">
				<div class="pad_13_t"><a href=?a=logout><div class="logout_btn"></div></a></div>
			</div>
		{/if}
        <div class="float_l"><a href=?a=support><div class="contact_us" style="float:left;"></div></a></div>
        <div class="float_l"><a href=?a=faq><div class="faq" style="float:left;"></div></a></div>
       </td>
      </tr>
     </table>
    </div>
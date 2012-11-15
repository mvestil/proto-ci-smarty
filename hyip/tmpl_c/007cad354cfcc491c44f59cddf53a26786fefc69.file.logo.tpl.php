<?php /* Smarty version Smarty-3.1.11, created on 2012-11-15 10:40:44
         compiled from ".\tmpl\logo.tpl" */ ?>
<?php /*%%SmartyHeaderCode:63450a4c6ac5ca1b7-06148472%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '007cad354cfcc491c44f59cddf53a26786fefc69' => 
    array (
      0 => '.\\tmpl\\logo.tpl',
      1 => 1352890139,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '63450a4c6ac5ca1b7-06148472',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'userinfo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_50a4c6ac6021e4_24041501',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50a4c6ac6021e4_24041501')) {function content_50a4c6ac6021e4_24041501($_smarty_tpl) {?>﻿<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
       <td align="left" valign="middle" class="h_85 w_237"><a href="index.html"><img src="images/logo.png" width="237" height="57" /></a></td>
       <td align="right">
        <div class="p_white txt_hdr">August 31, 2012  Time:09:30:02 Tue</div>
        <div class="clear p_white txt_hdr pad_5_t">Welcome Money Pacquiao!</div>
       </td>
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
		<?php if ($_smarty_tpl->tpl_vars['userinfo']->value['logged']!=1){?>
		
			<div class="float_r pad_22_r">
				<div class="float_l pad_13_t pad_22_r"><a href=?a=signup><div class="signup_btn"></div></a></div>
				<div class="float_r pad_13_t"><a href=?a=home><div class="user_login_btn"></div></a></div>
			</div>
		<?php }else{ ?>
			
			<div class="float_r pad_22_r">
				<div class="pad_13_t"><a href=?a=logout><div class="logout_btn"></div></a></div>
			</div>
		<?php }?>
        <div class="float_l"><a href=?a=support><div class="contact_us" style="float:left;"></div></a></div>
        <div class="float_l"><a href=?a=faq><div class="faq" style="float:left;"></div></a></div>
       </td>
      </tr>
     </table>
    </div><?php }} ?>
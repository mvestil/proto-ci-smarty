<?php /* Smarty version Smarty-3.1.11, created on 2012-11-14 10:30:30
         compiled from ".\tmpl\support.tpl" */ ?>
<?php /*%%SmartyHeaderCode:278550a372c6a2f7a5-15316460%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6160c3a3cca526b243ad86fbd339589ae5553574' => 
    array (
      0 => '.\\tmpl\\support.tpl',
      1 => 1351741596,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '278550a372c6a2f7a5-15316460',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'say' => 0,
    'userinfo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_50a372c6b2fc47_21127237',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50a372c6b2fc47_21127237')) {function content_50a372c6b2fc47_21127237($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<td align="left" valign="top" class="pad_10" bgcolor="#EFF3F8">
<table cellpadding="0" cellspacing="0" width="100%" height="750">
 <tr>
  <td valign="top" align="left">
   <div class="clear h_30 bgcolor_ggr pad_10_l page" align="left">CONTACT US</div>
	<?php if ($_smarty_tpl->tpl_vars['say']->value=='send'){?>
	Message has been successfully sent. We will back to you in next 24 hours. Thank you.<br><br>
	<?php }else{ ?>
   <div class="clear font_13" align="center">
	<table cellpadding="0" cellspacing="0">
	 <tr>
	  <script language=javascript>
		<?php if ($_smarty_tpl->tpl_vars['userinfo']->value['logged']==1){?>
		
		function checkform() { 
		  if (document.mainform.message.value == '') {
			alert("Please type your message!");
			document.mainform.message.focus();
			return false;
		  }
		  return true;
		}
		
		<?php }else{ ?>
		
		function checkform() {
		  if (document.mainform.name.value == '') {
			alert("Please type your full name!");
			document.mainform.name.focus();
			return false;
		  }
		  if (document.mainform.email.value == '') {
			alert("Please enter your e-mail address!");
			document.mainform.email.focus();
			return false;
		  }
		  if (document.mainform.message.value == '') {
			alert("Please type your message!");
			document.mainform.message.focus();
			return false;
		  }
		  return true;
		}
		
		<?php }?>
		</script>

		<form method=post name=mainform onsubmit="return checkform()">
		<input type=hidden name=a value=support>
		<input type=hidden name=action value=send>

		<table cellspacing=0 cellpadding=2 border=0>
		<tr>
		 <td>Your Name:</td>
		<?php if ($_smarty_tpl->tpl_vars['userinfo']->value['logged']){?>
		 <td><b><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['userinfo']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</b></td>
		<?php }else{ ?>
		 <td><input type="text" name="name" size=30 class=inpts></td>
		<?php }?>
		</tr>
		<tr>
		 <td>Your Email:</td>
		<?php if ($_smarty_tpl->tpl_vars['userinfo']->value['logged']){?>
		 <td><b><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['userinfo']->value['email'], ENT_QUOTES, 'UTF-8', true);?>
</b></td>
		<?php }else{ ?>
		 <td><input type="text" name="email" size=30 class=inpts></td>
		<?php }?>
		</tr>
		<tr>
		 <td colspan=2>Message:<br><br><textarea name=message class=inpts cols=45 rows=4></textarea>
		</tr>
		<tr>
		 <td>&nbsp;</td>
		 <td><input type=submit value="Send" class=sbmt></td>
		</tr></table>
		</form>

		<?php }?>
	 </tr>
	</table>
   </div>
  </td>
 </tr>
</table>
</td>

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>
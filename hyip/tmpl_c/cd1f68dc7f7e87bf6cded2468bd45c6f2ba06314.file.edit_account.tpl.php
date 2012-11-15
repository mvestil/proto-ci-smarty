<?php /* Smarty version Smarty-3.1.11, created on 2012-11-15 09:33:12
         compiled from ".\tmpl\edit_account.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2960350a4b6d81b5d81-54886911%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cd1f68dc7f7e87bf6cded2468bd45c6f2ba06314' => 
    array (
      0 => '.\\tmpl\\edit_account.tpl',
      1 => 1352971989,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2960350a4b6d81b5d81-54886911',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'settings' => 0,
    'frm' => 0,
    'errors' => 0,
    'userinfo' => 0,
    'pay_accounts' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_50a4b6d85383e6_93246695',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50a4b6d85383e6_93246695')) {function content_50a4b6d85383e6_93246695($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<td align="left" valign="top" class="pad_10" bgcolor="#EFF3F8">




<script language=javascript>
function IsNumeric(sText) {
  var ValidChars = "0123456789.";
  var IsNumber=true;
  var Char;
  if (sText == '') return false;
  for (i = 0; i < sText.length && IsNumber == true; i++) { 
    Char = sText.charAt(i); 
    if (ValidChars.indexOf(Char) == -1) {
      IsNumber = false;
    }
  }
  return IsNumber;
}

function checkform() {
  if (document.editform.fullname.value == '') {
    alert("Please type your full name!");
    document.editform.fullname.focus();
    return false;
  }

<?php if ($_smarty_tpl->tpl_vars['settings']->value['use_user_location']){?>

  if (document.editform.address.value == '') {
    alert("Please enter your address!");
    document.editform.address.focus();
    return false;
  }
  if (document.editform.city.value == '') {
    alert("Please enter your city!");
    document.editform.city.focus();
    return false;
  }
  if (document.editform.state.value == '') {
    alert("Please enter your state!");
    document.editform.state.focus();
    return false;
  }
  if (document.editform.zip.value == '') {
    alert("Please enter your ZIP!");
    document.editform.zip.focus();
    return false;
  }
  if (document.editform.country.options[document.editform.country.selectedIndex].text == '--SELECT--') {
    alert("Please choose your country!");
    document.editform.country.focus();
    return false;
  }

<?php }?>

  if (document.editform.password.value != document.editform.password2.value) {
    alert("Please check your password!");
    document.editform.fullname.focus();
    return false;
  }

<?php if ($_smarty_tpl->tpl_vars['settings']->value['use_transaction_code']){?>

  if (document.editform.transaction_code.value != document.editform.transaction_code2.value) {
    alert("Please check your transaction code!");
    document.editform.transaction_code2.focus();
    return false;
  }

<?php }?>


<?php if ($_smarty_tpl->tpl_vars['settings']->value['usercanchangeemail']==1){?>

  if (document.editform.email.value == '') {
    alert("Please enter your e-mail address!");
    document.editform.email.focus();
    return false;
  }

<?php }?>

  return true;
}
</script>


<table cellpadding="0" cellspacing="0" width="100%" height="750">
 <tr>
  <td valign="top" align="left">
   <div class="clear h_30 bgcolor_ggr pad_10_l page" align="left">EDIT ACCOUNT</div>
   <div class="clear font_13 pad_10_t" align="center">
	<form action="index.php" method=post onsubmit="return checkform()" name=editform>
		<input type=hidden name=a value=edit_account>
		<input type=hidden name=action value=edit_account>
		<?php if ($_smarty_tpl->tpl_vars['frm']->value['say']=='changed'){?>
		Your account data has been updated successfully.<br><br>
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['errors']->value){?>
		<ul style="color:red">
		<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['e'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['e']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['e']['name'] = 'e';
$_smarty_tpl->tpl_vars['smarty']->value['section']['e']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['errors']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['e']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['e']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['e']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['e']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['e']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['e']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['e']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['e']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['e']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['e']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['e']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['e']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['e']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['e']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['e']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['e']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['e']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['e']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['e']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['e']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['e']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['e']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['e']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['e']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['e']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['e']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['e']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['e']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['e']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['e']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['e']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['e']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['e']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['e']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['e']['total']);
?>
		<?php if ($_smarty_tpl->tpl_vars['errors']->value[$_smarty_tpl->getVariable('smarty')->value['section']['e']['index']]=='full_name'){?>
		<li>Please enter your Full Name!
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['errors']->value[$_smarty_tpl->getVariable('smarty')->value['section']['e']['index']]=='address'){?>
		<li>Please enter your address!
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['errors']->value[$_smarty_tpl->getVariable('smarty')->value['section']['e']['index']]=='city'){?>
		<li>Please enter your city!
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['errors']->value[$_smarty_tpl->getVariable('smarty')->value['section']['e']['index']]=='state'){?>
		<li>Please enter your state!
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['errors']->value[$_smarty_tpl->getVariable('smarty')->value['section']['e']['index']]=='zip'){?>
		<li>Please enter your zip!
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['errors']->value[$_smarty_tpl->getVariable('smarty')->value['section']['e']['index']]=='country'){?>
		<li>Please choose your country!
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['errors']->value[$_smarty_tpl->getVariable('smarty')->value['section']['e']['index']]=='username'){?>
		<li>Please enter your username!
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['errors']->value[$_smarty_tpl->getVariable('smarty')->value['section']['e']['index']]=='password'){?>
			<li>Please enter a password!
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['errors']->value[$_smarty_tpl->getVariable('smarty')->value['section']['e']['index']]=='password_confirm'){?> 
			<li>Please check your password!
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['errors']->value[$_smarty_tpl->getVariable('smarty')->value['section']['e']['index']]=='password_too_small'){?>
		<li>Password is too small, please enter at least <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value['min_user_password_length'], ENT_QUOTES, 'UTF-8', true);?>
 chars!
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['errors']->value[$_smarty_tpl->getVariable('smarty')->value['section']['e']['index']]=='transaction_code'){?>
			<li>Please enter the Transaction Code! <?php }?> <?php if ($_smarty_tpl->tpl_vars['errors']->value[$_smarty_tpl->getVariable('smarty')->value['section']['e']['index']]=='transaction_code_confirm'){?> 
			<li>Please check your Transaction Code!
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['errors']->value[$_smarty_tpl->getVariable('smarty')->value['section']['e']['index']]=='transaction_code_too_small'){?>
		<li>Transaction Code is too small, please enter at least <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value['min_user_password_length'], ENT_QUOTES, 'UTF-8', true);?>
 chars!
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['errors']->value[$_smarty_tpl->getVariable('smarty')->value['section']['e']['index']]=='wrong_current_password'){?>
		<li>You entered wrong current password
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['errors']->value[$_smarty_tpl->getVariable('smarty')->value['section']['e']['index']]=='transaction_code_vs_password'){?>
			<li>Transaction Code should be different then the Password! <?php }?> <?php if ($_smarty_tpl->tpl_vars['errors']->value[$_smarty_tpl->getVariable('smarty')->value['section']['e']['index']]=='invalid_transaction_code'){?> 
			<li>You have provided invalid Current Transaction Code!
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['errors']->value[$_smarty_tpl->getVariable('smarty')->value['section']['e']['index']]=='email'){?>
		<li>Please enter your e-mail!
		<?php }?>
		<br>
		<?php endfor; endif; ?>
		</ul>
		<?php }?>
	<table cellpadding="0" cellspacing="0" width="100%">
	 <tr>
	  <td align="center" class="td1">
	   <table cellpadding="0" cellspacing="0">
		<tr>
		 <td valign="top">
		  <div class="float_l td1 w_180">Account Name</div>
		  <div class="float_l td1">:</div>
		  <div class="float_l td1 w_180"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['userinfo']->value['username'], ENT_QUOTES, 'UTF-8', true);?>
</div>
		  <div class="clear"></div>
		  <div class="float_l td1 w_180">Registration date</div>
		  <div class="float_l td1">:</div>
		  <div class="float_l td1 w_180"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['userinfo']->value['date_register'], ENT_QUOTES, 'UTF-8', true);?>
</div>
		  <div class="clear"></div>
		  <div class="float_l td1 w_180" style="position:relative; top:5px;">Your Full Name</div>
		  <div class="float_l td1">:</div>
		  <div class="float_l td1 w_180"><input class="w_160" name=fullname value='<?php echo htmlspecialchars(preg_replace("%(?<!\\\\)'%", "\'",$_smarty_tpl->tpl_vars['userinfo']->value['name']), ENT_QUOTES, 'UTF-8', true);?>
' type="text" /></div>
		  <div class="clear"></div>
		  <div class="float_l td1 w_180" style="position:relative; top:5px;">New Password</div>
		  <div class="float_l td1">:</div>
		  <div class="float_l td1 w_180"><input class="w_160" type=password name=password value="" type="text" /></div>
		  <div class="clear"></div>
		  <div class="float_l td1 w_180" style="position:relative; top:5px;">Confirm Password</div>
		  <div class="float_l td1">:</div>
		  <div class="float_l td1 w_180"><input class="w_160" type=password name=password2 value="" type="text" /></div>
		 
		<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['ps'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['ps']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ps']['name'] = 'ps';
$_smarty_tpl->tpl_vars['smarty']->value['section']['ps']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['pay_accounts']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ps']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['ps']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ps']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ps']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['ps']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ps']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['ps']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['ps']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['ps']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ps']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['ps']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['ps']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['ps']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['ps']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['ps']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ps']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['ps']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['ps']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['ps']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['ps']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['ps']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['ps']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['ps']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ps']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ps']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ps']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['ps']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ps']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ps']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['ps']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ps']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['ps']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ps']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['ps']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['ps']['total']);
?>	
		  <div class="clear"></div>
		  <div class="float_l td1 w_180">Your <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['pay_accounts']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ps']['index']]['name'], ENT_QUOTES, 'UTF-8', true);?>
 acc no</div>
		  <div class="float_l td1">:</div>
		  <div class="float_l td1 w_180"><?php if ($_smarty_tpl->tpl_vars['settings']->value['usercanchangeegoldacc']==0){?><?php echo htmlspecialchars(htmlspecialchars($_smarty_tpl->tpl_vars['pay_accounts']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ps']['index']]['account'], ENT_QUOTES, 'UTF-8', true), ENT_QUOTES, 'UTF-8', true);?>
<?php }else{ ?><input type=text class="w_160" name=pay_account[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['pay_accounts']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ps']['index']]['id'], ENT_QUOTES, 'UTF-8', true);?>
] value="<?php echo htmlspecialchars(htmlspecialchars($_smarty_tpl->tpl_vars['pay_accounts']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ps']['index']]['account'], ENT_QUOTES, 'UTF-8', true), ENT_QUOTES, 'UTF-8', true);?>
"><?php }?></div>
		<?php endfor; endif; ?>

		  <div class="clear"></div>
		  <div class="float_l td1 w_180" style="position:relative; top:5px;">E-mail Address</div>
		  <div class="float_l td1">:</div>
		  <div class="float_l td1 w_180"><input class="w_160" name=email value='<?php echo htmlspecialchars(preg_replace("%(?<!\\\\)'%", "\'",$_smarty_tpl->tpl_vars['userinfo']->value['email']), ENT_QUOTES, 'UTF-8', true);?>
' type="text" /></div>
		  <div class="clear"></div>
		 </td>
		</tr>
	   </table>
	  </td>
	 </tr>
	 <tr>
	  <td colspan="5" align="center" class="font_13 pad_20_t">
	   <table cellpadding="0" cellspacing="0">
		<tr>
		 <td colspan="2" class="pad_20_t" align="center"><a href="#"><div class="edit"></div></a></td>
		</tr>
	   </table>
	  </td>
	 </tr>
	 <tr>
 <td>&nbsp;</td>
 <td><input type=submit value="Change Account data" class=sbmt></td>
</tr>
	</table>
   </div>
  </td>
 </tr>
</table>
</form>


</td>

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php }} ?>
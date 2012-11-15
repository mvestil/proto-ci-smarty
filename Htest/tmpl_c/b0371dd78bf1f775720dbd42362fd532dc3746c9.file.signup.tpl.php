<?php /* Smarty version Smarty-3.1.11, created on 2012-11-14 10:50:42
         compiled from ".\tmpl\signup.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1532150a37782dbf2c2-30826673%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b0371dd78bf1f775720dbd42362fd532dc3746c9' => 
    array (
      0 => '.\\tmpl\\signup.tpl',
      1 => 1351740521,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1532150a37782dbf2c2-30826673',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'settings' => 0,
    'deny_registration' => 0,
    'referer' => 0,
    'errors' => 0,
    'frm' => 0,
    'countries' => 0,
    'pay_accounts' => 0,
    'userinfo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_50a37783665852_32881567',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50a37783665852_32881567')) {function content_50a37783665852_32881567($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<td align="left" valign="top" class="pad_10" bgcolor="#EFF3F8">
<h3>Registration at <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value['site_name'], ENT_QUOTES, 'UTF-8', true);?>
:</h3><br>

<?php if ($_smarty_tpl->tpl_vars['deny_registration']->value){?>
 We are closed for new registrations now.
<?php }elseif($_smarty_tpl->tpl_vars['settings']->value['use_referal_program']&&$_smarty_tpl->tpl_vars['settings']->value['force_upline']&&!$_smarty_tpl->tpl_vars['referer']->value&&!$_smarty_tpl->tpl_vars['settings']->value['get_rand_ref']){?>
 You  do not have a upline. Our system require a upline for each user.
<?php }else{ ?>
 

 <script language=javascript>
 function checkform() {
  if (document.regform.fullname.value == '') {
    alert("Please enter your full name!");
    document.regform.fullname.focus();
    return false;
  }
 
 <?php if ($_smarty_tpl->tpl_vars['settings']->value['use_user_location']){?>
 
  if (document.regform.address.value == '') {
    alert("Please enter your address!");
    document.regform.address.focus();
    return false;
  }
  if (document.regform.city.value == '') {
    alert("Please enter your city!");
    document.regform.city.focus();
    return false;
  }
  if (document.regform.state.value == '') {
    alert("Please enter your state!");
    document.regform.state.focus();
    return false;
  }
  if (document.regform.zip.value == '') {
    alert("Please enter your ZIP!");
    document.regform.zip.focus();
    return false;
  }
  if (document.regform.country.options[document.regform.country.selectedIndex].text == '--SELECT--') {
    alert("Please choose your country!");
    document.regform.country.focus();
    return false;
  }
 
 <?php }?>
 
  if (document.regform.username.value == '') {
    alert("Please enter your username!");
    document.regform.username.focus();
    return false;
  }
  if (document.regform.password.value == '') {
    alert("Please enter your password!");
    document.regform.password.focus();
    return false;
  }
  if (document.regform.password.value != document.regform.password2.value) {
    alert("Please check your password!");
    document.regform.password2.focus();
    return false;
  }
 
 <?php if ($_smarty_tpl->tpl_vars['settings']->value['use_transaction_code']){?>
 
  if (document.regform.transaction_code.value == '') {
    alert("Please enter your transaction code!");
    document.regform.transaction_code.focus();
    return false;
  }
  if (document.regform.transaction_code.value != document.regform.transaction_code2.value) {
    alert("Please check your transaction code!");
    document.regform.transaction_code2.focus();
    return false;
  }
 
 <?php }?>
 
  if (document.regform.email.value == '') {
    alert("Please enter your e-mail address!");
    document.regform.email.focus();
    return false;
  }
  if (document.regform.email.value != document.regform.email1.value) {
    alert("Please retupe your e-mail!");
    document.regform.email.focus();
    return false;
  }
  if (document.regform.agree.checked == false) {
    alert("You have to agree with the Terms and Conditions!");
    return false;
  }
  return true;
 }

 function IsNumeric(sText) {
  var ValidChars = "0123456789";
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
 </script>
 
 
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
    <li>Please enter your full name!
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
   <?php if ($_smarty_tpl->tpl_vars['errors']->value[$_smarty_tpl->getVariable('smarty')->value['section']['e']['index']]=='username_exists'){?>
    <li>Sorry, such user already exists! Please try another username. 
   <?php }?>
   <?php if ($_smarty_tpl->tpl_vars['errors']->value[$_smarty_tpl->getVariable('smarty')->value['section']['e']['index']]=='email_exists'){?>
    <li>Sorry, such email already exists! Please try another email. 
   <?php }?> 
   <?php if ($_smarty_tpl->tpl_vars['errors']->value[$_smarty_tpl->getVariable('smarty')->value['section']['e']['index']]=='password'){?> 
    <li>Please enter a password!
   <?php }?>
   <?php if ($_smarty_tpl->tpl_vars['errors']->value[$_smarty_tpl->getVariable('smarty')->value['section']['e']['index']]=='password_confirm'){?>
    <li>Please check your password!
   <?php }?>
   <?php if ($_smarty_tpl->tpl_vars['errors']->value[$_smarty_tpl->getVariable('smarty')->value['section']['e']['index']]=='password_too_small'){?>
    <li>The password you provided is too small, please enter at least <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value['min_user_password_length'], ENT_QUOTES, 'UTF-8', true);?>
 characters!
   <?php }?> 
   <?php if ($_smarty_tpl->tpl_vars['errors']->value[$_smarty_tpl->getVariable('smarty')->value['section']['e']['index']]=='transaction_code'){?> 
    <li>Please enter the Transaction Code!
   <?php }?> 
   <?php if ($_smarty_tpl->tpl_vars['errors']->value[$_smarty_tpl->getVariable('smarty')->value['section']['e']['index']]=='transaction_code_confirm'){?> 
    <li>Please check your Transaction Code!
   <?php }?>
   <?php if ($_smarty_tpl->tpl_vars['errors']->value[$_smarty_tpl->getVariable('smarty')->value['section']['e']['index']]=='transaction_code_too_small'){?>
    <li>The Transaction Code you provided is too small, please enter at least <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value['min_user_password_length'], ENT_QUOTES, 'UTF-8', true);?>
 characters!
   <?php }?>
   <?php if ($_smarty_tpl->tpl_vars['errors']->value[$_smarty_tpl->getVariable('smarty')->value['section']['e']['index']]=='transaction_code_vs_password'){?> 
    <li>The Transaction Code should differ from the Password!
   <?php }?>
   <?php if ($_smarty_tpl->tpl_vars['errors']->value[$_smarty_tpl->getVariable('smarty')->value['section']['e']['index']]=='egold'){?> 
    <li>Please enter your e-gold account number!
   <?php }?>
   <?php if ($_smarty_tpl->tpl_vars['errors']->value[$_smarty_tpl->getVariable('smarty')->value['section']['e']['index']]=='email'){?> 
    <li>Please enter your e-mail!
   <?php }?>
   <?php if ($_smarty_tpl->tpl_vars['errors']->value[$_smarty_tpl->getVariable('smarty')->value['section']['e']['index']]=='agree'){?>
    <li>You have to agree with the Terms and Conditions!
   <?php }?>
   <?php if ($_smarty_tpl->tpl_vars['errors']->value[$_smarty_tpl->getVariable('smarty')->value['section']['e']['index']]=='turing_image'){?>
    <li>Enter the verification code as it is shown in the corresponding box.
   <?php }?> 
   <?php if ($_smarty_tpl->tpl_vars['errors']->value[$_smarty_tpl->getVariable('smarty')->value['section']['e']['index']]=='no_upline'){?>
    <li>The system requires an upline to register. <?php if ($_smarty_tpl->tpl_vars['settings']->value['get_rand_ref']){?>You have to be agreed to random one or found a referral link in the net.<?php }?>
   <?php }?> 
   <?php if ($_smarty_tpl->tpl_vars['errors']->value[$_smarty_tpl->getVariable('smarty')->value['section']['e']['index']]=='ip_exists_in_database'){?>
    <li>Your IP already exists in our database. Sorry, but registration impossible.
   <?php }?>

   <br> 
  <?php endfor; endif; ?>
  </ul>
 <?php }?> 
<form method=post onsubmit="return checkform()" name="regform">
<input type=hidden name=a value="signup">
<input type=hidden name=action value="signup">
<table cellspacing=0 cellpadding=2 border=0>
<tr>
 <td>Your Full Name:</td>
 <td><input type=text name=fullname value="<?php echo htmlspecialchars(preg_replace("%(?<!\\\\)'%", "\'",$_smarty_tpl->tpl_vars['frm']->value['fullname']), ENT_QUOTES, 'UTF-8', true);?>
" class=inpts size=30></td>
</tr>
<?php if ($_smarty_tpl->tpl_vars['settings']->value['use_user_location']){?>
<tr>
 <td>Your Address:</td>
 <td><input type=text name=address value="<?php echo htmlspecialchars(preg_replace("%(?<!\\\\)'%", "\'",$_smarty_tpl->tpl_vars['frm']->value['address']), ENT_QUOTES, 'UTF-8', true);?>
" class=inpts size=30></td>
</tr>
<tr>
 <td>Your City:</td>
 <td><input type=text name=city value="<?php echo htmlspecialchars(preg_replace("%(?<!\\\\)'%", "\'",$_smarty_tpl->tpl_vars['frm']->value['city']), ENT_QUOTES, 'UTF-8', true);?>
" class=inpts size=30></td>
</tr>
<tr>
 <td>Your State:</td>
 <td><input type=text name=state value="<?php echo htmlspecialchars(preg_replace("%(?<!\\\\)'%", "\'",$_smarty_tpl->tpl_vars['frm']->value['state']), ENT_QUOTES, 'UTF-8', true);?>
" class=inpts size=30></td>
</tr>
<tr>
 <td>Your Zip:</td>
 <td><input type=text name=zip value="<?php echo htmlspecialchars(preg_replace("%(?<!\\\\)'%", "\'",$_smarty_tpl->tpl_vars['frm']->value['zip']), ENT_QUOTES, 'UTF-8', true);?>
" class=inpts size=30></td>
</tr>
<tr>
 <td>Your Country:</td>
 <td>
  <select name='country' class=inpts>
<option value=''>--SELECT--</option>
<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['c'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['c']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['c']['name'] = 'c';
$_smarty_tpl->tpl_vars['smarty']->value['section']['c']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['countries']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['c']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['c']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['c']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['c']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['c']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['c']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['c']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['c']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['c']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['c']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['c']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['c']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['c']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['c']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['c']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['c']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['c']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['c']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['c']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['c']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['c']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['c']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['c']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['c']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['c']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['c']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['c']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['c']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['c']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['c']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['c']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['c']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['c']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['c']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['c']['total']);
?>
<option <?php if ($_smarty_tpl->tpl_vars['countries']->value[$_smarty_tpl->getVariable('smarty')->value['section']['c']['index']]['name']==$_smarty_tpl->tpl_vars['frm']->value['country']){?>selected<?php }?>><?php echo htmlspecialchars(preg_replace("%(?<!\\\\)'%", "\'",$_smarty_tpl->tpl_vars['countries']->value[$_smarty_tpl->getVariable('smarty')->value['section']['c']['index']]['name']), ENT_QUOTES, 'UTF-8', true);?>
</option>
<?php endfor; endif; ?>
  </td>
</tr>
<?php }?>
<tr>
 <td>Your Username:</td>
 <td><input type=text name=username value="<?php echo htmlspecialchars(preg_replace("%(?<!\\\\)'%", "\'",$_smarty_tpl->tpl_vars['frm']->value['username']), ENT_QUOTES, 'UTF-8', true);?>
" class=inpts size=30></td>
</tr>
<tr>
 <td>Define Password:</td>
 <td><input type=password name=password value="<?php echo htmlspecialchars(preg_replace("%(?<!\\\\)'%", "\'",$_smarty_tpl->tpl_vars['frm']->value['password']), ENT_QUOTES, 'UTF-8', true);?>
" class=inpts size=30></td>
</tr><tr>
 <td>Retype Password:</td>
 <td><input type=password name=password2 value="<?php echo htmlspecialchars(preg_replace("%(?<!\\\\)'%", "\'",$_smarty_tpl->tpl_vars['frm']->value['password2']), ENT_QUOTES, 'UTF-8', true);?>
" class=inpts size=30></td>
</tr>
<?php if ($_smarty_tpl->tpl_vars['settings']->value['use_transaction_code']){?>
<tr>
 <td>Difine Transaction Code:</td>
 <td><input type=password name=transaction_code value="<?php echo htmlspecialchars(preg_replace("%(?<!\\\\)'%", "\'",$_smarty_tpl->tpl_vars['frm']->value['transaction_code']), ENT_QUOTES, 'UTF-8', true);?>
" class=inpts size=30></td>
</tr><tr>
 <td>Retype Transaction Code:</td>
 <td><input type=password name=transaction_code2 value="<?php echo htmlspecialchars(preg_replace("%(?<!\\\\)'%", "\'",$_smarty_tpl->tpl_vars['frm']->value['transaction_code2']), ENT_QUOTES, 'UTF-8', true);?>
" class=inpts size=30></td>
</tr>
<?php }?>
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
<tr>
 <td>Your <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['pay_accounts']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ps']['index']]['name'], ENT_QUOTES, 'UTF-8', true);?>
 Account:</td>
 <td><input type=text class=inpts size=30 name=pay_account[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['pay_accounts']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ps']['index']]['id'], ENT_QUOTES, 'UTF-8', true);?>
] value="<?php echo htmlspecialchars(htmlspecialchars($_smarty_tpl->tpl_vars['pay_accounts']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ps']['index']]['account'], ENT_QUOTES, 'UTF-8', true), ENT_QUOTES, 'UTF-8', true);?>
"></td>
</tr>
<?php endfor; endif; ?>

<tr>
 <td>Your E-mail Address:</td>
 <td><input type=text name=email value="<?php echo htmlspecialchars(preg_replace("%(?<!\\\\)'%", "\'",$_smarty_tpl->tpl_vars['frm']->value['email']), ENT_QUOTES, 'UTF-8', true);?>
" class=inpts size=30></td>
</tr>
<tr>
 <td>Retype Your E-mail:</td>
 <td><input type=text name=email1 value="<?php echo htmlspecialchars(preg_replace("%(?<!\\\\)'%", "\'",$_smarty_tpl->tpl_vars['frm']->value['email1']), ENT_QUOTES, 'UTF-8', true);?>
" class=inpts size=30></td>
</tr>
<tr>
 <td>Secret question:</td>
 <td><input type=text name=sq value="<?php echo htmlspecialchars(preg_replace("%(?<!\\\\)'%", "\'",$_smarty_tpl->tpl_vars['frm']->value['sq']), ENT_QUOTES, 'UTF-8', true);?>
" class=inpts size=30></td>
</tr>
<tr>
 <td>Secret answer:</td>
 <td><input type=text name=sa value="<?php echo htmlspecialchars(preg_replace("%(?<!\\\\)'%", "\'",$_smarty_tpl->tpl_vars['frm']->value['sa']), ENT_QUOTES, 'UTF-8', true);?>
" class=inpts size=30></td>
</tr>

<?php if ($_smarty_tpl->tpl_vars['settings']->value['use_referal_program']){?>
<?php if ($_smarty_tpl->tpl_vars['referer']->value){?>
<tr>
 <td>Your Upline:</td>
 <td><a href="mailto:<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['referer']->value['email'], ENT_QUOTES, 'UTF-8', true);?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['referer']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</a> (<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['referer']->value['username'], ENT_QUOTES, 'UTF-8', true);?>
)</td>
</tr>
<?php }else{ ?>
<?php if ($_smarty_tpl->tpl_vars['settings']->value['force_upline']){?>
 <?php if ($_smarty_tpl->tpl_vars['settings']->value['get_rand_ref']){?>
  <tr>
   <td colspan=2>
    You do not have an upline. Our system requires an upline for each user. You'll have to agree to get a random one or find a referral link on the net.
    <input type=checkbox name="rand_ref" value=1>
   </td>
  </tr>
 <?php }else{ ?>
  <tr>
   <td colspan=2>
    You do not have an upline. Our system requires an upline for each user.
   </td>
  </tr>
 <?php }?>
<?php }?>
<?php }?>
<?php }?>


<tr>
 <td colspan=2><input type=checkbox name=agree value=1 <?php if ($_smarty_tpl->tpl_vars['frm']->value['agree']){?>checked<?php }?> > I agree with <a href=?a=rules>Terms and conditions</a></td>
</tr>
<?php if ($_smarty_tpl->tpl_vars['userinfo']->value['validation_enabled']==1){?>
<tr>
 <td class=menutxt align=right><img src="?a=show_validation_image&<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['userinfo']->value['session_name'], ENT_QUOTES, 'UTF-8', true);?>
=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['userinfo']->value['session_id'], ENT_QUOTES, 'UTF-8', true);?>
&rand=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['userinfo']->value['rand'], ENT_QUOTES, 'UTF-8', true);?>
"></td>
 <td><input type=text name=validation_number class=inpts size=15></td>
</tr>
<?php }?>
<tr>
 <td>&nbsp;</td>
 <td><input type=submit value="Register" class=sbmt></td>
</tr></table>
</form>
<?php }?>
</td>
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>
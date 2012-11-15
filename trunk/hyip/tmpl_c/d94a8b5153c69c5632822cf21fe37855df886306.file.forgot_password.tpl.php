<?php /* Smarty version Smarty-3.1.11, created on 2012-08-20 05:22:23
         compiled from ".\tmpl\forgot_password.tpl" */ ?>
<?php /*%%SmartyHeaderCode:300225031c98fc89480-86930911%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd94a8b5153c69c5632822cf21fe37855df886306' => 
    array (
      0 => '.\\tmpl\\forgot_password.tpl',
      1 => 1126031942,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '300225031c98fc89480-86930911',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'found_records' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_5031c98fd2eab4_11251659',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5031c98fd2eab4_11251659')) {function content_5031c98fd2eab4_11251659($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>



<script language=javascript>
function checkform() {
  if (document.forgotform.email.value == '') {
    alert("Please type your username or email!");
    document.forgotform.email.focus();
    return false;
  }
  return true;
}
</script>

<h3>Forgot your password:</h3><br>

<?php if ($_smarty_tpl->tpl_vars['found_records']->value==2){?>
Your accound found. Please check your e-mail address and follow confirm URL to reset your password.
<?php }else{ ?>
<form method=post name=forgotform onsubmit="return checkform();">
<input type=hidden name=a value="forgot_password">
<input type=hidden name=action value="forgot_password">
<table cellspacing=0 cellpadding=2 border=0>
<tr>
 <td>Type your username or e-mail:</td>
 <td><input type=text name='email' value="" class=inpts size=30></td>
</tr>
<tr>
 <td>&nbsp;</td>
 <td><input type=submit value="Forgot" class=sbmt></td>
</tr>
</table>
</form><br><br>

<?php if ($_smarty_tpl->tpl_vars['found_records']->value==0){?>
No accounts found
<?php }elseif($_smarty_tpl->tpl_vars['found_records']->value==1){?>
Login and password send to you. Please check your e-mail account
<?php }?>
<?php }?>

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>
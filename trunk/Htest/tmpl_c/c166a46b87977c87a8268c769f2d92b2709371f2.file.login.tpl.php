<?php /* Smarty version Smarty-3.1.11, created on 2012-11-01 03:36:32
         compiled from ".\tmpl\login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:125455091ee40f3b5e0-20640564%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c166a46b87977c87a8268c769f2d92b2709371f2' => 
    array (
      0 => '.\\tmpl\\login.tpl',
      1 => 1258733248,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '125455091ee40f3b5e0-20640564',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'frm' => 0,
    'userinfo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_5091ee410fde19_98181803',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5091ee410fde19_98181803')) {function content_5091ee410fde19_98181803($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>



<script language=javascript>
function checkform() {
  if (document.mainform.username.value=='') {
    alert("Please type your username!");
    document.mainform.username.focus();
    return false;
  }
  if (document.mainform.password.value=='') {
    alert("Please type your password!");
    document.mainform.password.focus();
    return false;
  }
  return true;
}
</script>


<?php if ($_smarty_tpl->tpl_vars['frm']->value['say']=='invalid_login'){?>
<h3>Login error:</h3><br><br>

Your login or password or turing image code is wrong. Please check this information.
<?php }?>
<h3>Login:</h3>
<br>
<form method=post name=mainform onsubmit="return checkform()">
<input type=hidden name=a value='do_login'>
<input type=hidden name=follow value='<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['frm']->value['follow'], ENT_QUOTES, 'UTF-8', true);?>
'>
<input type=hidden name=follow_id value='<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['frm']->value['follow_id'], ENT_QUOTES, 'UTF-8', true);?>
'>
<table cellspacing=0 cellpadding=2 border=0>
<tr>
 <td>Username:</td>
 <td><input type=text name=username value='<?php echo htmlspecialchars(htmlspecialchars($_smarty_tpl->tpl_vars['frm']->value['username'], ENT_QUOTES, 'UTF-8', true), ENT_QUOTES, 'UTF-8', true);?>
' class=inpts size=30></td>
</tr><tr>
 <td>Password:</td>
 <td><input type=password name=password value='' class=inpts size=30></td>
</tr>
<?php if ($_smarty_tpl->tpl_vars['userinfo']->value['validation_enabled']==1){?>
<tr>
 <td class=menutxt><img src="?a=show_validation_image&<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['userinfo']->value['session_name'], ENT_QUOTES, 'UTF-8', true);?>
=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['userinfo']->value['session_id'], ENT_QUOTES, 'UTF-8', true);?>
&rand=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['userinfo']->value['rand'], ENT_QUOTES, 'UTF-8', true);?>
"></td>
 <td><input type=text name=validation_number class=inpts size=30></td>
</tr>
<?php }?>
<tr>
 <td>&nbsp;</td>
 <td><input type=submit value="Login" class=sbmt></td>
</tr></table>
</form>
<br><br>
or <a href=?a=forgot_password >remember your login information</a>.

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>
<?php /* Smarty version Smarty-3.1.11, created on 2012-11-15 09:19:25
         compiled from ".\tmpl\referal.links.tpl" */ ?>
<?php /*%%SmartyHeaderCode:885250a4b39d685126-78284601%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3ff7cc0c5285d24152ff9f168fe240859f0feedf' => 
    array (
      0 => '.\\tmpl\\referal.links.tpl',
      1 => 1351743312,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '885250a4b39d685126-78284601',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'settings' => 0,
    'user' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_50a4b39d848c45_35403346',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50a4b39d848c45_35403346')) {function content_50a4b39d848c45_35403346($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<td align="left" valign="top" class="pad_10" bgcolor="#EFF3F8">


<h3>Referral Links.</h3><br><br>

<a href=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value['site_url'], ENT_QUOTES, 'UTF-8', true);?>
/?ref=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user']->value['username'], ENT_QUOTES, 'UTF-8', true);?>
>
The best internet investment<br>
Earn a XXX% daily profit!
</a>

<br><br>
<textarea class=inpts cols=60 rows=4>
<a href=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value['site_url'], ENT_QUOTES, 'UTF-8', true);?>
/?ref=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user']->value['username'], ENT_QUOTES, 'UTF-8', true);?>
>
The best internet investment<br>
Earn a XXX% daily profit!
</a>
</textarea><br><br><br>


<a href=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value['site_url'], ENT_QUOTES, 'UTF-8', true);?>
/?ref=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user']->value['username'], ENT_QUOTES, 'UTF-8', true);?>
>
<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value['site_name'], ENT_QUOTES, 'UTF-8', true);?>
.<br>
Easy. Safe. No risk.
</a>

<br><br>
<textarea class=inpts cols=60 rows=4>
<a href=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value['site_url'], ENT_QUOTES, 'UTF-8', true);?>
/?ref=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user']->value['username'], ENT_QUOTES, 'UTF-8', true);?>
>
<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value['site_name'], ENT_QUOTES, 'UTF-8', true);?>
.<br>
Easy. Safe. No risk.
</a>
</textarea><br><br><br>


<a href=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value['site_url'], ENT_QUOTES, 'UTF-8', true);?>
/?ref=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user']->value['username'], ENT_QUOTES, 'UTF-8', true);?>
>
XX% daily for X weeks - total XX% guaranteed
</a>
<br><br>
<textarea class=inpts cols=60 rows=4>
<a href=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value['site_url'], ENT_QUOTES, 'UTF-8', true);?>
/?ref=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user']->value['username'], ENT_QUOTES, 'UTF-8', true);?>
>
XX% daily for X weeks - total XX% guaranteed
</a>
</textarea><br><br><br>

</td>

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>
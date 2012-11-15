<?php /* Smarty version Smarty-3.1.11, created on 2012-11-14 12:55:06
         compiled from ".\tmpl\deposit_history.tpl" */ ?>
<?php /*%%SmartyHeaderCode:243650a394aa20a775-98184737%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'df4a1e17fffcea8b62ac83c271bc8d25b897da47' => 
    array (
      0 => '.\\tmpl\\deposit_history.tpl',
      1 => 1351742847,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '243650a394aa20a775-98184737',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'month' => 0,
    'frm' => 0,
    'day' => 0,
    'year' => 0,
    'settings' => 0,
    'qtrans' => 0,
    'trans' => 0,
    'currency_sign' => 0,
    'periodcredit' => 0,
    'perioddebit' => 0,
    'periodbalance' => 0,
    'allcredit' => 0,
    'alldebit' => 0,
    'allbalance' => 0,
    'periodsum' => 0,
    'allsum' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_50a394aa9c5d99_31499262',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50a394aa9c5d99_31499262')) {function content_50a394aa9c5d99_31499262($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<td align="left" valign="top" class="pad_10" bgcolor="#EFF3F8">


<form method=post>
<input type=hidden name=a value=deposit_history>
<table cellspacing=0 cellpadding=0 border=0 width=100%<?php ?>>
<tr>
 <td>
	<h3>Deposit history:</h3>
 </td>
 <td align=right>
From: <select name=month_from class=inpts>
<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['month_from'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['month_from']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['month_from']['name'] = 'month_from';
$_smarty_tpl->tpl_vars['smarty']->value['section']['month_from']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['month']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['month_from']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['month_from']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['month_from']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['month_from']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['month_from']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['month_from']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['month_from']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['month_from']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['month_from']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['month_from']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['month_from']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['month_from']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['month_from']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['month_from']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['month_from']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['month_from']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['month_from']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['month_from']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['month_from']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['month_from']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['month_from']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['month_from']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['month_from']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['month_from']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['month_from']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['month_from']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['month_from']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['month_from']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['month_from']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['month_from']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['month_from']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['month_from']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['month_from']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['month_from']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['month_from']['total']);
?>
<option value=<?php echo htmlspecialchars($_smarty_tpl->getVariable('smarty')->value['section']['month_from']['index']+1, ENT_QUOTES, 'UTF-8', true);?>
 <?php if ($_smarty_tpl->getVariable('smarty')->value['section']['month_from']['index']+1==$_smarty_tpl->tpl_vars['frm']->value['month_from']){?>selected<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['month']->value[$_smarty_tpl->getVariable('smarty')->value['section']['month_from']['index']], ENT_QUOTES, 'UTF-8', true);?>

<?php endfor; endif; ?>
</select> &nbsp;
<select name=day_from class=inpts>
<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['day_from'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['day_from']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['day_from']['name'] = 'day_from';
$_smarty_tpl->tpl_vars['smarty']->value['section']['day_from']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['day']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['day_from']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['day_from']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['day_from']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['day_from']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['day_from']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['day_from']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['day_from']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['day_from']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['day_from']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['day_from']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['day_from']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['day_from']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['day_from']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['day_from']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['day_from']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['day_from']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['day_from']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['day_from']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['day_from']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['day_from']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['day_from']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['day_from']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['day_from']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['day_from']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['day_from']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['day_from']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['day_from']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['day_from']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['day_from']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['day_from']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['day_from']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['day_from']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['day_from']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['day_from']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['day_from']['total']);
?>
<option value=<?php echo htmlspecialchars($_smarty_tpl->getVariable('smarty')->value['section']['day_from']['index']+1, ENT_QUOTES, 'UTF-8', true);?>
 <?php if ($_smarty_tpl->getVariable('smarty')->value['section']['day_from']['index']+1==$_smarty_tpl->tpl_vars['frm']->value['day_from']){?>selected<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['day']->value[$_smarty_tpl->getVariable('smarty')->value['section']['day_from']['index']], ENT_QUOTES, 'UTF-8', true);?>

<?php endfor; endif; ?>
</select> &nbsp;

<select name=year_from class=inpts>
<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['year_from'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['year_from']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['year_from']['name'] = 'year_from';
$_smarty_tpl->tpl_vars['smarty']->value['section']['year_from']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['year']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['year_from']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['year_from']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['year_from']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['year_from']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['year_from']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['year_from']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['year_from']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['year_from']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['year_from']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['year_from']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['year_from']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['year_from']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['year_from']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['year_from']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['year_from']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['year_from']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['year_from']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['year_from']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['year_from']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['year_from']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['year_from']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['year_from']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['year_from']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['year_from']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['year_from']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['year_from']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['year_from']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['year_from']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['year_from']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['year_from']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['year_from']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['year_from']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['year_from']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['year_from']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['year_from']['total']);
?>
<option value=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['year']->value[$_smarty_tpl->getVariable('smarty')->value['section']['year_from']['index']], ENT_QUOTES, 'UTF-8', true);?>
 <?php if ($_smarty_tpl->tpl_vars['year']->value[$_smarty_tpl->getVariable('smarty')->value['section']['year_from']['index']]==$_smarty_tpl->tpl_vars['frm']->value['year_from']){?>selected<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['year']->value[$_smarty_tpl->getVariable('smarty')->value['section']['year_from']['index']], ENT_QUOTES, 'UTF-8', true);?>

<?php endfor; endif; ?>
</select><br><img src=images/q.gif width=1 height=4><br>

To: <select name=month_to class=inpts>
<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['month_to'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['month_to']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['month_to']['name'] = 'month_to';
$_smarty_tpl->tpl_vars['smarty']->value['section']['month_to']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['month']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['month_to']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['month_to']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['month_to']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['month_to']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['month_to']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['month_to']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['month_to']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['month_to']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['month_to']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['month_to']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['month_to']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['month_to']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['month_to']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['month_to']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['month_to']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['month_to']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['month_to']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['month_to']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['month_to']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['month_to']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['month_to']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['month_to']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['month_to']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['month_to']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['month_to']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['month_to']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['month_to']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['month_to']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['month_to']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['month_to']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['month_to']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['month_to']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['month_to']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['month_to']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['month_to']['total']);
?>
<option value=<?php echo htmlspecialchars($_smarty_tpl->getVariable('smarty')->value['section']['month_to']['index']+1, ENT_QUOTES, 'UTF-8', true);?>
 <?php if ($_smarty_tpl->getVariable('smarty')->value['section']['month_to']['index']+1==$_smarty_tpl->tpl_vars['frm']->value['month_to']){?>selected<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['month']->value[$_smarty_tpl->getVariable('smarty')->value['section']['month_to']['index']], ENT_QUOTES, 'UTF-8', true);?>

<?php endfor; endif; ?>
</select> &nbsp;
<select name=day_to class=inpts>
<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['day_to'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['day_to']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['day_to']['name'] = 'day_to';
$_smarty_tpl->tpl_vars['smarty']->value['section']['day_to']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['day']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['day_to']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['day_to']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['day_to']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['day_to']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['day_to']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['day_to']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['day_to']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['day_to']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['day_to']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['day_to']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['day_to']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['day_to']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['day_to']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['day_to']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['day_to']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['day_to']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['day_to']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['day_to']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['day_to']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['day_to']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['day_to']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['day_to']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['day_to']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['day_to']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['day_to']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['day_to']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['day_to']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['day_to']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['day_to']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['day_to']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['day_to']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['day_to']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['day_to']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['day_to']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['day_to']['total']);
?>
<option value=<?php echo htmlspecialchars($_smarty_tpl->getVariable('smarty')->value['section']['day_to']['index']+1, ENT_QUOTES, 'UTF-8', true);?>
 <?php if ($_smarty_tpl->getVariable('smarty')->value['section']['day_to']['index']+1==$_smarty_tpl->tpl_vars['frm']->value['day_to']){?>selected<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['day']->value[$_smarty_tpl->getVariable('smarty')->value['section']['day_to']['index']], ENT_QUOTES, 'UTF-8', true);?>

<?php endfor; endif; ?>
</select> &nbsp;

<select name=year_to class=inpts>
<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['year_to'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['year_to']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['year_to']['name'] = 'year_to';
$_smarty_tpl->tpl_vars['smarty']->value['section']['year_to']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['year']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['year_to']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['year_to']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['year_to']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['year_to']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['year_to']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['year_to']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['year_to']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['year_to']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['year_to']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['year_to']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['year_to']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['year_to']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['year_to']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['year_to']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['year_to']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['year_to']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['year_to']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['year_to']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['year_to']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['year_to']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['year_to']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['year_to']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['year_to']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['year_to']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['year_to']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['year_to']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['year_to']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['year_to']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['year_to']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['year_to']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['year_to']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['year_to']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['year_to']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['year_to']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['year_to']['total']);
?>
<option value=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['year']->value[$_smarty_tpl->getVariable('smarty')->value['section']['year_to']['index']], ENT_QUOTES, 'UTF-8', true);?>
 <?php if ($_smarty_tpl->tpl_vars['year']->value[$_smarty_tpl->getVariable('smarty')->value['section']['year_to']['index']]==$_smarty_tpl->tpl_vars['frm']->value['year_to']){?>selected<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['year']->value[$_smarty_tpl->getVariable('smarty')->value['section']['year_to']['index']], ENT_QUOTES, 'UTF-8', true);?>

<?php endfor; endif; ?>
</select>

 </td>
 <td>
	&nbsp; <input type=submit value="Go" class=sbmt>
 </td>
</tr></table>
</form>
<br><br>

<?php if ($_smarty_tpl->tpl_vars['settings']->value['use_history_balance_mode']){?>
<table cellspacing=1 cellpadding=2 border=0 width=100%<?php ?>>
<tr>
 <td class=inheader>Date</td>
 <td class=inheader>Type</td>
 <td class=inheader>Credit</td>
 <td class=inheader>Debit</td>
 <td class=inheader>Balance</td>
 <td class=inheader>P.S.</td>
</tr>
<?php if ($_smarty_tpl->tpl_vars['qtrans']->value>0){?>
<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['trans'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['trans']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['trans']['name'] = 'trans';
$_smarty_tpl->tpl_vars['smarty']->value['section']['trans']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['trans']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['trans']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['trans']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['trans']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['trans']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['trans']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['trans']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['trans']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['trans']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['trans']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['trans']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['trans']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['trans']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['trans']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['trans']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['trans']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['trans']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['trans']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['trans']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['trans']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['trans']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['trans']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['trans']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['trans']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['trans']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['trans']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['trans']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['trans']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['trans']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['trans']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['trans']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['trans']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['trans']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['trans']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['trans']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['trans']['total']);
?>
<tr>
 <td align=center nowrap><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['trans']->value[$_smarty_tpl->getVariable('smarty')->value['section']['trans']['index']]['d'], ENT_QUOTES, 'UTF-8', true);?>
</td>
 <td><b><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['trans']->value[$_smarty_tpl->getVariable('smarty')->value['section']['trans']['index']]['transtype'], ENT_QUOTES, 'UTF-8', true);?>
</b><br><small class=gray><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['trans']->value[$_smarty_tpl->getVariable('smarty')->value['section']['trans']['index']]['description'], ENT_QUOTES, 'UTF-8', true);?>
</small></td>
 <td align=right><b>
  <?php if ($_smarty_tpl->tpl_vars['trans']->value[$_smarty_tpl->getVariable('smarty')->value['section']['trans']['index']]['debitcredit']==0){?>
  <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency_sign']->value, ENT_QUOTES, 'UTF-8', true);?>
<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['trans']->value[$_smarty_tpl->getVariable('smarty')->value['section']['trans']['index']]['actual_amount'], ENT_QUOTES, 'UTF-8', true);?>

  </b>
  <?php }else{ ?>
  &nbsp;
  <?php }?>
 </td>
 <td align=right><b>
  <?php if ($_smarty_tpl->tpl_vars['trans']->value[$_smarty_tpl->getVariable('smarty')->value['section']['trans']['index']]['debitcredit']==1){?>
  <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency_sign']->value, ENT_QUOTES, 'UTF-8', true);?>
<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['trans']->value[$_smarty_tpl->getVariable('smarty')->value['section']['trans']['index']]['actual_amount'], ENT_QUOTES, 'UTF-8', true);?>

  </b> 
  <?php }else{ ?>
  &nbsp;
  <?php }?>
 </td>
 <td align=right><b>
  <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency_sign']->value, ENT_QUOTES, 'UTF-8', true);?>
<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['trans']->value[$_smarty_tpl->getVariable('smarty')->value['section']['trans']['index']]['balance'], ENT_QUOTES, 'UTF-8', true);?>

 </td>
 <td><img src="images/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['trans']->value[$_smarty_tpl->getVariable('smarty')->value['section']['trans']['index']]['ec'], ENT_QUOTES, 'UTF-8', true);?>
.gif" align=absmiddle hspace=1 height=17></td>
</tr>
<?php endfor; endif; ?>
<?php }else{ ?>
<tr>
 <td colspan=6 align=center>No transactions found</td>
</tr>
<?php }?>
<tr><td colspan=3>&nbsp;</td>

<?php if ($_smarty_tpl->tpl_vars['qtrans']->value>0){?>
<tr>
 <td colspan=2>Total for this period:</td>
 <td align=right nowrap><b><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency_sign']->value, ENT_QUOTES, 'UTF-8', true);?>
<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['periodcredit']->value, ENT_QUOTES, 'UTF-8', true);?>
</b></td>
 <td align=right nowrap><b><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency_sign']->value, ENT_QUOTES, 'UTF-8', true);?>
<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['perioddebit']->value, ENT_QUOTES, 'UTF-8', true);?>
</b></td>
 <td align=right nowrap><b><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency_sign']->value, ENT_QUOTES, 'UTF-8', true);?>
<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['periodbalance']->value, ENT_QUOTES, 'UTF-8', true);?>
</b></td>
</tr>
<?php }?>
<tr>
 <td colspan=2>Total:</td>
 <td align=right nowrap><b><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency_sign']->value, ENT_QUOTES, 'UTF-8', true);?>
<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['allcredit']->value, ENT_QUOTES, 'UTF-8', true);?>
</b></td>
 <td align=right nowrap><b><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency_sign']->value, ENT_QUOTES, 'UTF-8', true);?>
<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['alldebit']->value, ENT_QUOTES, 'UTF-8', true);?>
</b></td>
 <td align=right nowrap><b><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency_sign']->value, ENT_QUOTES, 'UTF-8', true);?>
<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['allbalance']->value, ENT_QUOTES, 'UTF-8', true);?>
</b></td>
</tr>
</table>
<?php }else{ ?>
<table cellspacing=1 cellpadding=2 border=0 width=100%<?php ?>>
<tr>
 <td class=inheader>Type</td>
 <td class=inheader width=200>Amount</td>
 <td class=inheader width=170>Date</td>
</tr>
<?php if ($_smarty_tpl->tpl_vars['qtrans']->value>0){?>
<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['trans'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['trans']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['trans']['name'] = 'trans';
$_smarty_tpl->tpl_vars['smarty']->value['section']['trans']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['trans']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['trans']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['trans']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['trans']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['trans']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['trans']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['trans']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['trans']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['trans']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['trans']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['trans']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['trans']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['trans']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['trans']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['trans']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['trans']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['trans']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['trans']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['trans']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['trans']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['trans']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['trans']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['trans']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['trans']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['trans']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['trans']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['trans']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['trans']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['trans']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['trans']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['trans']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['trans']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['trans']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['trans']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['trans']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['trans']['total']);
?>
<tr>
 <td><b><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['trans']->value[$_smarty_tpl->getVariable('smarty')->value['section']['trans']['index']]['transtype'], ENT_QUOTES, 'UTF-8', true);?>
</b></td>
 <td width=200 align=right><b><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency_sign']->value, ENT_QUOTES, 'UTF-8', true);?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['trans']->value[$_smarty_tpl->getVariable('smarty')->value['section']['trans']['index']]['actual_amount'], ENT_QUOTES, 'UTF-8', true);?>
</b> <img src="images/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['trans']->value[$_smarty_tpl->getVariable('smarty')->value['section']['trans']['index']]['ec'], ENT_QUOTES, 'UTF-8', true);?>
.gif" align=absmiddle hspace=1 height=17></td>
 <td width=170 align=center valign=bottom><b><small><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['trans']->value[$_smarty_tpl->getVariable('smarty')->value['section']['trans']['index']]['d'], ENT_QUOTES, 'UTF-8', true);?>
</small></b></td>
</tr>
<tr>
 <td colspan=3 class=gray><small><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['trans']->value[$_smarty_tpl->getVariable('smarty')->value['section']['trans']['index']]['description'], ENT_QUOTES, 'UTF-8', true);?>
</small></td>
</tr>
<?php endfor; endif; ?>
<?php }else{ ?>
<tr>
 <td colspan=3 align=center>No transactions found</td>
</tr>
<?php }?>
<tr><td colspan=3>&nbsp;</td>

<?php if ($_smarty_tpl->tpl_vars['qtrans']->value>0){?>
<tr>
 <td colspan=2>For this period:</td>
 <td align=right><b><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency_sign']->value, ENT_QUOTES, 'UTF-8', true);?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['periodsum']->value, ENT_QUOTES, 'UTF-8', true);?>
</b></td>
</tr>
<?php }?>
<tr>
    <td colspan=2>Total:</td>
 <td align=right><b><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency_sign']->value, ENT_QUOTES, 'UTF-8', true);?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['allsum']->value, ENT_QUOTES, 'UTF-8', true);?>
</b></td>
</tr>
</table>
<?php }?>

</td>
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>
<?php /* Smarty version Smarty-3.1.11, created on 2012-11-16 12:43:15
         compiled from ".\tmpl\deposit_list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:151550a634e3104354-92606908%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '42650a5632f21da58a3a0ba7f3fb16eaaadc92e0' => 
    array (
      0 => '.\\tmpl\\deposit_list.tpl',
      1 => 1351742800,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '151550a634e3104354-92606908',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'currency_sign' => 0,
    'total' => 0,
    'plans' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_50a634e35b2ba7_58090522',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50a634e35b2ba7_58090522')) {function content_50a634e35b2ba7_58090522($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<td align="left" valign="top" class="pad_10" bgcolor="#EFF3F8">

<h3>Your deposits:</h3><br>

<b>Total: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency_sign']->value, ENT_QUOTES, 'UTF-8', true);?>
<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['total']->value, ENT_QUOTES, 'UTF-8', true);?>
</b><br><br>

<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['plans'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['plans']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['plans']['name'] = 'plans';
$_smarty_tpl->tpl_vars['smarty']->value['section']['plans']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['plans']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['plans']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['plans']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['plans']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['plans']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['plans']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['plans']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['plans']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['plans']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['plans']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['plans']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['plans']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['plans']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['plans']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['plans']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['plans']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['plans']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['plans']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['plans']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['plans']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['plans']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['plans']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['plans']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['plans']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['plans']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['plans']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['plans']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['plans']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['plans']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['plans']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['plans']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['plans']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['plans']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['plans']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['plans']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['plans']['total']);
?>
<table cellspacing=1 cellpadding=2 border=0 width=100% class=line><tr><td class=item>
<table cellspacing=1 cellpadding=2 border=0 width=100%<?php ?>>
<tr>
 <td colspan=3 align=center><b><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['plans']->value[$_smarty_tpl->getVariable('smarty')->value['section']['plans']['index']]['name'], ENT_QUOTES, 'UTF-8', true);?>
</b></td>
</tr><tr>
 <td class=inheader>Plan</td>
 <td class=inheader width=200>Amount Spent (<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency_sign']->value, ENT_QUOTES, 'UTF-8', true);?>
)</td>
 <td class=inheader width=100 nowrap><nobr><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['plans']->value[$_smarty_tpl->getVariable('smarty')->value['section']['plans']['index']]['period'], ENT_QUOTES, 'UTF-8', true);?>
 Profit (%)</nobr></td>
</tr>
<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['plan_options'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['plan_options']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['plan_options']['name'] = 'plan_options';
$_smarty_tpl->tpl_vars['smarty']->value['section']['plan_options']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['plans']->value[$_smarty_tpl->getVariable('smarty')->value['section']['plans']['index']]['plans']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['plan_options']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['plan_options']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['plan_options']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['plan_options']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['plan_options']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['plan_options']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['plan_options']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['plan_options']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['plan_options']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['plan_options']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['plan_options']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['plan_options']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['plan_options']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['plan_options']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['plan_options']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['plan_options']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['plan_options']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['plan_options']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['plan_options']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['plan_options']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['plan_options']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['plan_options']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['plan_options']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['plan_options']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['plan_options']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['plan_options']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['plan_options']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['plan_options']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['plan_options']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['plan_options']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['plan_options']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['plan_options']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['plan_options']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['plan_options']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['plan_options']['total']);
?>
<tr>
 <td class=item><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['plans']->value[$_smarty_tpl->getVariable('smarty')->value['section']['plans']['index']]['plans'][$_smarty_tpl->getVariable('smarty')->value['section']['plan_options']['index']]['name'], ENT_QUOTES, 'UTF-8', true);?>
</td>
 <td class=item align=right><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['plans']->value[$_smarty_tpl->getVariable('smarty')->value['section']['plans']['index']]['plans'][$_smarty_tpl->getVariable('smarty')->value['section']['plan_options']['index']]['deposit'], ENT_QUOTES, 'UTF-8', true);?>
</td>
 <td class=item align=right><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['plans']->value[$_smarty_tpl->getVariable('smarty')->value['section']['plans']['index']]['plans'][$_smarty_tpl->getVariable('smarty')->value['section']['plan_options']['index']]['percent'], ENT_QUOTES, 'UTF-8', true);?>
</td>
</tr>
<?php endfor; endif; ?>
</table>
<br>
<table cellspacing=1 cellpadding=2 border=0 width=100%<?php ?>>
<?php if (!$_smarty_tpl->tpl_vars['plans']->value[$_smarty_tpl->getVariable('smarty')->value['section']['plans']['index']]['deposits']){?>
<tr>
 <td colspan=4><b>No deposits for this plan</b></td>
</tr>           
<?php }else{ ?>
<tr>
 <td colspan=4 class=inheader style="text-align:left">Your deposits:</td>
</tr>
<tr>
 <td class=inheader>Date</td>
 <td class=inheader>Amount</td>
<?php if ($_smarty_tpl->tpl_vars['plans']->value[$_smarty_tpl->getVariable('smarty')->value['section']['plans']['index']]['use_compound']){?>
 <td class=inheader>Compounding Percent</td>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['plans']->value[$_smarty_tpl->getVariable('smarty')->value['section']['plans']['index']]['withdraw_principal']){?>
 <td class=inheader>Release</td>
<?php }?>
</tr>           
<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['deposit'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['deposit']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['deposit']['name'] = 'deposit';
$_smarty_tpl->tpl_vars['smarty']->value['section']['deposit']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['plans']->value[$_smarty_tpl->getVariable('smarty')->value['section']['plans']['index']]['deposits']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['deposit']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['deposit']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['deposit']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['deposit']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['deposit']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['deposit']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['deposit']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['deposit']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['deposit']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['deposit']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['deposit']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['deposit']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['deposit']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['deposit']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['deposit']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['deposit']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['deposit']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['deposit']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['deposit']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['deposit']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['deposit']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['deposit']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['deposit']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['deposit']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['deposit']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['deposit']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['deposit']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['deposit']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['deposit']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['deposit']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['deposit']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['deposit']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['deposit']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['deposit']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['deposit']['total']);
?>
<tr>
 <td align=center class=item><b><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['plans']->value[$_smarty_tpl->getVariable('smarty')->value['section']['plans']['index']]['deposits'][$_smarty_tpl->getVariable('smarty')->value['section']['deposit']['index']]['date'], ENT_QUOTES, 'UTF-8', true);?>
</b><br>Expire in <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['plans']->value[$_smarty_tpl->getVariable('smarty')->value['section']['plans']['index']]['deposits'][$_smarty_tpl->getVariable('smarty')->value['section']['deposit']['index']]['expire_in'], ENT_QUOTES, 'UTF-8', true);?>
 days</td>
 <td align=center class=item><b><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency_sign']->value, ENT_QUOTES, 'UTF-8', true);?>
<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['plans']->value[$_smarty_tpl->getVariable('smarty')->value['section']['plans']['index']]['deposits'][$_smarty_tpl->getVariable('smarty')->value['section']['deposit']['index']]['deposit'], ENT_QUOTES, 'UTF-8', true);?>
 <img src="images/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['plans']->value[$_smarty_tpl->getVariable('smarty')->value['section']['plans']['index']]['deposits'][$_smarty_tpl->getVariable('smarty')->value['section']['deposit']['index']]['ec'], ENT_QUOTES, 'UTF-8', true);?>
.gif" align=absmiddle hspace=1 height=17></b></td>
<?php if ($_smarty_tpl->tpl_vars['plans']->value[$_smarty_tpl->getVariable('smarty')->value['section']['plans']['index']]['use_compound']){?>
 <td align=center class=item align=center><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['plans']->value[$_smarty_tpl->getVariable('smarty')->value['section']['plans']['index']]['deposits'][$_smarty_tpl->getVariable('smarty')->value['section']['deposit']['index']]['compound'], ENT_QUOTES, 'UTF-8', true);?>
% <a href="?a=change_compound&deposit=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['plans']->value[$_smarty_tpl->getVariable('smarty')->value['section']['plans']['index']]['deposits'][$_smarty_tpl->getVariable('smarty')->value['section']['deposit']['index']]['id'], ENT_QUOTES, 'UTF-8', true);?>
">[change]</a></td>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['plans']->value[$_smarty_tpl->getVariable('smarty')->value['section']['plans']['index']]['withdraw_principal']){?>
 <td align=center class=item>
  <?php if ($_smarty_tpl->tpl_vars['plans']->value[$_smarty_tpl->getVariable('smarty')->value['section']['plans']['index']]['deposits'][$_smarty_tpl->getVariable('smarty')->value['section']['deposit']['index']]['can_withdraw']){?>
   <a href="?a=withdraw_principal&deposit=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['plans']->value[$_smarty_tpl->getVariable('smarty')->value['section']['plans']['index']]['deposits'][$_smarty_tpl->getVariable('smarty')->value['section']['deposit']['index']]['id'], ENT_QUOTES, 'UTF-8', true);?>
">[release]</a>
  <?php }else{ ?>
   <?php if ($_smarty_tpl->tpl_vars['plans']->value[$_smarty_tpl->getVariable('smarty')->value['section']['plans']['index']]['deposits'][$_smarty_tpl->getVariable('smarty')->value['section']['deposit']['index']]['pending_duration']>0){?>
    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['plans']->value[$_smarty_tpl->getVariable('smarty')->value['section']['plans']['index']]['deposits'][$_smarty_tpl->getVariable('smarty')->value['section']['deposit']['index']]['pending_duration'], ENT_QUOTES, 'UTF-8', true);?>
 day<?php if ($_smarty_tpl->tpl_vars['plans']->value[$_smarty_tpl->getVariable('smarty')->value['section']['plans']['index']]['deposits'][$_smarty_tpl->getVariable('smarty')->value['section']['deposit']['index']]['pending_duration']>1){?>s<?php }?> left
   <?php }else{ ?>
    not available
   <?php }?>
  <?php }?>
 </td>
<?php }?>
</tr>
<?php endfor; endif; ?>
<?php }?>
</table>
<?php if ($_smarty_tpl->tpl_vars['plans']->value[$_smarty_tpl->getVariable('smarty')->value['section']['plans']['index']]['total_deposit']>0||$_smarty_tpl->tpl_vars['plans']->value[$_smarty_tpl->getVariable('smarty')->value['section']['plans']['index']]['today_profit']>0||$_smarty_tpl->tpl_vars['plans']->value[$_smarty_tpl->getVariable('smarty')->value['section']['plans']['index']]['total_profit']>0){?>
<table cellspacing=0 cellpadding=1 border=0>
<tr><td>Deposited Total:</td><td><b><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency_sign']->value, ENT_QUOTES, 'UTF-8', true);?>
<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['plans']->value[$_smarty_tpl->getVariable('smarty')->value['section']['plans']['index']]['total_deposit'], ENT_QUOTES, 'UTF-8', true);?>
</b></td></tr>
<tr><td>Profit Today:</td><td><b><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency_sign']->value, ENT_QUOTES, 'UTF-8', true);?>
<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['plans']->value[$_smarty_tpl->getVariable('smarty')->value['section']['plans']['index']]['today_profit'], ENT_QUOTES, 'UTF-8', true);?>
</b></td></tr>
<tr><td>Total Profit:</td><td><b><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency_sign']->value, ENT_QUOTES, 'UTF-8', true);?>
<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['plans']->value[$_smarty_tpl->getVariable('smarty')->value['section']['plans']['index']]['total_profit'], ENT_QUOTES, 'UTF-8', true);?>
</b></td></tr>
</table>
<?php }?>
<br>
</td></tr></table>
<br>
<?php endfor; endif; ?>

</td>

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>
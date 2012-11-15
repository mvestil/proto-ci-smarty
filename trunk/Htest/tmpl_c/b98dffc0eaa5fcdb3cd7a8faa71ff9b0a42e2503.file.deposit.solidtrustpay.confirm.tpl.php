<?php /* Smarty version Smarty-3.1.11, created on 2012-11-14 12:33:33
         compiled from ".\tmpl\deposit.solidtrustpay.confirm.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2886650a38f9d9afe51-35738037%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b98dffc0eaa5fcdb3cd7a8faa71ff9b0a42e2503' => 
    array (
      0 => '.\\tmpl\\deposit.solidtrustpay.confirm.tpl',
      1 => 1351743739,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2886650a38f9d9afe51-35738037',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'false_data' => 0,
    'account' => 0,
    'currency_sign' => 0,
    'amount_format' => 0,
    'use_compound' => 0,
    'compound_min_percents' => 0,
    'compound_max_percents' => 0,
    'compound_percents' => 0,
    'compounding' => 0,
    'pid' => 0,
    'amount' => 0,
    'settings' => 0,
    'userinfo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_50a38f9dbe1b71_90864476',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50a38f9dbe1b71_90864476')) {function content_50a38f9dbe1b71_90864476($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<td align="left" valign="top" class="pad_10" bgcolor="#EFF3F8">


<?php if ($_smarty_tpl->tpl_vars['false_data']->value!=1){?>
<h3>Please confirm your deposit:</h3><br><br>

<form name=spend method=post action="https://solidtrustpay.com/handle.php">

Your solidtrustpay account number <b><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['account']->value, ENT_QUOTES, 'UTF-8', true);?>
</b><br>
Amount (<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency_sign']->value, ENT_QUOTES, 'UTF-8', true);?>
): <b><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['amount_format']->value, ENT_QUOTES, 'UTF-8', true);?>
</b><br>
<?php if ($_smarty_tpl->tpl_vars['use_compound']->value){?>
<?php if ($_smarty_tpl->tpl_vars['compound_min_percents']->value==$_smarty_tpl->tpl_vars['compound_max_percents']->value&&!$_smarty_tpl->tpl_vars['compound_percents']->value){?>
<input type=hidden name=user2 value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['compound_min_percents']->value, ENT_QUOTES, 'UTF-8', true);?>
">
<?php }else{ ?>
<table cellspacing=0 cellpadding=2 border=0>
<tr><td nowrap width=1%<?php ?>>Compounding percent: </td>
  <?php if ($_smarty_tpl->tpl_vars['compound_percents']->value){?>
<td><select name='user2' class=inpts>
<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['p'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['p']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['p']['name'] = 'p';
$_smarty_tpl->tpl_vars['smarty']->value['section']['p']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['compound_percents']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['p']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['p']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['p']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['p']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['p']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['p']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['p']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['p']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['p']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['p']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['p']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['p']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['p']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['p']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['p']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['total']);
?><option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['compound_percents']->value[$_smarty_tpl->getVariable('smarty')->value['section']['p']['index']]['percent'], ENT_QUOTES, 'UTF-8', true);?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['compound_percents']->value[$_smarty_tpl->getVariable('smarty')->value['section']['p']['index']]['percent'], ENT_QUOTES, 'UTF-8', true);?>
%</option><?php endfor; endif; ?>
</select></td>
  <?php }else{ ?>
<td width=99%<?php ?>><input type=text name='user2' value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['compound_min_percents']->value, ENT_QUOTES, 'UTF-8', true);?>
" class=inpts size=5></td></tr>
<tr><td nowrap colspan=2>(You can set any percent between <b><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['compound_min_percents']->value, ENT_QUOTES, 'UTF-8', true);?>
%</b> and <b><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['compound_max_percents']->value, ENT_QUOTES, 'UTF-8', true);?>
%</b>)</td>
  <?php }?>
</tr>
<!--tr><td colspan=2><small>Example: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['compounding']->value, ENT_QUOTES, 'UTF-8', true);?>
% of your earning will be accumulate on deposit.</small></td></tr-->
</table>
<?php }?>
<?php }else{ ?>
<input type=hidden name=compound value="0">
<?php }?>

<br>

<input type=hidden name=item_id value=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['pid']->value, ENT_QUOTES, 'UTF-8', true);?>
>
<input type=hidden name=user3 value=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['pid']->value, ENT_QUOTES, 'UTF-8', true);?>
>
<input type=hidden name=user1 value="solidtrustpay_postback">

<INPUT type=hidden name=amount value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['amount']->value, ENT_QUOTES, 'UTF-8', true);?>
">
<INPUT type=hidden name=merchantAccount value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value['def_payee_account_solidtrustpay'], ENT_QUOTES, 'UTF-8', true);?>
" >
<INPUT type=hidden name=notify_url value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value['site_url'], ENT_QUOTES, 'UTF-8', true);?>
/index.php">
<input type=hidden name="currency" value="USD" />

<INPUT type=hidden name=return_url value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value['site_url'], ENT_QUOTES, 'UTF-8', true);?>
/index.php?a=return_egold&process=yes">
<INPUT type=hidden name=cancel_url value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value['site_url'], ENT_QUOTES, 'UTF-8', true);?>
/index.php?a=return_egold&process=no">
<INPUT type=hidden value="Deposit to <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value['site_name'], ENT_QUOTES, 'UTF-8', true);?>
 user <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['userinfo']->value['username'], ENT_QUOTES, 'UTF-8', true);?>
" name=memo>
<INPUT type=hidden value="Deposit to <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value['site_name'], ENT_QUOTES, 'UTF-8', true);?>
 user <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['userinfo']->value['username'], ENT_QUOTES, 'UTF-8', true);?>
" name=item_id>
<br><input type=submit value="Process" class=sbmt> &nbsp;
<input type=button class=sbmt value="Cancel" onclick="document.location='?a=account'">
</form>
<?php }?>

</td>
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>
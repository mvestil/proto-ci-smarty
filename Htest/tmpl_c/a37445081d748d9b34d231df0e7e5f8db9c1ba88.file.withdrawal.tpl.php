<?php /* Smarty version Smarty-3.1.11, created on 2012-11-05 08:36:08
         compiled from ".\tmpl\withdrawal.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2649850977a78e20834-46871249%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a37445081d748d9b34d231df0e7e5f8db9c1ba88' => 
    array (
      0 => '.\\tmpl\\withdrawal.tpl',
      1 => 1351742985,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2649850977a78e20834-46871249',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'fatal' => 0,
    'say' => 0,
    'currency_sign' => 0,
    'settings' => 0,
    'batch' => 0,
    'preview' => 0,
    'amount' => 0,
    'ec' => 0,
    'comment' => 0,
    'currency' => 0,
    'to_withdraw' => 0,
    'account' => 0,
    'userinfo' => 0,
    'ab_formated' => 0,
    'ps' => 0,
    'hold' => 0,
    'pay_accounts' => 0,
    'other_processings' => 0,
    'withdraw_systems' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_50977a795854c4_05178411',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50977a795854c4_05178411')) {function content_50977a795854c4_05178411($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<td align="left" valign="top" class="pad_10" bgcolor="#EFF3F8">


<h3>Ask for withdrawal:</h3><br>

<?php if ($_smarty_tpl->tpl_vars['fatal']->value){?>

<?php if ($_smarty_tpl->tpl_vars['fatal']->value=='one_per_month'){?>
You can withdraw once per month only.
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['fatal']->value=='withdrawal_percent_reached'){?>
Withdrawl percent has been reached. We have stopped all withdrawals.
<?php }?>

<?php }else{ ?>

<?php if ($_smarty_tpl->tpl_vars['say']->value=='on_hold'){?>
Sorry, this amount on hold now.<br><br>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['say']->value=='zero'){?>
Sorry, you can't request a withdraw smaller than <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency_sign']->value, ENT_QUOTES, 'UTF-8', true);?>
0.00 only<br><br>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['say']->value=='less_min'){?>
Sorry, you can request not less than <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency_sign']->value, ENT_QUOTES, 'UTF-8', true);?>
<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value['min_withdrawal_amount'], ENT_QUOTES, 'UTF-8', true);?>
<br><br>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['say']->value=='greater_max'){?>
Sorry, you can request not greater than <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency_sign']->value, ENT_QUOTES, 'UTF-8', true);?>
<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value['max_withdrawal_amount'], ENT_QUOTES, 'UTF-8', true);?>
<br><br>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['say']->value=='daily_limit'){?>
Sorry, you have exceeded a daily limit<br><br>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['say']->value=='processed'){?>
<?php if ($_smarty_tpl->tpl_vars['batch']->value==''){?>
Withdrawal request saved.<br><br>
<?php }else{ ?> Withdrawal processed, batch_id: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['batch']->value, ENT_QUOTES, 'UTF-8', true);?>
<br>
<br>
<?php }?>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['say']->value=='not_enought'){?>
Sorry, you have requested the amount larger than the one on your balance.<br><br>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['say']->value=='invalid_transaction_code'){?>
You have entered the invalid transaction code.<br><br>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['say']->value=='no_deposits'){?>
You have not done any deposits yet. Withdrawal function will be available after a deposit.
<br><br>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['say']->value=='no_active_deposits'){?>
You must have active deposit to withdraw.
<?php }?>


<?php if ($_smarty_tpl->tpl_vars['preview']->value){?>

<form method=post>
<input type=hidden name=a value=withdraw>
<input type=hidden name=action value=withdraw>
<input type=hidden name=amount value=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['amount']->value, ENT_QUOTES, 'UTF-8', true);?>
>
<input type=hidden name=ec value=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ec']->value, ENT_QUOTES, 'UTF-8', true);?>
>
<input type=hidden name=comment value="<?php echo htmlspecialchars(htmlspecialchars($_smarty_tpl->tpl_vars['comment']->value, ENT_QUOTES, 'UTF-8', true), ENT_QUOTES, 'UTF-8', true);?>
">

<table cellspacing=0 cellpadding=2 border=0>
<tr>
 <td colspan=2>You are withdrawing <b><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency_sign']->value, ENT_QUOTES, 'UTF-8', true);?>
<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['amount']->value, ENT_QUOTES, 'UTF-8', true);?>
</b> of <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value, ENT_QUOTES, 'UTF-8', true);?>
. 
<?php if ($_smarty_tpl->tpl_vars['settings']->value['withdrawal_fee']>0||$_smarty_tpl->tpl_vars['settings']->value['withdrawal_fee_min']>0){?> Our fee is 
<?php if ($_smarty_tpl->tpl_vars['settings']->value['withdrawal_fee']>0){?><b><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value['withdrawal_fee'], ENT_QUOTES, 'UTF-8', true);?>
%</b><?php }?>
<?php if ($_smarty_tpl->tpl_vars['settings']->value['withdrawal_fee']>0&&$_smarty_tpl->tpl_vars['settings']->value['withdrawal_fee_min']>0){?> or <?php }?>
<?php if ($_smarty_tpl->tpl_vars['settings']->value['withdrawal_fee_min']>0){?> <b><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency_sign']->value, ENT_QUOTES, 'UTF-8', true);?>
<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value['withdrawal_fee_min'], ENT_QUOTES, 'UTF-8', true);?>
</b><?php if ($_smarty_tpl->tpl_vars['settings']->value['withdrawal_fee']>0){?> as a minimum<?php }?><?php }?>
.
<?php }else{ ?>
We have no fee for this operation. 
<?php }?>
</td>
</tr>
<tr>
 <td colspan=2>Actually you will acquire the total of <b><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency_sign']->value, ENT_QUOTES, 'UTF-8', true);?>
<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['to_withdraw']->value, ENT_QUOTES, 'UTF-8', true);?>
</b> on your <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value, ENT_QUOTES, 'UTF-8', true);?>
 account <?php if ($_smarty_tpl->tpl_vars['account']->value){?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['account']->value, ENT_QUOTES, 'UTF-8', true);?>
<?php }?>.</td>
</tr>
<?php if ($_smarty_tpl->tpl_vars['comment']->value){?>
<tr>
 <td colspan=2>Your comments: <?php echo htmlspecialchars(htmlspecialchars($_smarty_tpl->tpl_vars['comment']->value, ENT_QUOTES, 'UTF-8', true), ENT_QUOTES, 'UTF-8', true);?>
</td>
</tr>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['settings']->value['use_transaction_code']&&$_smarty_tpl->tpl_vars['userinfo']->value['transaction_code']){?>
<tr>
 <td colspna=2>&nbsp;</td>
</tr>
<tr>
 <td width=1% nowrap>Transaction Code:</td>
 <td width=99%<?php ?>><input type="password" name="transaction_code" class=inpts size=15></td>
</tr>
<?php }?>
<tr>
 <td><br><input type=submit value="Confirm" class=sbmt></td>
</tr></table>
</form>


<?php }else{ ?>


<form method=post>
<input type=hidden name=a value=withdraw>
<input type=hidden name=action value=preview>

<table cellspacing=0 cellpadding=2 border=0>
<tr>
 <td>Account Balance:</td>
 <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency_sign']->value, ENT_QUOTES, 'UTF-8', true);?>
<b><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ab_formated']->value['total'], ENT_QUOTES, 'UTF-8', true);?>
</b></td>
</tr>
<tr><td>&nbsp;</td>
 <td> <small>
<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['p'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['p']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['p']['name'] = 'p';
$_smarty_tpl->tpl_vars['smarty']->value['section']['p']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['ps']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
?>
   <?php if ($_smarty_tpl->tpl_vars['ps']->value[$_smarty_tpl->getVariable('smarty')->value['section']['p']['index']]['balance']>0){?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency_sign']->value, ENT_QUOTES, 'UTF-8', true);?>
<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ps']->value[$_smarty_tpl->getVariable('smarty')->value['section']['p']['index']]['balance'], ENT_QUOTES, 'UTF-8', true);?>
 of <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ps']->value[$_smarty_tpl->getVariable('smarty')->value['section']['p']['index']]['name'], ENT_QUOTES, 'UTF-8', true);?>
<?php if ($_smarty_tpl->tpl_vars['hold']->value[$_smarty_tpl->getVariable('smarty')->value['section']['p']['index']]['amount']>0){?> / <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency_sign']->value, ENT_QUOTES, 'UTF-8', true);?>
<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['hold']->value[$_smarty_tpl->getVariable('smarty')->value['section']['p']['index']]['amount'], ENT_QUOTES, 'UTF-8', true);?>
 on hold<?php }?><br><?php }?>
<?php endfor; endif; ?>
 </td>
</tr>
<tr>
 <td>Pending Withdrawals: </td>
 <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency_sign']->value, ENT_QUOTES, 'UTF-8', true);?>
<b><?php if ($_smarty_tpl->tpl_vars['ab_formated']->value['withdraw_pending']!=0){?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ab_formated']->value['withdraw_pending'], ENT_QUOTES, 'UTF-8', true);?>
<?php }else{ ?>0.00<?php }?></b></td>
</tr>

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
 <td><?php if ($_smarty_tpl->tpl_vars['pay_accounts']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ps']['index']]['account']!=''){?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['pay_accounts']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ps']['index']]['account'], ENT_QUOTES, 'UTF-8', true);?>
<?php }else{ ?><a href=?a=edit_account><i>not set</i></a><?php }?></td>
</tr>
<?php endfor; endif; ?>
</table>

<?php if ($_smarty_tpl->tpl_vars['other_processings']->value){?>
For other eCurrencies please provide your <br> Payee Account details in the comments field below.
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['withdraw_systems']->value){?>
<table cellspacing=0 cellpadding=2 border=0 width=200>
<tr>
 <td colspan=2>&nbsp;</td>
</tr>
<tr>
 <td>Select eCurrency:</td>
 <td><select name=ec class=inpts>
<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['p'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['p']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['p']['name'] = 'p';
$_smarty_tpl->tpl_vars['smarty']->value['section']['p']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['withdraw_systems']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
?>
   <option value=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['withdraw_systems']->value[$_smarty_tpl->getVariable('smarty')->value['section']['p']['index']]['id'], ENT_QUOTES, 'UTF-8', true);?>
><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['withdraw_systems']->value[$_smarty_tpl->getVariable('smarty')->value['section']['p']['index']]['name'], ENT_QUOTES, 'UTF-8', true);?>
</option>
<?php endfor; endif; ?>
     </select>
 </td>
</tr><tr>
 <td>Withdrawal (<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency_sign']->value, ENT_QUOTES, 'UTF-8', true);?>
):</td>
 <td><input type=text name=amount value="10.00" class=inpts size=15></td>
</tr><tr>
 <td colspan=2><textarea name=comment class=inpts cols=45 rows=4>Your comment</textarea>
</tr>
<tr>
 <td>&nbsp;</td>
 <td><input type=submit value="Request" class=sbmt></td>
</tr></table>
<?php }else{ ?>
<br><br>
You have no funds to withdraw.
<?php }?>
</form>

<?php }?>

<?php }?>

</td>
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>
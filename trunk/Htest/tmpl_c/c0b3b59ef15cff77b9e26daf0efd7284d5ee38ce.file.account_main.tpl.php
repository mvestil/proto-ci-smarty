<?php /* Smarty version Smarty-3.1.11, created on 2012-11-15 10:28:57
         compiled from ".\tmpl\account_main.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1371450a4c3e99e8cd5-41412630%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c0b3b59ef15cff77b9e26daf0efd7284d5ee38ce' => 
    array (
      0 => '.\\tmpl\\account_main.tpl',
      1 => 1352895453,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1371450a4c3e99e8cd5-41412630',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'settings' => 0,
    'userinfo' => 0,
    'last_access' => 0,
    'currency_sign' => 0,
    'ab_formated' => 0,
    'ps' => 0,
    'last_deposit' => 0,
    'last_deposit_date' => 0,
    'last_withdrawal' => 0,
    'last_withdrawal_date' => 0,
    'wires' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_50a4c3e9d33d91_43984552',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50a4c3e9d33d91_43984552')) {function content_50a4c3e9d33d91_43984552($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<td align="left" valign="top" class="pad_10" bgcolor="#EFF3F8">

<h3>Your account:</h3><br>
<?php if ($_smarty_tpl->tpl_vars['settings']->value['use_transaction_code']==1&&$_smarty_tpl->tpl_vars['userinfo']->value['transaction_code']==''){?> <b>Note: currently you have not specified 
a Transaction code. The Transaction code strengthens your funds security in our 
system. The code is required to withdraw funds from your account<?php if ($_smarty_tpl->tpl_vars['settings']->value['internal_transfer_enabled']){?> 
and for internal transfer to another user account<?php }?>. Just do not change 'Transaction 
code' in your account information if you do not want to use this feature. <a href=?a=edit_account>Click 
here</a> to specify a new transaction code .</b> <br>
<br>
<?php }?>

<table cellspacing=0 cellpadding=2 border=0>
<tr>
 <td>User:</td>
 <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['userinfo']->value['username'], ENT_QUOTES, 'UTF-8', true);?>
</td>
</tr><tr>
 <td>Registration Date:</td>
 <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['userinfo']->value['create_account_date'], ENT_QUOTES, 'UTF-8', true);?>
</td>
</tr><tr>
 <td>Last Access:</td>
 <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['last_access']->value, ENT_QUOTES, 'UTF-8', true);?>
&nbsp;</td>
</tr><tr>
 <td>&nbsp;</td>
</tr><tr>
 <td valign=top>Account Balance:</td>
 <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency_sign']->value, ENT_QUOTES, 'UTF-8', true);?>
<b><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ab_formated']->value['total'], ENT_QUOTES, 'UTF-8', true);?>
</b><br>
 <small>
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
<br><?php }?>
<?php endfor; endif; ?>
</tr><tr>
 <td>Earned Total:</td>
 <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency_sign']->value, ENT_QUOTES, 'UTF-8', true);?>
<b><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ab_formated']->value['earning'], ENT_QUOTES, 'UTF-8', true);?>
</b></td>
</tr><tr>
 <td>Pending Withdrawal:</td>
 <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency_sign']->value, ENT_QUOTES, 'UTF-8', true);?>
<b><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ab_formated']->value['withdraw_pending'], ENT_QUOTES, 'UTF-8', true);?>
</b></td>
</tr><tr>
 <td>Withdrew Total:</td>
 <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency_sign']->value, ENT_QUOTES, 'UTF-8', true);?>
<b><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ab_formated']->value['withdrawal'], ENT_QUOTES, 'UTF-8', true);?>
</b></td>
</tr><tr>
 <td>Active Deposit:</td>
 <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency_sign']->value, ENT_QUOTES, 'UTF-8', true);?>
<b><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ab_formated']->value['active_deposit'], ENT_QUOTES, 'UTF-8', true);?>
</b></td>
</tr><tr>
 <td>&nbsp;</td>
</tr>
<?php if ($_smarty_tpl->tpl_vars['last_deposit']->value){?>
<tr>
 <td>Last Deposit:</td>
 <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency_sign']->value, ENT_QUOTES, 'UTF-8', true);?>
<b><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['last_deposit']->value, ENT_QUOTES, 'UTF-8', true);?>
</b> &nbsp; <small><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['last_deposit_date']->value, ENT_QUOTES, 'UTF-8', true);?>
</small></td>
</tr>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['ab_formated']->value['deposit']!=0){?>
<tr>
 <td>Total Deposit:</td>
 <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency_sign']->value, ENT_QUOTES, 'UTF-8', true);?>
<b><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ab_formated']->value['deposit'], ENT_QUOTES, 'UTF-8', true);?>
</b></td>
</tr>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['last_withdrawal']->value){?>
<tr>
 <td>Last Withdrawal:</td>
 <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency_sign']->value, ENT_QUOTES, 'UTF-8', true);?>
<b><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['last_withdrawal']->value, ENT_QUOTES, 'UTF-8', true);?>
</b> &nbsp; <small><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['last_withdrawal_date']->value, ENT_QUOTES, 'UTF-8', true);?>
</small></td>
</tr>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['ab_formated']->value['withdrawal']>0){?>
<tr>
    <td>Withdrew Total:</td>
 <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency_sign']->value, ENT_QUOTES, 'UTF-8', true);?>
<b><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ab_formated']->value['withdrawal'], ENT_QUOTES, 'UTF-8', true);?>
</b></td>
</tr>
<?php }?>
<tr>
 <td>&nbsp;</td>
</tr></table>

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
  <?php if ($_smarty_tpl->tpl_vars['ps']->value[$_smarty_tpl->getVariable('smarty')->value['section']['p']['index']]['pending_col']>0){?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ps']->value[$_smarty_tpl->getVariable('smarty')->value['section']['p']['index']]['pending_col'], ENT_QUOTES, 'UTF-8', true);?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ps']->value[$_smarty_tpl->getVariable('smarty')->value['section']['p']['index']]['name'], ENT_QUOTES, 'UTF-8', true);?>
 deposit<?php if ($_smarty_tpl->tpl_vars['ps']->value[$_smarty_tpl->getVariable('smarty')->value['section']['p']['index']]['pending_col']>1){?>s<?php }?> of <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency_sign']->value, ENT_QUOTES, 'UTF-8', true);?>
<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ps']->value[$_smarty_tpl->getVariable('smarty')->value['section']['p']['index']]['pending_amount'], ENT_QUOTES, 'UTF-8', true);?>
 total pending<br><?php }?>
<?php endfor; endif; ?>

<br><br>
<?php if ($_smarty_tpl->tpl_vars['wires']->value){?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['wires']->value, ENT_QUOTES, 'UTF-8', true);?>
 Wire Transfer(s) pending.<br>
<?php }?>
<br>

</td>


<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>
<?php /* Smarty version Smarty-3.1.11, created on 2012-11-15 09:32:20
         compiled from ".\tmpl\deposit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:153350a4b6a4c380c1-72016676%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9b5df85258eca20bf17613b4dee9d1a4c0220d8d' => 
    array (
      0 => '.\\tmpl\\deposit.tpl',
      1 => 1351742716,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '153350a4b6a4c380c1-72016676',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'qplans' => 0,
    'frm' => 0,
    'plans' => 0,
    'compounding_available' => 0,
    'currency_sign' => 0,
    'settings' => 0,
    'ab_formated' => 0,
    'ps' => 0,
    'hold' => 0,
    'min_deposit' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_50a4b6a536a187_93435307',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50a4b6a536a187_93435307')) {function content_50a4b6a536a187_93435307($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<td align="left" valign="top" class="pad_10" bgcolor="#EFF3F8">


<script language="javascript"><!--
function openCalculator(id)
{

  w = 225; h = 400;
  t = (screen.height-h-30)/2;
  l = (screen.width-w-30)/2;
  window.open('?a=calendar&type=' + id, 'calculator' + id, "top="+t+",left="+l+",width="+w+",height="+h+",resizable=1,scrollbars=0");


  <?php if ($_smarty_tpl->tpl_vars['qplans']->value>1){?>

  for (i = 0; i < document.spendform.h_id.length; i++)
  {
    if (document.spendform.h_id[i].value == id)
    {
      document.spendform.h_id[i].checked = true;
    }
  }

  <?php }?>

}
--></script>


<?php if ($_smarty_tpl->tpl_vars['frm']->value['say']=='deposit_success'){?>
<h3>The deposit has been successfully saved.</h3>
<br><br>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['frm']->value['say']=='deposit_saved'){?>
<h3>The deposit has been saved. It will become active when the administrator checks statistics.</h3><br><br>
<?php }?>

<h3>Make a Deposit:</h3>
<br>
<form method=post name="spendform">
<input type=hidden name=a value=deposit>
  <?php if ($_smarty_tpl->tpl_vars['qplans']->value>1){?> Select a plan:<br>
<?php }?>

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
<table cellspacing=1 cellpadding=2 border=0 width=100%<?php ?>>
<tr>
 <td colspan=3>
<?php if ($_smarty_tpl->tpl_vars['qplans']->value>1){?>
	<input type=radio name=h_id value='<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['plans']->value[$_smarty_tpl->getVariable('smarty')->value['section']['plans']['index']]['id'], ENT_QUOTES, 'UTF-8', true);?>
' <?php if ((($_smarty_tpl->getVariable('smarty')->value['section']['plans']['first']==1)&&($_smarty_tpl->tpl_vars['frm']->value['h_id']==''))||($_smarty_tpl->tpl_vars['frm']->value['h_id']==$_smarty_tpl->tpl_vars['plans']->value[$_smarty_tpl->getVariable('smarty')->value['section']['plans']['index']]['id'])){?> checked <?php }?> > 
<!--	<input type=radio name=h_id value='<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['plans']->value[$_smarty_tpl->getVariable('smarty')->value['section']['plans']['index']]['id'], ENT_QUOTES, 'UTF-8', true);?>
' <?php if ((($_smarty_tpl->getVariable('smarty')->value['section']['plans']['first']==1)&&($_smarty_tpl->tpl_vars['frm']->value['h_id']==''))||($_smarty_tpl->tpl_vars['frm']->value['h_id']==$_smarty_tpl->tpl_vars['plans']->value[$_smarty_tpl->getVariable('smarty')->value['section']['plans']['index']]['id'])){?> checked <?php }?> <?php if ($_smarty_tpl->tpl_vars['compounding_available']->value>0){?>onclick="document.spendform.compound.disabled=<?php if ($_smarty_tpl->tpl_vars['plans']->value[$_smarty_tpl->getVariable('smarty')->value['section']['plans']['index']]['use_compound']==1){?>false<?php }else{ ?>true<?php }?>;"<?php }?>> -->
<?php }else{ ?>
	<input type=hidden name=h_id value='<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['plans']->value[$_smarty_tpl->getVariable('smarty')->value['section']['plans']['index']]['id'], ENT_QUOTES, 'UTF-8', true);?>
'>
<?php }?>

	<b><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['plans']->value[$_smarty_tpl->getVariable('smarty')->value['section']['plans']['index']]['name'], ENT_QUOTES, 'UTF-8', true);?>
</b></td>
</tr><tr>
 <td class=inheader>Plan</td>
 <td class=inheader width=200>Spent Amount (<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency_sign']->value, ENT_QUOTES, 'UTF-8', true);?>
)</td>
 <td class=inheader width=100 nowrap><nobr><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['plans']->value[$_smarty_tpl->getVariable('smarty')->value['section']['plans']['index']]['period'], ENT_QUOTES, 'UTF-8', true);?>
 Profit (%)</nobr></td>
</tr>
<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['options'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['options']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['options']['name'] = 'options';
$_smarty_tpl->tpl_vars['smarty']->value['section']['options']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['plans']->value[$_smarty_tpl->getVariable('smarty')->value['section']['plans']['index']]['plans']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['options']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['options']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['options']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['options']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['options']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['options']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['options']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['options']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['options']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['options']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['options']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['options']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['options']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['options']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['options']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['options']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['options']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['options']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['options']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['options']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['options']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['options']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['options']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['options']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['options']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['options']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['options']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['options']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['options']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['options']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['options']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['options']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['options']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['options']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['options']['total']);
?>
<tr>
 <td class=item><?php echo htmlspecialchars(htmlspecialchars($_smarty_tpl->tpl_vars['plans']->value[$_smarty_tpl->getVariable('smarty')->value['section']['plans']['index']]['plans'][$_smarty_tpl->getVariable('smarty')->value['section']['options']['index']]['name'], ENT_QUOTES, 'UTF-8', true), ENT_QUOTES, 'UTF-8', true);?>
</td>
 <td class=item align=right><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['plans']->value[$_smarty_tpl->getVariable('smarty')->value['section']['plans']['index']]['plans'][$_smarty_tpl->getVariable('smarty')->value['section']['options']['index']]['deposit'], ENT_QUOTES, 'UTF-8', true);?>
</td>
 <td class=item align=right><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['plans']->value[$_smarty_tpl->getVariable('smarty')->value['section']['plans']['index']]['plans'][$_smarty_tpl->getVariable('smarty')->value['section']['options']['index']]['percent'], ENT_QUOTES, 'UTF-8', true);?>
</td>
</tr>
<?php endfor; endif; ?>
<?php if ($_smarty_tpl->tpl_vars['settings']->value['enable_calculator']){?>
<tr>
 <td colspan=3 align=right><a href="javascript:openCalculator('<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['plans']->value[$_smarty_tpl->getVariable('smarty')->value['section']['plans']['index']]['id'], ENT_QUOTES, 'UTF-8', true);?>
')">Calculate your profit &gt;&gt;</a></td>
</tr>
<?php }?>
</table><br><br>
<?php endfor; endif; ?>


<table cellspacing=0 cellpadding=2 border=0>
<tr>
 <td>Your account balance (<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency_sign']->value, ENT_QUOTES, 'UTF-8', true);?>
):</td>
 <td align=right><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency_sign']->value, ENT_QUOTES, 'UTF-8', true);?>
<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ab_formated']->value['total'], ENT_QUOTES, 'UTF-8', true);?>
</td>
</tr>
<tr><td>&nbsp;</td>
 <td align=right>
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
<?php if ($_smarty_tpl->tpl_vars['hold']->value[$_smarty_tpl->getVariable('smarty')->value['section']['p']['index']]['amount']>0){?> / <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency_sign']->value, ENT_QUOTES, 'UTF-8', true);?>
<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['hold']->value[$_smarty_tpl->getVariable('smarty')->value['section']['p']['index']]['amount'], ENT_QUOTES, 'UTF-8', true);?>
 on hold<?php }?><br><?php }?>
<?php endfor; endif; ?>
  </small>
 </td>
</tr><tr>
      <td>Amount to Spend (<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency_sign']->value, ENT_QUOTES, 'UTF-8', true);?>
):</td>
 <td align=right><input type=text name=amount value='<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['min_deposit']->value, ENT_QUOTES, 'UTF-8', true);?>
' class=inpts size=15 style="text-align:right;"></td>
</tr>
<tr>
  <td colspan=2>
   <table cellspacing=0 cellpadding=2 border=0>
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
   <?php if ($_smarty_tpl->tpl_vars['ps']->value[$_smarty_tpl->getVariable('smarty')->value['section']['p']['index']]['balance']>0&&$_smarty_tpl->tpl_vars['ps']->value[$_smarty_tpl->getVariable('smarty')->value['section']['p']['index']]['status']==1){?>
    <tr>
     <td><input type=radio name=type value="account_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ps']->value[$_smarty_tpl->getVariable('smarty')->value['section']['p']['index']]['id'], ENT_QUOTES, 'UTF-8', true);?>
"></td>
     <td>Spend funds from the Account Balance <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ps']->value[$_smarty_tpl->getVariable('smarty')->value['section']['p']['index']]['name'], ENT_QUOTES, 'UTF-8', true);?>
</td>
    </tr>
   <?php }?>
<?php endfor; endif; ?>
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
   <?php if ($_smarty_tpl->tpl_vars['ps']->value[$_smarty_tpl->getVariable('smarty')->value['section']['p']['index']]['status']){?>
    <tr>
     <td><input type=radio name=type value="process_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ps']->value[$_smarty_tpl->getVariable('smarty')->value['section']['p']['index']]['id'], ENT_QUOTES, 'UTF-8', true);?>
" <?php if ($_smarty_tpl->getVariable('smarty')->value['section']['p']['index']==0){?>checked<?php }?>></td>
     <td>Spend funds from <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ps']->value[$_smarty_tpl->getVariable('smarty')->value['section']['p']['index']]['name'], ENT_QUOTES, 'UTF-8', true);?>
</td>
    </tr>
   <?php }?>
<?php endfor; endif; ?>
   </table>
  </td>
</tr>
<tr>
 <td colspan=2><input type=submit value="Spend" class=sbmt></td>
</tr></table>
</form>

<script language=javascript>
for (i = 0; i<document.spendform.type.length; i++) {
  if ((document.spendform.type[i].value.match('/process_/'))) {
    document.spendform.type[i].checked = true;
    break;
  }
}
</script>


</td>

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>
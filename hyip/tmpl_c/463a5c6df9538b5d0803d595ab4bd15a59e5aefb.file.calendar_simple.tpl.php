<?php /* Smarty version Smarty-3.1.11, created on 2012-11-14 10:52:04
         compiled from ".\tmpl\calendar_simple.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2082750a377d474d740-33041981%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '463a5c6df9538b5d0803d595ab4bd15a59e5aefb' => 
    array (
      0 => '.\\tmpl\\calendar_simple.tpl',
      1 => 1130771364,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2082750a377d474d740-33041981',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'error' => 0,
    'plans' => 0,
    'type' => 0,
    'currency_sign' => 0,
    'userinfo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_50a377d4a56a57_85626131',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50a377d4a56a57_85626131')) {function content_50a377d4a56a57_85626131($_smarty_tpl) {?><html>
<head>
<title>Calculator</title>
<link href="style.css" rel="stylesheet" type="text/css">
<?php if ($_smarty_tpl->tpl_vars['error']->value==''){?>

<script>
var percents = new Array;

<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['p'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['p']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['p']['name'] = 'p';
$_smarty_tpl->tpl_vars['smarty']->value['section']['p']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['plans']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
percents[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['plans']->value[$_smarty_tpl->getVariable('smarty')->value['section']['p']['index']]['i'], ENT_QUOTES, 'UTF-8', true);?>
] = new Array(<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['plans']->value[$_smarty_tpl->getVariable('smarty')->value['section']['p']['index']]['min_deposit'], ENT_QUOTES, 'UTF-8', true);?>
, <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['plans']->value[$_smarty_tpl->getVariable('smarty')->value['section']['p']['index']]['max_deposit'], ENT_QUOTES, 'UTF-8', true);?>
, <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['plans']->value[$_smarty_tpl->getVariable('smarty')->value['section']['p']['index']]['percent'], ENT_QUOTES, 'UTF-8', true);?>
);
<?php endfor; endif; ?>

var maxdays = <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['type']->value['q_days'], ENT_QUOTES, 'UTF-8', true);?>
;
var Amount = <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['type']->value['min_deposit'], ENT_QUOTES, 'UTF-8', true);?>
;
var returnprofit = <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['type']->value['return_profit'], ENT_QUOTES, 'UTF-8', true);?>
;

function CalculatePercent()
{
  Percent = 0;
  var LastPercent = percents[0][2];
  for (var i = 0; i < percents.length; i++)
  {
    if (Amount < percents[i][0])
    {
      Percent = LastPercent;
    }
    else
    {
      LastPercent = percents[i][2];
      if ((Amount >= percents[i][0]) && ((Amount <= percents[i][1]) || (percents[i][1] == 0)))
      {
        Percent = percents[i][2];
      }
    }
  }
}

function CalculateProfit() 
{
  Amount = new Number(document.data.amount.value);
  CalculatePercent();

  if (Percent == 0)
  {
    if (Amount < percents[0][0])
    {
      alert('Provided amount is too small. ' + percents[0][0] + ' is minimal!');
      document.data.amount.value = percents[0][0];
      CalculateProfit();
    }
    else if (percents[percents.length-1][1] != 0 && Amount > percents[percents.length-1][1])
    {
      alert('Provided amount is too big. ' + percents[percents.length-1][1] + ' is miximum!');
      document.data.amount.value = percents[percents.length-1][1];
      CalculateProfit();
    }
    else
    {
      alert('Provided amount do not meet any range');
    }
    return;
  }

  document.getElementById('percent').childNodes[0].data = Percent + '%';

  Profit = Math.round(Amount * Percent) / 100;
  if (returnprofit)
  {
    Profit += Amount;
  }
  document.getElementById('profit').childNodes[0].data = Profit;
}
function Spend()
{
  if (opener && opener.spendform && opener.spendform.amount)
  {
    opener.spendform.amount.value = document.data.amount.value;
    window.close();
  }
  else
  {
    alert('Please, return to Make Deposit Page to Spend!');
  }
}
</script>

<?php }?>
</head>
<body>
<?php if ($_smarty_tpl->tpl_vars['error']->value){?>
<center>
<?php if ($_smarty_tpl->tpl_vars['error']->value=='type_not_found'){?>
Specified Program not found.
<?php }?>
</center>
<?php }else{ ?>
<form name="data" onsubmit="CalculateProfit(); return false;">
<table>
<tr>
  <td>From:</td><td><b><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['type']->value['from_date'], ENT_QUOTES, 'UTF-8', true);?>
</b></td>
</tr>
<tr>
  <td>To:</td><td><b><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['type']->value['to_date'], ENT_QUOTES, 'UTF-8', true);?>
</b></td>
</tr>
</tr>
  <td>Amount:</td><td nowrap><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency_sign']->value, ENT_QUOTES, 'UTF-8', true);?>
 <input type="text" name="amount" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['type']->value['min_deposit'], ENT_QUOTES, 'UTF-8', true);?>
" size=5 class=inpts> <input type="button" value="Calculate" onclick="CalculateProfit()" class=sbmt></td>
</tr>
<tr>
  <td>Percent:</td><td><b><span id="percent">N/A</span></b></td>
</tr>
<tr>
  <td>Profit <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency_sign']->value, ENT_QUOTES, 'UTF-8', true);?>
:</td><td><b><span id="profit">N/A</span></b></td>
</tr>
<?php if ($_smarty_tpl->tpl_vars['userinfo']->value['logged']){?>
<tr>
  <td><input type="button" value="Spend" onclick="Spend();" class=sbmt></td>
</tr>
<?php }?>
</table>
<script>
CalculatePercent();
CalculateProfit();
</script>
</form>
<?php }?>
</body>
</html><?php }} ?>
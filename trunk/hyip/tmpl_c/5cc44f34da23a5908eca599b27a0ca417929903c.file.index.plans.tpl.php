<?php /* Smarty version Smarty-3.1.11, created on 2012-11-01 03:21:12
         compiled from ".\tmpl\index.plans.tpl" */ ?>
<?php /*%%SmartyHeaderCode:117245091eaa8155756-44497436%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5cc44f34da23a5908eca599b27a0ca417929903c' => 
    array (
      0 => '.\\tmpl\\index.plans.tpl',
      1 => 1175980264,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '117245091eaa8155756-44497436',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'index_plans' => 0,
    'currency_sign' => 0,
    'settings' => 0,
    'userinfo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_5091eaa82897a0_15321941',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5091eaa82897a0_15321941')) {function content_5091eaa82897a0_15321941($_smarty_tpl) {?>
<script language="javascript"><!--
function openCalculator(id)
{
  w = 225; h = 400;
  t = (screen.height-h-30)/2;
  l = (screen.width-w-30)/2;
  window.open('?a=calendar&type=' + id, 'calculator' + id, "top="+t+",left="+l+",width="+w+",height="+h+",resizable=1,scrollbars=0");
}
--></script>


<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['plans'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['plans']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['plans']['name'] = 'plans';
$_smarty_tpl->tpl_vars['smarty']->value['section']['plans']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['index_plans']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
<?php if (!$_smarty_tpl->tpl_vars['index_plans']->value[$_smarty_tpl->getVariable('smarty')->value['section']['plans']['index']]['closed']){?>
<table cellspacing=1 cellpadding=2 border=0 width=100%<?php ?>>
<tr>
 <td colspan=3 align=center><?php if ($_smarty_tpl->tpl_vars['index_plans']->value[$_smarty_tpl->getVariable('smarty')->value['section']['plans']['index']]['dsc']!=''){?><a href=?a=show_package_info&id=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['index_plans']->value[$_smarty_tpl->getVariable('smarty')->value['section']['plans']['index']]['id'], ENT_QUOTES, 'UTF-8', true);?>
><?php }?><b><?php echo htmlspecialchars(htmlspecialchars($_smarty_tpl->tpl_vars['index_plans']->value[$_smarty_tpl->getVariable('smarty')->value['section']['plans']['index']]['name'], ENT_QUOTES, 'UTF-8', true), ENT_QUOTES, 'UTF-8', true);?>
</b></a></td>
</tr><tr>
 <td class=inheader>Plan</td>
 <td class=inheader width=200>Spent Amount (<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency_sign']->value, ENT_QUOTES, 'UTF-8', true);?>
)</td>
 <td class=inheader width=100 nowrap><nobr><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['index_plans']->value[$_smarty_tpl->getVariable('smarty')->value['section']['plans']['index']]['period'], ENT_QUOTES, 'UTF-8', true);?>
 Profit (%)</nobr></td>
</tr>
<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['plan_options'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['plan_options']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['plan_options']['name'] = 'plan_options';
$_smarty_tpl->tpl_vars['smarty']->value['section']['plan_options']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['index_plans']->value[$_smarty_tpl->getVariable('smarty')->value['section']['plans']['index']]['plans']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
 <td class=item><?php echo htmlspecialchars(htmlspecialchars($_smarty_tpl->tpl_vars['index_plans']->value[$_smarty_tpl->getVariable('smarty')->value['section']['plans']['index']]['plans'][$_smarty_tpl->getVariable('smarty')->value['section']['plan_options']['index']]['name'], ENT_QUOTES, 'UTF-8', true), ENT_QUOTES, 'UTF-8', true);?>
</td>
 <td class=item align=right><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['index_plans']->value[$_smarty_tpl->getVariable('smarty')->value['section']['plans']['index']]['plans'][$_smarty_tpl->getVariable('smarty')->value['section']['plan_options']['index']]['deposit'], ENT_QUOTES, 'UTF-8', true);?>
</td>
 <td class=item align=right><?php echo htmlspecialchars(sprintf("%.2f",$_smarty_tpl->tpl_vars['index_plans']->value[$_smarty_tpl->getVariable('smarty')->value['section']['plans']['index']]['plans'][$_smarty_tpl->getVariable('smarty')->value['section']['plan_options']['index']]['percent']), ENT_QUOTES, 'UTF-8', true);?>
</td>
</tr>
<?php endfor; endif; ?>
<?php if ($_smarty_tpl->tpl_vars['settings']->value['enable_calculator']){?>
<tr>
 <td colspan=3 align=right><a href="javascript:openCalculator('<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['index_plans']->value[$_smarty_tpl->getVariable('smarty')->value['section']['plans']['index']]['id'], ENT_QUOTES, 'UTF-8', true);?>
')">Calculate your profit &gt;&gt;</a></td>
</tr>
<?php }?>
</table>

<?php if ($_smarty_tpl->tpl_vars['userinfo']->value['logged']){?>
<br>
<form method=post>
<input type=hidden name=a value=deposit>
<input type=submit value="Make deposit" class=sbmt>
<input type=hidden name=h_id value=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['index_plans']->value[$_smarty_tpl->getVariable('smarty')->value['section']['plans']['index']]['id'], ENT_QUOTES, 'UTF-8', true);?>
>
</form>
<br><br>
<?php }?>
<?php }?>
<?php endfor; endif; ?>
<?php }} ?>
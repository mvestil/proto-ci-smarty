<?php /* Smarty version Smarty-3.1.11, created on 2012-10-31 12:13:24
         compiled from ".\tmpl\info_box.tpl" */ ?>
<?php /*%%SmartyHeaderCode:21789509115e40d6d05-59470687%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2b93222201fbb0cea2a2993824691d14447c9cd4' => 
    array (
      0 => '.\\tmpl\\info_box.tpl',
      1 => 1344858947,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21789509115e40d6d05-59470687',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'settings' => 0,
    'currency_sign' => 0,
    'stat_last_deposit' => 0,
    'stat_last_withdrawal' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_509115e432bcf5_18662842',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_509115e432bcf5_18662842')) {function content_509115e432bcf5_18662842($_smarty_tpl) {?><!-- Image Table: Start -->
<table cellspacing=0 cellpadding=2 border=0 width=100%<?php ?>>
<tr>
 <th colspan=2><img src=images/q.gif width=1 height=3></th>
</tr>
<tr>
	<th colspan=2 class=title>Info</th>
</tr>
<?php if ($_smarty_tpl->tpl_vars['settings']->value['show_info_box_started']==1){?>
<tr>
	<td class=menutxt colspan=2><b>Started</b> &nbsp; &nbsp; &nbsp; &nbsp; <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value['site_start_month_str_generated'], ENT_QUOTES, 'UTF-8', true);?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value['site_start_day'], ENT_QUOTES, 'UTF-8', true);?>
, <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value['site_start_year'], ENT_QUOTES, 'UTF-8', true);?>
</td>
</tr>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['settings']->value['show_info_box_running_days']==1){?>
<tr>
	<td class=menutxt><b>Running days</b></td>
	<td class=menutxt align=right><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value['site_days_online_generated'], ENT_QUOTES, 'UTF-8', true);?>
</td>
</tr>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['settings']->value['show_info_box_total_accounts']){?>
<tr>
	<td class=menutxt><b>Total accounts</b></td>
	<td class=menutxt align=right><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value['info_box_total_accounts_generated'], ENT_QUOTES, 'UTF-8', true);?>
</td>
</tr>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['settings']->value['show_info_box_active_accounts']){?>
<tr>
	<td class=menutxt><b>Active accounts</b></td>
	<td class=menutxt align=right><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value['info_box_total_active_accounts_generated'], ENT_QUOTES, 'UTF-8', true);?>
</td>
</tr>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['settings']->value['show_info_box_vip_accounts']){?>
<tr>
	<td class=menutxt><b>VIP accounts</b></td>
	<td class=menutxt align=right><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value['info_box_total_vip_accounts_generated'], ENT_QUOTES, 'UTF-8', true);?>
</td>
</tr>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['settings']->value['show_info_box_deposit_funds']==1){?>
<tr>
	<td class=menutxt><b>Total deposited</b></td>
	<td class=menutxt align=right><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency_sign']->value, ENT_QUOTES, 'UTF-8', true);?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value['info_box_deposit_funds_generated'], ENT_QUOTES, 'UTF-8', true);?>
</td>
</tr>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['settings']->value['show_info_box_today_deposit_funds']==1){?>
<tr>
	<td class=menutxt><b>Today deposited</b></td>
	<td class=menutxt align=right><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency_sign']->value, ENT_QUOTES, 'UTF-8', true);?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value['info_box_today_deposit_funds_generated'], ENT_QUOTES, 'UTF-8', true);?>
</td>
</tr>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['settings']->value['show_info_box_total_withdraw']==1){?>
<tr>
	<td class=menutxt><b>Total withdraw</b></td>
	<td class=menutxt align=right><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency_sign']->value, ENT_QUOTES, 'UTF-8', true);?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value['info_box_withdraw_funds_generated'], ENT_QUOTES, 'UTF-8', true);?>
</td>
</tr>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['settings']->value['show_info_box_visitor_online']==1){?>
<tr>
	<td class=menutxt><b>Visitors online</b></td>
	<td class=menutxt align=right><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value['info_box_visitor_online_generated'], ENT_QUOTES, 'UTF-8', true);?>
</td>
</tr>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['settings']->value['show_info_box_members_online']==1){?>
<tr>
	<td class=menutxt><b>Members online</b></td>
	<td class=menutxt align=right><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value['show_info_box_members_online_generated'], ENT_QUOTES, 'UTF-8', true);?>
</td>
</tr>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['settings']->value['show_info_box_newest_member']==1){?>
<tr>
	<td class=menutxt><b>Newest Member</b></td>
	<td class=menutxt align=right><?php if ($_smarty_tpl->tpl_vars['settings']->value['show_info_box_newest_member_generated']){?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value['show_info_box_newest_member_generated'], ENT_QUOTES, 'UTF-8', true);?>
<?php }else{ ?>N/A<?php }?></td>
</tr>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['settings']->value['show_info_box_lastdeposit']){?>
	<?php if ($_smarty_tpl->tpl_vars['stat_last_deposit']->value){?>
        <tr>
	<td class=menutxt><b>Last deposit:</b></th>
	<td class=menutxt align=right><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency_sign']->value, ENT_QUOTES, 'UTF-8', true);?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['stat_last_deposit']->value['amount'], ENT_QUOTES, 'UTF-8', true);?>
 (<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['stat_last_deposit']->value['username'], ENT_QUOTES, 'UTF-8', true);?>
)</td>
	</tr>
	<?php }?>
<?php }?>
	
<?php if ($_smarty_tpl->tpl_vars['settings']->value['show_info_box_lastwithdrawal']){?>
	<?php if ($_smarty_tpl->tpl_vars['stat_last_withdrawal']->value){?>
        <tr>
	<td class=menutxt><b>Last withdraw:</b></td>
	<td class=menutxt align=right><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency_sign']->value, ENT_QUOTES, 'UTF-8', true);?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['stat_last_withdrawal']->value['amount'], ENT_QUOTES, 'UTF-8', true);?>
 (<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['stat_last_withdrawal']->value['username'], ENT_QUOTES, 'UTF-8', true);?>
)</td>
	</tr>
	<?php }?>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['settings']->value['show_info_box_last_update']==1){?>
<tr>
	<td class=menutxt colspan=2><b>Last update</b> &nbsp;<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value['show_info_box_last_update_generated'], ENT_QUOTES, 'UTF-8', true);?>
</td>
</tr>
<?php }?>


</table>
<br>
<?php }} ?>
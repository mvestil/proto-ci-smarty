<!-- Image Table: Start -->
<table cellspacing=0 cellpadding=2 border=0 width=100%>
<tr>
 <th colspan=2><img src=images/q.gif width=1 height=3></th>
</tr>
<tr>
	<th colspan=2 class=title>Info</th>
</tr>
{if $settings.show_info_box_started == 1}
<tr>
	<td class=menutxt colspan=2><b>Iniciado</b> &nbsp; &nbsp; &nbsp; &nbsp; {$settings.site_start_month_str_generated} {$settings.site_start_day}, {$settings.site_start_year}</td>
</tr>
{/if}
{if $settings.show_info_box_running_days == 1}
<tr>
	<td class=menutxt><b>Días</b></td>
	<td class=menutxt align=right>{$settings.site_days_online_generated}</td>
</tr>
{/if}
{if $settings.show_info_box_total_accounts}
<tr>
	<td class=menutxt><b>Total Miembros</b></td>
	<td class=menutxt align=right>{$settings.info_box_total_accounts_generated}</td>
</tr>
{/if}
{if $settings.show_info_box_active_accounts}
<tr>
	<td class=menutxt><b>Cuentas Activas</b></td>
	<td class=menutxt align=right>{$settings.info_box_total_active_accounts_generated}</td>
</tr>
{/if}
{if $settings.show_info_box_vip_accounts}
<tr>
	<td class=menutxt><b>Cuentas VIP</b></td>
	<td class=menutxt align=right>{$settings.info_box_total_vip_accounts_generated}</td>
</tr>
{/if}
{if $settings.show_info_box_deposit_funds == 1}
<tr>
	<td class=menutxt><b>Total Depositos</b></td>
	<td class=menutxt align=right>{$currency_sign} {$settings.info_box_deposit_funds_generated}</td>
</tr>
{/if}
{if $settings.show_info_box_today_deposit_funds == 1}
<tr>
	<td class=menutxt><b>Depositados Hoy</b></td>
	<td class=menutxt align=right>{$currency_sign} {$settings.info_box_today_deposit_funds_generated}</td>
</tr>
{/if}
{if $settings.show_info_box_total_withdraw == 1}
<tr>
	<td class=menutxt><b>Total Retiros</b></td>
	<td class=menutxt align=right>{$currency_sign} {$settings.info_box_withdraw_funds_generated}</td>
</tr>
{/if}
{if $settings.show_info_box_visitor_online == 1}
<tr>
	<td class=menutxt><b>Visitantes online</b></td>
	<td class=menutxt align=right>{$settings.info_box_visitor_online_generated}</td>
</tr>
{/if}
{if $settings.show_info_box_members_online == 1}
<tr>
	<td class=menutxt><b>Miembros online</b></td>
	<td class=menutxt align=right>{$settings.show_info_box_members_online_generated}</td>
</tr>
{/if}
{if $settings.show_info_box_newest_member == 1}
<tr>
	<td class=menutxt><b>Ultimo Miembro</b></td>
	<td class=menutxt align=right>{if $settings.show_info_box_newest_member_generated}{$settings.show_info_box_newest_member_generated}{else}N/A{/if}</td>
</tr>
{/if}

{if $settings.show_info_box_lastdeposit}
	{if $stat_last_deposit}
        <tr>
	<td class=menutxt><b>Ultimo Depósito:</b></th>
	<td class=menutxt align=right>{$currency_sign} {$stat_last_deposit.amount} ({$stat_last_deposit.username})</td>
	</tr>
	{/if}
{/if}
	
{if $settings.show_info_box_lastwithdrawal}
	{if $stat_last_withdrawal}
        <tr>
	<td class=menutxt><b>Ultimo Retiro:</b></td>
	<td class=menutxt align=right>{$currency_sign} {$stat_last_withdrawal.amount} ({$stat_last_withdrawal.username})</td>
	</tr>
	{/if}
{/if}

{if $settings.show_info_box_last_update == 1}
<tr>
	<td class=menutxt colspan=2><b>Actualización</b> &nbsp;{$settings.show_info_box_last_update_generated}</td>
</tr>
{/if}


</table>
<br>

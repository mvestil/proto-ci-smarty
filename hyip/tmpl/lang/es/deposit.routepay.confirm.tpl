{include file="header.tpl"}

{if $false_data != 1}
<h3>Por favor confirme su deposito:</h3><br><br>

<form name=spend method=post action="http://www.routepay.com/sci.asp">

su numero de cuenta de RoutePay <b>{$account}</b><br>
Cantidad ({$currency_sign}): <b>{$amount_format}</b><br>
{if $use_compound}
{if $compound_min_percents == $compound_max_percents && !$compound_percents}
<input type=hidden name=rp_custom3 value="{$compound_min_percents}">
{else}
<table cellspacing=0 cellpadding=2 border=0>
<tr><td nowrap width=1%>Para agravar por ciento: </td>
  {if $compound_percents}
<td><select name='rp_custom3' class=inpts>
{section name=p loop=$compound_percents}<option value="{$compound_percents[p].percent}">{$compound_percents[p].percent}%</option>{/section}
</select></td>
  {else}
<td width=99%><input type=text name='rp_custom3' value="{$compound_min_percents}" class=inpts size=5></td></tr>
<tr><td nowrap colspan=2>(Usted puede configurar cualquier ciento entre <b>{$compound_min_percents}%</b> y <b>{$compound_max_percents}%</b>)</td>
  {/if}
</tr>
<!--tr><td colspan=2><small>Ejemplo: {$compounding}% de sus ingresos se acumulan en dep�sito de.</small></td></tr-->
</table>
{/if}
{else}
<input type=hidden name=compound value="0">
{/if}

<br>
<INPUT type=hidden name=rp_acc_merchant value="{$settings.def_payee_account_routepay}" >
<INPUT type=hidden name=rp_amount value="{$amount}">
<INPUT type=hidden name=rp_currency value="USD">
<INPUT type=hidden name=rp_currency value="USD">
<INPUT type=hidden value="Deposit to {$settings.site_name} user {$userinfo.username}" name=rp_memo>
<INPUT type=hidden name=rp_ipn_url value="{$settings.site_url}/index.php">
<INPUT type=hidden name=rp_payment_url value="{$settings.site_url}/index.php?a=return_egold&process=yes">
<INPUT type=hidden name=rp_nopayment_url value="{$settings.site_url}/index.php?a=return_egold&process=no">
<input type=hidden name=rp_custom2 value={$pid}>
<input type=hidden name=rp_custom1 value="checkpayment_routepay">

<br><input type=submit value="Proceso" class=sbmt> �
<input type=button class=sbmt value="Cancel" onclick="document.location='?a=account'">
</form>
{/if}
{include file="footer.tpl"}
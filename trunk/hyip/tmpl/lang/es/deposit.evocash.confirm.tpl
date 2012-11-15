{include file="header.tpl"}

{if $false_data != 1}
<h3>Por favor confirme su deposito:</h3><br><br>

<form name=spend method=post action="https://www.evocash.com/evoswift/index.cfm">
  Su numero de cuenta de Evocash <b>{$account}</b><br>
Cantidad ($US): <b>{$amount_format}</b><br>

{if $use_compound}
{if $compound_min_percents == $compound_max_percents && !$compound_percents}
<input type=hidden name=compound value="{$compound_min_percents}">
{else}
<table cellspacing=0 cellpadding=2 border=0>
<tr><td nowrap width=1%>Para agravar por ciento: </td>
  {if $compound_percents}
<td><select name='compound' class=inpts>
{section name=p loop=$compound_percents}<option value="{$compound_percents[p].percent}">{$compound_percents[p].percent}%</option>{/section}
</select></td>
  {else}
<td width=99%><input type=text name='compound' value="{$compound_min_percents}" class=inpts size=5></td></tr>
<tr><td nowrap colspan=2>(Usted puede configurar cualquier ciento entre <b>{$compound_min_percents}%</b> y <b>{$compound_max_percents}%</b>)</td>
  {/if}
</tr>
<!--tr><td colspan=2><small>Ejemplo: {$compounding}% de sus ingresos se acumulan en depósito de.</small></td></tr-->
</table>
{/if}
{else}
<input type=hidden name=compound value="{$compounding}">
{/if}

<br>

<input type=hidden name=userid value="{$userinfo.id}">
<input type=hidden name=hyipid value={$h_id}>
<input type=hidden name=a value=checkpayment>
<INPUT type=hidden name=amount value="{$amount}">
<INPUT type=hidden name=receivingaccountid value="{$settings.def_payee_account_evocash}" >
<INPUT type=hidden name=merchant_check_url value="{$settings.site_url}/evocash_processing.php">
<INPUT type=hidden name=pay_yes_url value="{$settings.site_url}/index.php?a=return_egold&process=yes">
<INPUT type=hidden name=pay_yes_url_method value=POST>
<INPUT type=hidden name=pay_no_url  value="{$settings.site_url}/index.php?a=return_egold&process=no">
<INPUT type=hidden name=pay_no_url_method value=POST>
<INPUT type=hidden name=baggage_fields value="Usuario hyipid compuesto">
<INPUT type=hidden value="Deposito a {$settings.site_name} Usuario {$userinfo.username}" name=memo>
<br><input type=submit value="Proceso" class=sbmt>  
<input type=button class=sbmt value="Cancel" onclick="document.location='?a=account'">
</form>
{/if}
{include file="footer.tpl"}

{include file="header.tpl"}

{if $false_data != 1}
<h3>confirme su deposito:</h3><br><br>

<form name=spend method=post action="https://intgold.com/cgi-bin/webshoppingcart.cgi">
  Su numero de cuenta de INTGold <b>{$account}</b><br>
Cantidad ($US): <b>{$amount_format}</b><br>
{if $use_compound}
{if $compound_min_percents == $compound_max_percents && !$compound_percents}
<input type=hidden name=CUSTOM4 value="{$compound_min_percents}">
{else}
<table cellspacing=0 cellpadding=2 border=0>
<tr><td nowrap width=1%>Para agravar por ciento </td>
  {if $compound_percents}
<td><select name='CUSTOM4' class=inpts>
{section name=p loop=$compound_percents}<option value="{$compound_percents[p].percent}">{$compound_percents[p].percent}%</option>{/section}
</select></td>
  {else}
<td width=99%><input type=text name='CUSTOM4' value="{$compound_min_percents}" class=inpts size=5></td></tr>
<tr><td nowrap colspan=2>(Usted puede configurar cualquier ciento entre <b>{$compound_min_percents}%</b> y <b>{$compound_max_percents}%</b>)</td>
  {/if}
</tr>
<!--tr><td colspan=2><small>Ejemplo: {$compounding}% de sus ingresos se acumulan en depósito de.</small></td></tr-->
</table>
{/if}
{else}
<input type=hidden name=CUSTOM4 value="{$compounding}">
{/if}
<br>

<input type="hidden" name="cmd" value="_xclick">
<input type=hidden name=CUSTOM1 value="{$userinfo.id}">
<input type=hidden name=CUSTOM2 value={$h_id}>
<input type=hidden name=CUSTOM3 value=checkpayment>
<INPUT type=hidden name=AMOUNT value="{$amount}">
<INPUT type=hidden name=SELLERACCOUNTID value="{$settings.def_payee_account_intgold}" >
<input type="hidden" name="POSTURLNUM" value="{$settings.intgold_posturl}">
<INPUT type=hidden name=RETURNURL value="{$settings.site_url}/index.php?a=return_egold&process=yes">
<INPUT type=hidden name=CANCEL_RETURN value="{$settings.site_url}/index.php?a=return_egold&process=no">
<input type="hidden" name="METHOD" value="POST">
<input type="hidden" name="RETURNPAGE" value="CGI">
<input type="hidden" name="ITEM_NUMBER" value="{$userinfo.id}">

<INPUT type=hidden value="Deposito a {$settings.site_name} User {$userinfo.username}" name=ITEM_NAME>
<br><input type=submit value="Proceso" class=sbmt>  
<input type=button class=sbmt value="Cancel" onclick="document.location='?a=account'">
</form>
{/if}
{include file="footer.tpl"}

{include file="header.tpl"}

{if $false_data != 1}
<h3>Por favor confirme deposito:</h3><br><br>

<form name=spend method=post action="https://www.evowallet.com/sci.php">

<input type=hidden name=a value='checkpayment_evowallet'>
<input type=hidden name=pid value={$pid}>
Su numero de cuenta de EvoWallet <b>{$account}</b><br>
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
</table>
{/if}
{else}
<input type=hidden name=compound value="0">
{/if}
  
<INPUT type=hidden name=PAYMENT_AMOUNT value="{$amount}">
<INPUT type=hidden name=PAYEE_ACCOUNT value="{$settings.def_payee_account_evowallet}">
<INPUT type=hidden name=WALLET value="{$settings.md5altphrase_evowallet_store}"> 
<INPUT type=hidden name=CURRENCY value="USD">
<INPUT type=hidden name=STATUS_URL value="{$settings.site_url}/index.php">
<INPUT type=hidden name=PAYMENT_URL value="{$settings.site_url}/index.php?a=return&process=yes">
<INPUT type=hidden name=NOPAYMENT_URL  value="{$settings.site_url}/index.php?a=return&process=no">
<INPUT type=hidden name=BAGGAGE_FIELDS value="a,pid{if $use_compound},compound{/if}">
<INPUT type=hidden name=SUGGESTED_MEMO value="Deposito a {$settings.site_name} Usuario {$userinfo.username}">
 
<br><input type=submit name=i_submit value="Proceso" class=sbmt>  
<input type=button class=sbmt value="Cancel" onclick="document.location='?a=account'">
</form>
{/if}
{include file="footer.tpl"}


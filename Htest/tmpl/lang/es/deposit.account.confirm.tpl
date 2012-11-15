{include file="header.tpl"}

{if $ok == 1}
<h3>Por favor confirme su deposito:</h3><br><br>

<form name=spend method=post>
  Cantidad ({$currency_sign}): <b>{$amount}</b> del {$ps}<br>
  deposito en su cuenta<br>
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
<!--tr><td colspan=2><small>Ejemplo: {$compounding}% de sus ingresos se acumulan en depósito.</small></td></tr-->
</table>
{/if}
{/if}

<input type=hidden name=a value=deposit>
<input type=hidden name=action value=confirm>
<input type=hidden name=type value={$type}>
<input type=hidden name=h_id value={$h_id}>
<INPUT type=hidden name=amount value="{$famount}">
<br><input type=submit value="Process" class=sbmt>  
<input type=button class=sbmt value="Cancel" onclick="document.location='?a=deposit'">
</form>

{else}
{if $max_deposit_less == 1}Lo sentimos, el depósito máxima es {$max_deposit_format}.<br>{/if}
{if $wrong_paln == 1} El Plan no existe. {/if} 
{if $not_enough_funds == 1} Dispone de fondos suficientes para completar la operación.<br>{/if}
{if $less_than_min == 1}La cantidad mínima para gastar '{$plan_name}' es {$currency_sign}{$min_amount}.<br>{/if}
{if $on_hold == 1}Lo sentimos, esta cantidad esta en espera ahora.<br>{/if}
<br>
Click <a href="?a=deposit">aqui</a> y vuelve a intentarlo.
{/if}

{include file="footer.tpl"}

{include file="header.tpl"}

{if $ok == 1}
<h3>Por favor confirme su deposito:</h3><br><br>

{$wire_txt}<br><br>

Cantidad ($US): <b>{$amount}</b><br>
<form name=spend method=post>
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
{/if}
<br>

<input type=hidden name=a value=deposit>
<input type=hidden name=action value=confirm>
<input type=hidden name=type value=wire>
<!--input type=hidden name=compound value="{$compounding}"-->
<input type=hidden name=h_id value={$h_id}>
<INPUT type=hidden name=amount value="{$famount}">
<table cellspacing=0 cellpadding=2 border=0>
<tr>
 <td colspan=2><b>Información Personal:</b></td>
</tr><tr>
 <td>Nombre:</td>
 <td><input type=text name=pname value="{$userinfo.name}" class=inpts></td>
</tr><tr>
 <td>Dirección:</td>
 <td><input type=text name=paddress value="" class=inpts></td>
</tr><tr>
 <td>Codigo postal:</td>
 <td><input type=text name=pzip value="" class=inpts></td>
</tr><tr>
 <td>Ciudad:</td>
 <td><input type=text name=pcity value="" class=inpts></td>
</tr><tr>
 <td>Estado:</td>
 <td><input type=text name=pstate value="" class=inpts></td>
</tr><tr>
 <td>País:</td>
 <td><input type=text name=pcountry value="" class=inpts></td>
</tr><tr>
 <td colspan=2><br><b>Información del Banco</b></td>
</tr><tr>
 <td>Nombre del Banco:</td>
 <td><input type=text name=bname value="" class=inpts></td>
</tr><tr>
 <td>Dirección del Banco:</td>
 <td><input type=text name=baddress value="" class=inpts></td>
</tr><tr>
 <td>Codigo postal del Banco:</td>
 <td><input type=text name=bzip value="" class=inpts></td>
</tr><tr>
 <td>Ciudad del Banco:</td>
 <td><input type=text name=bcity value="" class=inpts></td>
</tr><tr>
 <td>Estado del Banco:</td>
 <td><input type=text name=bstate value="" class=inpts></td>
</tr><tr>
 <td>País del Banco:</td>
 <td><input type=text name=bcountry value="" class=inpts></td>
</tr><tr>
 <td>Número de la cuenta bancaria:</td>
 <td><input type=text name=baccount value="" class=inpts></td>
</tr><tr>
 <td>IBAN cuenta:</td>
 <td><input type=text name=biban value="" class=inpts></td>
</tr><tr>
 <td>SWIFT o BIC cuenta:</td>
 <td><input type=text name=bswift value="" class=inpts></td>
</tr>
</table>


<br><input type=submit value="Save" class=sbmt>  
<input type=button class=sbmt value="Cancel" onclick="document.location='?a=deposit'">
</form>

{else}

{if $max_deposit_less == 1}
Lo sentimos, el depósito máximo es de{$max_deposit_format}.<br>
{/if} {if $wrong_paln == 1} El Plan no existe. {/if} {if $not_enough_funds 
== 1} Dispone de fondos suficientes para completar la operación.<br>
{/if}
{if $less_than_min == 1}
Min cantidad para gastar '{$plan_name}' is US${$min_amount}.<br>
{/if}
<br>
Click <a href="?a=deposit">aqui</a> y vuelve a intentarlo.


{/if}

{include file="footer.tpl"}

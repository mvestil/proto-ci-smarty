{include file="header.tpl"}

<h3>Sus Referidos:</h3><br>
{if $upline.email != ""}
Su línea ascendente es <a href=mailto:{$upline.email}>{$upline.name}</a><br><br>
{/if}
<br>
<table width=300 cellspacing=1 cellpadding=1>
<tr>
  <td class=item>Referidos:</td>
  <td class=item>{$total_ref}</td>
</tr><tr>
  <td class=item>Referidos Activos:</td>
  <td class=item>{$active_ref}</td>
</tr><tr>
  <td class=item>Comisión total de Referidos:</td>
  <td class=item>{$currency_sign}{$commissions}</td>
</tr>
</table>
<br>
{if $settings.show_refstat}

<h3>Referidos inscriptos/Suscriptos</h3><br>
<table cellspacing=0 cellpadding=1 border=0>
<form method=post name=opts>
<input type=hidden name=a value=referals>
 <td align=right>
Desde: </td>
<td>
<select name=month_from class=inpts>
{section name=month_from loop=$month}
<option value={$smarty.section.month_from.index+1} {if $smarty.section.month_from.index+1 == $frm.month_from}selected{/if}>{$month[month_from]}
{/section}
</select>  
<select name=day_from class=inpts>
{section name=day_from loop=$day}
<option value={$smarty.section.day_from.index+1} {if $smarty.section.day_from.index+1 == $frm.day_from}selected{/if}>{$day[day_from]}
{/section}
</select>  
<select name=year_from class=inpts>
{section name=year_from loop=$year}
<option value={$year[year_from]} {if $year[year_from] == $frm.year_from}selected{/if}>{$year[year_from]}
{/section}
</select>
</td>
 <td rowspan=2>
	  <input type=submit value="Ir" class=sbmt>
 </td>
</tr>
<tr><td align=right>Hasta:</td><td> <select name=month_to class=inpts>
{section name=month_to loop=$month}
<option value={$smarty.section.month_to.index+1} {if $smarty.section.month_to.index+1 == $frm.month_to}selected{/if}>{$month[month_to]}
{/section}
</select>  
<select name=day_to class=inpts>
{section name=day_to loop=$day}
<option value={$smarty.section.day_to.index+1} {if $smarty.section.day_to.index+1 == $frm.day_to}selected{/if}>{$day[day_to]}
{/section}
</select>  

<select name=year_to class=inpts>
{section name=year_to loop=$year}
<option value={$year[year_to]} {if $year[year_to] == $frm.year_to}selected{/if}>{$year[year_to]}
{/section}
</select>

 </td>
</tr></form></table>


<table width=300 celspacing=1 cellpadding=1 border=0>
<tr>
 <td class=inheader>Fecha</td>
 <td class=inheader>Inscripto</td>
 <td class=inheader>Suscripto</td>
</tr>
{if $show_refstat}
{section name=s loop=$refstat}
<tr>
 <td class=item align=center><b>{$refstat[s].date}</b></td>
 <td class=item align=right>{$refstat[s].income}</td>
 <td class=item align=right>{$refstat[s].reg}</td>
</tr>
{/section}
{else}
<tr>
 <td class=item align=center colspan=3>No hay estadísticas encontradas para este período.</td>
</tr>
{/if}
</table><br>
{/if}

{if $settings.show_referals}
{if $show_referals}
<h3>Sus Referidos:</h3>
<table cellspacing=1 cellpadding=1 border=0>
<tr>
 <td class=inheader>Usuario</td>
 <td class=inheader>E-mail</td>
 <td class=inheader>Estado</td>
</tr>
{section name=s loop=$referals}
<tr>
 <td class=item><b>{$referals[s].username}</b></td>
 <td class=item><a href=mailto:{$referals[s].email}>{$referals[s].email}</a></td>
 <td class=item>{if $referals[s].q_deposits > 0}Depositado{else}No hay un deposito activo todavia{/if}</td>
</tr>
{if $referals[s].ref_stats}
<tr>
 <td colspan=3>
  Referidos de Usuarios:
  {section name=l loop=$referals[s].ref_stats}
   <nobr>{$referals[s].ref_stats[l].cnt_active} activa de {$referals[s].ref_stats[l].cnt} en el nivel de {$referals[s].ref_stats[l].level}{if !$smarty.section.l.last};{/if}</nobr>
  {/section}
 </td>
</tr>
{/if}
{if $referals[s].came_from}
<tr><td colspan=3>
<a href="{$referals[s].came_from}" target=_blank>[Desde]</a>
</td></tr>
{/if}
{/section}
<tr>
 <td colspan=3>&nbsp;</td>
</tr>
<tr>
 <td colspan=3><b>2-10 nivel de Referidos:</b> {$cnt_other}</td>
</tr>
<tr>
 <td colspan=3><b>2-10 nivel activo de Referidos:</b> {$cnt_other_active}</td>
</tr>
</table>
{/if}
{/if}


{include file="footer.tpl"}

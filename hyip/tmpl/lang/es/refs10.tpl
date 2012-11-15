{include file="header.tpl"}

<h3>Top 20 de Referidos/h3>

<table cellspacing=1 cellpadding=2 border=0 width=100%>
<tr>
    <td class=inheader>#</td>
    <td class=inheader>Usuarui</td>
    <td class=inheader width=200><b>Activo</b></td>
    <td class=inheader width=170><b>Total</b></td>
</tr>
{if $stats}
{section name=s loop=$stats}
<tr>
 <td align=center><b>{$smarty.section.s.index+1}</b></td>
 <td><b>{$stats[s].username}</b></td>
 <td align=right><b>{$stats[s].active_col}</b></td>
 <td align=right><b>{$stats[s].col}</b></td>
</tr>
{/section}
{else}
<tr>
 <td colspan=4 align=center>No encontro Referidos</td>
</tr>
{/if}
</table>
<br><br>Último puesto {$start_date}
{include file="footer.tpl"}

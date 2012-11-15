{include file="header.tpl"}

<h3>Los ultimos 10 inversores</h3><br>

<table cellspacing=1 cellpadding=2 border=0 width=100%>
<tr>
 <td class=inheader>Usuario</td>
 <td class=inheader width=200>Fecha de Reg.</td>
 <td class=inheader width=170>Deposito</td>
</tr>
{if $top}
{section name=s loop=$top}
<tr>
 <td><b>{$top[s].username}</b></td>
 <td><b>{$top[s].dd}</b></td>
 <td align=right><b>{$currency_sign}{$top[s].balance}</b></td>
</tr>
{/section}
{else}
<tr>
 <td colspan=3 align=center>Ningún inversor encontrado</td>
</tr>
{/if}
</table>

{include file="footer.tpl"}

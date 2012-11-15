{include file="header.tpl"}

{literal}
<script language=javascript>
function go(p)
{
  document.opts.page.value=p;
  document.opts.submit();
}
</script>
{/literal}

<form method=post name=opts>
<input type=hidden name=a value=paidout>
<input type=hidden name=page value={$current_page}>
<table cellspacing=0 cellpadding=0 border=0 width=100%>
<tr>
 <td>
	<h3>Pagados:</h3>
 </td>
 <td align=right>
<select name=month class=inpts>
{section name=month loop=$month}
<option value={$smarty.section.month.index+1} {if $smarty.section.month.index+1 == $frm.month}selected{/if}>{$month[month]}
{/section}
</select>  
<select name=year class=inpts>
{section name=year loop=$year}
<option value={$year[year]} {if $year[year] == $frm.year}selected{/if}>{$year[year]}
{/section}
</select>
 </td>
 <td width=1% nowrap>
	  <input type=submit value="Go" class=sbmt>
 </td>
</tr></table>
</form>
<br>

<table cellspacing=1 cellpadding=2 border=0 width=100%>
<tr>
 <td class=inheader>Usuario</td>
 <td class=inheader width=200>Fecha</td>
 <td class=inheader width=170>Cantidad</td>
</tr>
{if $stats}
{section name=s loop=$stats}
<tr>
 <td><b>{$stats[s].username}</b></td>
 <td><b>{$stats[s].dd}</b></td>
 <td align=right><b>{$currency_sign}{$stats[s].actual_amount}</b></td>
</tr>
{/section}
{else}
<tr>
 <td colspan=3 align=center>No se han encontrado transacciones</td>
</tr>
{/if}
{if $stats}
<tr>
 <td colspan=2><b>TOTAL</b></td>
 <td align=right><b>{$currency_sign}{$total_withdraw}</b></td>
</tr>
{/if}
</table>

{if $colpages > 1}
<center>
{if $prev_page > 0}
 <a href="javascript:go('{$prev_page}')"><<</a>
{/if}
{section name=p loop=$pages}
{if $pages[p].current == 1}
{$pages[p].page}
{else}
 <a href="javascript:go('{$pages[p].page}')">{$pages[p].page}</a>
{/if}
{/section}
{if $next_page > 0}
 <a href="javascript:go('{$next_page}')">>></a>
{/if}
</center>
{/if}

{include file="footer.tpl"}

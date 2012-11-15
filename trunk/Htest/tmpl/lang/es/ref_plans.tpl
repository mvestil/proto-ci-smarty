{include file="header.tpl"}


{if $settings.use_referal_program == 1 && $ref_plans}
Utilice nuestro programa de referencia y ganar hasta {$percent}% de los depósitos de referencia!<br><br>
<b>Nuestros bonos de referencia de primer nivel:</b>
<table cellspacing=0 cellpadding=2 border=0 width=100%>
<tr>
 <td class=inheader>Nombre</td>
 <td class=inheader>De</td>
 <td class=inheader>Para</td>
 <td class=inheader>Comisión (%)</td>
</tr>
{section name=r loop=$ref_plans}
<tr>
 <td class=item>{$ref_plans[r].name}</td>
 <td class=item align=center>{$ref_plans[r].from_value}</td>
 <td class=item align=center>{if $ref_plans[r].to_value == 0}Ilimitado{else}{$ref_plans[r].to_value}{/if}</td>
 <td class=item align=right>{$ref_plans[r].percent}</td>
</tr>
{/section}
</table>
<br><br>
{if $ref_levels}
Nuestros otros niveles de primas de la remisión (no en función del número de referencias):<br>
{section name=rl loop=$ref_levels}
Level {$ref_levels[rl].level}: <b>{$ref_levels[rl].percent}%</b><br> 
{/section}
{/if}
{/if}



{include file="footer.tpl"}

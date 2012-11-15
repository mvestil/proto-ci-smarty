{include file="header.tpl"}

<h3>Bienvenidos a RedControl.com.ar  Inversiones.</h3>
<p>Invertir en los mercados financieros requiere de un&nbsp; sacrificio enorme, traducido en poseer tiempo  para una exclusiva dedicaci&oacute;n e el mercado de divisas. Usted no necesita ese  esfuerzo, para ello, ha nacido RedControl.com.ar Inversiones, que ser&aacute; la mejor opci&oacute;n  para lucrar en la actividad burs&aacute;til. Contamos con expertos&nbsp; de experiencia, y suficientes&nbsp; conocimientos para administrar y dinamizar  con seguridad sus inversiones. </p>
<p>El  capital m&aacute;s preciado por nosotros son los inversores, grandes y peque&ntilde;os, m&aacute;s  a&uacute;n cuando se obtiene y se invierte con el dinero de las personas, que requiere  de un cauteloso tratamiento para as&iacute; obtener bajo las condiciones de riesgo del  mercado, los beneficios que todos ellos est&aacute;n esperando por medio nuestras  operaciones comerciales.</p>
<p>De  ustedes depende nuestro &eacute;xito, de nosotros depende su bienestar. Juntos, todo  es posible.</p>
<p>Bienvenidos&iexcl;&iexcl;&iexcl;.</p>
{include file="index.plans.tpl"}
<br><br>
Todos los pagos son realizados en su cuenta después de 7 días de inversión. Inversión mínima de $20 y como máximo $10.000. No se aceptan más de una inversión por cuenta. Todas las transacciones se manejan a través de Liberty Reserve.
<br><br>
{if $settings.use_referal_program == 1 && $ref_plans}
Utilice nuestro programa de referencia y ganar hasta el  {$percent}% de los depositos de sus referidos!<br>
<br>
<b>Nuestros niveles de Bonos:</b>
<table cellspacing=0 cellpadding=2 border=0 width=100%>
<tr>
 <td class=inheader>Nombre</td>
 <td class=inheader>Desde</td>
 <td class=inheader>A</td>
 <td class=inheader>Comisión (%)</td>
</tr>
{section name=r loop=$ref_plans}
<tr>
 <td class=item>{$ref_plans[r].name}</td>
 <td class=item align=center>{$ref_plans[r].from_value}</td>
 <td class=item align=center>{if $ref_plans[r].to_value == 0}a Ilimitado{else}{$ref_plans[r].to_value}{/if}</td>
 <td class=item align=right>{$ref_plans[r].percent}</td>
</tr>
{/section}
</table>
<br><br>
{if $ref_levels}
Otros niveles de bonos (No depende del numero de referidos):<br>
{section name=rl loop=$ref_levels}
Level {$ref_levels[rl].level}: <b>{$ref_levels[rl].percent}%</b><br> 
{/section}
{/if}
{/if}
{include file="footer.tpl"}
{include file="header.tpl"}

{if $exchanged}

<h3>Exchange se ha completado.</h3>
<br><br>
<a href="?a=exchange">Volver al centro de Exchange.</a>

{else}

<h3>Confirmacion de Exchange:</h3><br><br>
{if $error} {if $error == 'no_from'}No "hay" moneda especificada.{/if}
{if $error == 'no_to'}No "a la" moneda especificada.{/if}
{if $error == 'no_amount'}No "hay" cantidad especificada.{/if}
{if $error == 'to_big_amount'}Dispone de fondos suficientes para el intercambio.{/if}
{if $error == 'exchange_forbidden'}El cambio de monedas especificadas está prohibido por el administrador.{/if}
{if $error == 'on_hold'}Lo sentimos, esta cantidad esta en espera ahora.{/if}
{if $error == 'to_small_amount'}La cantidad que usted ha introducido para el intercambio es demasiado pequeño. Por favor, introduzca la cantidad que
se pueden cambiar por lo menos {$currency_sign}0.01.{/if} {else} 
<form method=post name="exchange_form">
  <input type="hidden" name="a" value="exchange">
  <input type="hidden" name="acción" value="exchange">
  <input type="hidden" name="desde" value="{$from}">
  <input type="hidden" name="para" value="{$to}">
  <input type="hidden" name="cantidad" value="{$amount}">
  <table cellspacing=0 cellpadding=2 border=0>
  <tr><td>Yusted está tratando de exchange {$currency_sign}{$amount} {$from_name} para {$currency_sign}{$exchange_amount} {$to_name}.</td></tr>
  <tr><td><br><input type=submit value="Confirmar" class=sbmt></td></tr>
  </table>
  </form>
  {/if}

{/if}
{include file="footer.tpl"}

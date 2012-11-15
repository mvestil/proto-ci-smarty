{include file="header.tpl"}

<h3>Su cuenta:</h3><br>
{if $settings.use_transaction_code ==1 && $userinfo.transaction_code == ''} <b>Nota: actualmente no ha especificado un código de transacción. El código de transacción refuerza su seguridad en nuestro sistema. El código es necesario para retirar fondos de su cuenta{if $settings.internal_transfer_enabled} 
y para la transferencia interna a otra cuenta de usuario{/if}. <a href=?a=edit_account>Click 
aquí</a> para especificar un código de transacción .</b> <br>
<br>
{/if}

<table cellspacing=0 cellpadding=2 border=0>
<tr>
 <td>Usuario:</td>
 <td>{$userinfo.username}</td>
</tr>
<tr>
  <td>Link:</td>
  <td><a href="{$settings.site_url}/?ref={$userinfo.username}">{$settings.site_url}/?ref={$userinfo.username}</a></td>
</tr>
<tr>
 <td>Registrado el día:</td>
 <td>{$userinfo.create_account_date}</td>
</tr><tr>
 <td>Ultimo acceso:</td>
 <td>{$last_access} </td>
</tr><tr>
 <td>&nbsp;</td>
</tr><tr>
 <td valign=top>Balance:</td>
 <td>{$currency_sign}<b>{$ab_formated.total}</b><br>
 <small>
{section name=p loop=$ps}
   {if $ps[p].balance > 0}{$currency_sign}{$ps[p].balance} of {$ps[p].name}<br>{/if}
{/section}</tr><tr>
 <td>Total ganado:</td>
 <td>{$currency_sign}<b>{$ab_formated.earning}</b></td>
</tr><tr>
 <td>Total a retirar:</td>
 <td>{$currency_sign}<b>{$ab_formated.withdraw_pending}</b></td>
</tr><tr>
 <td>Total retirado:</td>
 <td>{$currency_sign}<b>{$ab_formated.withdrawal}</b></td>
</tr><tr>
 <td>Depositado:</td>
 <td>{$currency_sign}<b>{$ab_formated.active_deposit}</b></td>
</tr><tr>
 <td>&nbsp;</td>
</tr>
{if $last_deposit}
<tr>
 <td>Ultimo deposito:</td>
 <td>{$currency_sign}<b>{$last_deposit}</b>   <small>{$last_deposit_date}</small></td>
</tr>
{/if}
{if $ab_formated.deposit != 0}
<tr>
 <td>Total Deposito:</td>
 <td>{$currency_sign}<b>{$ab_formated.deposit}</b></td>
</tr>
{/if}
{if $last_withdrawal}
<tr>
 <td>Ultimo Retiro:</td>
 <td>{$currency_sign}<b>{$last_withdrawal}</b>   <small>{$last_withdrawal_date}</small></td>
</tr>
{/if}
{if $ab_formated.withdrawal > 0}
<tr>
    <td>Total Retirado:</td>
 <td>{$currency_sign}<b>{$ab_formated.withdrawal}</b></td>
</tr>
{/if}
<tr>
 <td>&nbsp;</td>
</tr></table>

{section name=p loop=$ps}
  {if $ps[p].pending_col > 0}{$ps[p].pending_col} {$ps[p].name} deposit{if $ps[p].pending_col > 1}s{/if} of {$currency_sign}{$ps[p].pending_amount} total pending<br>{/if}
{/section}

<br><br>
{if $wires} {$wires} Wire Transfer(s) pending.<br>
{/if}
<br>

{include file="footer.tpl"}

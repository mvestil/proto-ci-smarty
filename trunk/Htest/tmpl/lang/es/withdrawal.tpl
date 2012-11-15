{include file="header.tpl"}

<h3>Solicitar retiro:</h3><br>

{if $fatal}

{if $fatal == 'one_per_month'}
Usted puede retirar una vez al mes solamente.
{/if}

{if $fatal == 'withdrawal_percent_reached'}
Limite total de retirados alcanzados. por el momento no se puede retirar.
{/if}

{else}

{if $say eq 'on_hold'}
Lo sentimos, cantidad solicitada en espera.<br><br>
{/if}
{if $say eq 'zero'}
Lo sentimos, no puedes pedir una retiro menor a {$currency_sign}0.00 <br><br>
{/if}
{if $say eq 'less_min'}
Lo sentimos, usted puede solicitar no menos de {$currency_sign}{$settings.min_withdrawal_amount}<br><br>
{/if}
{if $say eq 'greater_max'}
Sorry, you can request not greater than {$currency_sign}{$settings.max_withdrawal_amount}<br><br>
{/if}
{if $say eq 'daily_limit'}
Lo sentimos, se ha superado el límite diario<br><br>
{/if}
{if $say eq 'processed'}
{if $batch eq ''}
Solicitud de Retiro guardados.<br><br>
{else} Retiros procesados, batch_id: {$batch}<br>
<br>
{/if}
{/if}
{if $say eq 'not_enought'}
Lo sentimos, han solicitado la cantidad mayor que la de su saldo.<br><br>
{/if}
{if $say eq 'invalid_transaction_code'}
Ha introducido un código de transacción no válido.<br><br>
{/if}
{if $say eq 'no_deposits'}
Usted no ha hecho ningún depósito todavía. La función de espera estará disponible después de un depósito.
<br><br>
{/if}
{if $say eq 'no_active_deposits'}
Usted debe tener depósitos activos a retirarse.
{/if}


{if $preview}

<form method=post>
<input type=hidden name=a value=withdraw>
<input type=hidden name=action value=withdraw>
<input type=hidden name=amount value={$amount}>
<input type=hidden name=ec value={$ec}>
<input type=hidden name=comment value="{$comment|escape:html}">

<table cellspacing=0 cellpadding=2 border=0>
<tr>
 <td colspan=2>You are withdrawing <b>{$currency_sign}{$amount}</b> of {$currency}. 
{if $settings.withdrawal_fee > 0 || $settings.withdrawal_fee_min > 0} Our fee is 
{if $settings.withdrawal_fee > 0}<b>{$settings.withdrawal_fee}%</b>{/if}
{if $settings.withdrawal_fee > 0 && $settings.withdrawal_fee_min > 0} or {/if}
{if $settings.withdrawal_fee_min > 0} <b>{$currency_sign}{$settings.withdrawal_fee_min}</b>{if $settings.withdrawal_fee > 0} as a minimum{/if}{/if}
.
{else}
No tenemos ninguna comisión por esta operación.
{/if}
</td>
</tr>
<tr>
 <td colspan=2>En realidad, usted va a adquirir el total de <b>{$currency_sign}{$to_withdraw}</b> en su {$currency} cuenta {if $account}{$account}{/if}.</td>
</tr>
{if $comment}
<tr>
 <td colspan=2>Sus comentarios {$comment|escape:html}</td>
</tr>
{/if}
{if $settings.use_transaction_code && $userinfo.transaction_code}
<tr>
 <td colspna=2>&nbsp;</td>
</tr>
<tr>
 <td width=1% nowrap>Código de transacción:</td>
 <td width=99%><input type="password" name="transaction_code" class=inpts size=15></td>
</tr>
{/if}
<tr>
 <td><br><input type=submit value="Confirm" class=sbmt></td>
</tr></table>
</form>


{else}


<form method=post>
<input type=hidden name=a value=withdraw>
<input type=hidden name=action value=preview>

<table cellspacing=0 cellpadding=2 border=0>
<tr>
 <td>Balance:</td>
 <td>{$currency_sign}<b>{$ab_formated.total}</b></td>
</tr>
<tr><td>&nbsp;</td>
 <td> <small>
{section name=p loop=$ps}
   {if $ps[p].balance > 0}{$currency_sign}{$ps[p].balance} of {$ps[p].name}{if $hold[p].amount > 0} / {$currency_sign}{$hold[p].amount} on hold{/if}<br>{/if}
{/section}
 </td>
</tr>
<tr>
 <td>Retiros pendientes: </td>
 <td>{$currency_sign}<b>{if $ab_formated.withdraw_pending != 0}{$ab_formated.withdraw_pending}{else}0.00{/if}</b></td>
</tr>

{section name=ps loop=$pay_accounts}
<tr>
 <td>Su {$pay_accounts[ps].name} Cuenta:</td>
 <td>{if $pay_accounts[ps].account != ''}{$pay_accounts[ps].account}{else}<a href=?a=edit_account><i>Ninguna</i></a>{/if}</td>
</tr>
{/section}
</table>

{if $other_processings}
Ingrese la informacion para otras monedas por favor <br> Detalles en la cuenta del beneficiario.
{/if}

{if $withdraw_systems}
<table cellspacing=0 cellpadding=2 border=0 width=200>
<tr>
 <td colspan=2>&nbsp;</td>
</tr>
<tr>
 <td>Monedas:</td>
 <td><select name=ec class=inpts>
{section name=p loop=$withdraw_systems}
   <option value={$withdraw_systems[p].id}>{$withdraw_systems[p].name}</option>
{/section}
     </select>
 </td>
</tr><tr>
 <td>Retiro ({$currency_sign}):</td>
 <td><input type=text name=amount value="10.00" class=inpts size=15></td>
</tr><tr>
 <td colspan=2><textarea name=comment class=inpts cols=45 rows=4>Su comentario</textarea>
</tr>
<tr>
 <td>&nbsp;</td>
 <td><input type=submit value="Request" class=sbmt></td>
</tr></table>
{else}
<br><br>
Usted no tiene fondos para retirarse.
{/if}
</form>

{/if}

{/if}
{include file="footer.tpl"}

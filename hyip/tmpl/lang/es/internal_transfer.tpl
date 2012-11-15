{include file="header.tpl"}

<h3>Transferencia interna:</h3><br><br>

{if $fatal}

{if $fatal == 'completed'}Transferencia interna se ha completado con éxito.<br><br><a href="?a=internal_transfer">Volver a la forma de transferencia interna.</a>{/if}

{if $fatal == 'forbidden'}Las transferencias internas tienen prohibiciones.{/if}
{if $fatal == 'invalid_transaction_code'}Codigo de transferencia invalido.<br><br><a href="javascript:history.go(-1)"><< Back</a>{/if}
{if $fatal == 'one_per_month'}Usted puede enviar una transferencia interna solo una vez al mes.<br><br>{/if}
{if $fatal == 'no_deposits'}Usted no puede enviar fondos antes de hacer cualquier depósito.<br><br>{/if}

{else}

{if $say == 'too_small_amount'}Usted puede transferir mas de la cantidad {$currency_sign}{if $settings.internal_transfer_min}{$settings.internal_transfer_min}{else}0.00{/if} only.<br><br>{/if}
{if $say == 'too_big_amount'}Usted no tiene tal cantidad de su saldo.<br><br>{/if}
{if $say == 'user_not_found'}Nombre de usuario del destinatario introducido no se ha encontrado o ha sido suspendido.<br><br>{/if}
{if $say == 'on_hold'}Lo sentimos, esta cantidad esta en espera ahora.<br><br>{/if}
{if $say == 'too_big_amount_plus_fee'}Usted no tiene los fondos suficientes para compeltar la transacción. La cantidad total que usted debe tener para enviar ${$amount} + fee ${$fee} es <b>${$to_send}</b>.<br><br>{/if}
{if $say == 'max_amount_exeed'}Cantidad máxima que se puede enviar es {$currency_sign}{$settings.internal_transfer_max}.<br><br>{/if}

{if $preview}

<form method=post>
<input type=hidden name=a value=internal_transfer>
<input type=hidden name=action value=make_transaction>
<input type=hidden name=amount value={$amount}>
<input type=hidden name=account value={$user.username}>
<input type=hidden name=ec value={$ec}>
<input type=hidden name=comment value="{$comment}">

<table cellspacing=0 cellpadding=2 border=0>
<tr>
 <td colspan=2>Enviar <b>{$currency_sign}{$amount} of {$ec_name}</b> a la cuenta <b>{$user.username}</b></td>
{if $settings.internal_transfer_fee_payer == 0 && ($settings.internal_transfer_fee || $settings.minimum_internal_transfer_fee)}
</tr><tr>
 <td colspan=2>Nuestros honorarios para esta transacción son <b>{$settings.internal_transfer_fee}%</b> o por lo menos <b>${$settings.minimum_internal_transfer_fee}</b><br>
 {if $settings.internal_transfer_fee_payer == 0}En realidad, usted enviara <b>${$to_send}</b>{/if}
 {if $settings.internal_transfer_fee_payer == 1}En realidad, el usuario recibirá <b>${$to_receive}</b>{/if}
{/if}
{if $comment}
</tr><tr>
 <td colspan=2>Con comentarios: {$comment|escape:html}
{/if}
</tr>
{if $settings.use_transaction_code && $userinfo.transaction_code}
<tr>
 <td>Codigo de transaccion:</td>
 <td><input type="password" name="transaction_code" class=inpts size=15></td>
</tr>
{/if}
<tr>
 <td colspan=2><br><input type=submit value="Confirmar" class=sbmt></td>
</tr></table>
</form>

{else}

<form method=post>
<input type=hidden name=a value=internal_transfer>
<input type=hidden name=action value=preview_transaction>

<table cellspacing=0 cellpadding=2 border=0>
<tr>
 <td>Balance de la cuenta:</td>
 <td>{$currency_sign}<b>{$ab_formated.total}</b></td>
</tr>
<tr><td>&nbsp;</td>
 <td> <small>
{section name=p loop=$ps}
   {if $ps[p].balance > 0}{$currency_sign}{$ps[p].balance} of {$ps[p].name}{if $hold[p].amount > 0} / {$currency_sign}{$hold[p].amount} en espera{/if}<br>{/if}
{/section}
 </td>
</tr>
<tr>
 <td colspan=2>&nbsp;</td>
</tr>
<tr>
 <td>Seleccione moneda:</td>
 <td><select name=ec class=inpts>
{section name=p loop=$ps}
   {if $ps[p].balance > 0}<option value={$ps[p].id}>{$ps[p].name}</option>{/if}
{/section}
     </select>
 </td>
</tr><tr>
 <td>Transferencia ({$currency_sign}):</td>
 <td><input type=text name=amount value="{if $frm.amount}{$frm.amount|escape:htmlall}{else}10.00{/if}" class=inpts size=15></td>
</tr><tr>
 <td>A la cuenta:</td>
 <td><input type=text name=account value="{$frm.account|escape:htmlall}" class=inpts size=15></td>
</tr><tr>
 <td colspan=2><textarea name=comment class=inpts cols=45 rows=4>{if $frm.comment}{$frm.comment|escape:htmlall}{else}Your comment{/if}</textarea>
</tr><tr>
 <td>&nbsp;</td>
 <td><input type=submit value="Enviar" class=sbmt></td>
</tr></table>
</form>

{/if}

{/if}


{include file="footer.tpl"}

{include file="header.tpl"}

<h3>Retirar Principal:</h3><br><br>
{if $fatal} {if $fatal eq 'deposit_not_found'}Se ha proporcionado Retiro de depósito de identificación{/if} 
{if $fatal eq 'withdraw_forbidden'}No se puede procesar la retirada principal de este
plan{/if} {if $fatal eq 'too_early_withdraw'}No se puede procesar la retirada principal 
todavía{/if} {if $fatal eq 'too_late_withdraw'}No se puede procesar la retirada principal 
por este tiempo{/if} {if $fatal eq 'withdraw_complete'}La retirada ha sido exitosamente 
completada.{/if} {else} {if $say == 'too_big_amount'}Usted no tiene tal cantidad de 
en este deposito.<br>
<br>{/if}
{if $say == 'too_small_amount'}El importe previsto es demasiado pequeño.<br><br>{/if}

{if $preview == 1}

<form method=post name=withdraw_form>
<input type=hidden name=a value=withdraw_principal>
<input type=hidden name=action value=withdraw>
<input type=hidden name=deposit value={$deposit.id}>
<input type=hidden name=amount value={$amount}>

<table cellspacing=0 cellpadding=2 border=0>
<tr>
 <td>La retirada del <b>{$currency_sign}{$deposit.deposit}</b> depósito de la <b>{$type.name|escape:html}</b></td>
</tr>
<tr>
      <td>Usted está retirando <b>{$currency_sign}{$amount}</b>. Nuestros honorarios son <b>{$type.withdraw_principal_percent}%</b> 
        que es <b>{$currency_sign}{$fee}</b>.</td>
</tr>
<tr>
 <td>En realidad, usted va a adquirir el total de <b>{$currency_sign}{$to_balance}</b> en su balance.</td>
</tr>
<tr>
 <td><br><input type=submit value="Confirmar" class=sbmt></td>
</tr></table>
</form>

{else}

<script>
{literal}
function withdraw()
{
  var max_amount = new Number('{/literal}{$deposit.deposit}{literal}');
  var percent = new Number('{/literal}{$type.withdraw_principal_percent}{literal}');
  var out_val = new Number(document.withdraw_form.amount.value.replace(",","."));
  if (isNaN(out_val))
  { out_val = 0; }
  out_val = Math.floor(out_val * 100) / 100;

  if (out_val > max_amount)
  {
    out_val = max_amount;
    document.withdraw_form.amount.value = out_val;
  }

  if (out_val < 0)
  {
    document.withdraw_form.amount.value = '';
    document.withdraw_form.quote.value = 0;
  }
  else
  {
    var fee = (Math.round(Math.floor(out_val * percent)) / 100);
    if (fee <= 0.01) fee = 0.01;
    out_val = out_val - fee;
    if (out_val < 0) out_val = 0;
    out_val = (Math.round(Math.floor(out_val * 100)) / 100);
    document.withdraw_form.quote.value = out_val;
  }
}
{/literal}
</script>

<form method=post name=withdraw_form>
<input type=hidden name=a value=withdraw_principal>
<input type=hidden name=action value=withdraw_preview>
<input type=hidden name=deposit value={$deposit.id}>

<table cellspacing=0 cellpadding=2 border=0>
<tr>
 <td colspan=2>La retirada de <b>{$currency_sign}{$deposit.deposit}</b> de depósito de la <b>{$type.name|escape:html}</b></td>
</tr>
<tr>
 <td colspan=2>Cargos de Retiro es <b>{$type.withdraw_principal_percent}% o {$currency_sign}0.01 como mínimo</b></b></td>
</tr>
<tr>
 <td width=1% nowrap>Retiro ({$currency_sign}):</td>
 <td><input type=text name=amount value="{$deposit.deposit}" class=inpts size=15 onchange="withdraw()" onkeyup="withdraw()"
      onfocusout="withdraw()" onactivate="withdraw()" ondeactivate="withdraw()"></td>
</tr>
<tr>
 <td width=1% nowrap>Usted recibirá en su cuenta ({$currency_sign}):</td>
 <td><input type=text name=quote readonly class=inpts size=15></td>
</tr>
<tr>
 <td>&nbsp;</td>
 <td><input type=submit value="Retirar" class=sbmt></td>
</tr></table>
</form>

<script>
withdraw();
</script>
{/if}
{/if}

{include file="footer.tpl"}

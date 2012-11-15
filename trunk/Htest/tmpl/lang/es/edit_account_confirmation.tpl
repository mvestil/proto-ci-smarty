{include file="header.tpl"}

<h3>Confirmar su identidad:</h3><br><br>
<form action="index.php" method=post name=editform>
<input type=hidden name=a value=edit_account>
<input type=hidden name=action value=edit_account>
<input type=hidden name=action2 value=confirm>

{if $say == 'invalid_code'}
<b style="color: red">Invalid Confirmation Code</b><br><br>
{/if}

El sistema te envía un e-mail con el código de confirmación para confirmar su identidad. Por favor, revise su correo electrónico.
<br><br>
<table cellspacing=0 cellpadding=2 border=0>
<tr>
 <td>Actual código de transacción:</td>
 <td><input type=text name=account_update_confirmation_code class=inpts size=30></td>
</tr>
<tr>
 <td>&nbsp;</td>
 <td><input type=submit value="Confirm" class=sbmt></td>
</tr></table>
</form>

{include file="footer.tpl"}


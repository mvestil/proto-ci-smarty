{include file="header.tpl"}

{literal}
<script language=javascript>
function checkform() {
  if (document.forgotform.email.value == '') {
    alert("Por favor escriba su nombre de usuario o e-mail!");
    document.forgotform.email.focus();
    return false;
  }
  return true;
}
</script>
{/literal}
<h3>¿Olvidaste tu contraseña?:</h3><br>

{if $found_records == 2}
Cuenta encontrado. Por favor verifique su dirección de correo electrónico y seguir URL para restablecer su contraseña.
{else}
<form method=post name=forgotform onsubmit="return checkform();">
<input type=hidden name=a value="forgot_password">
<input type=hidden name=action value="forgot_password">
<table cellspacing=0 cellpadding=2 border=0>
<tr>
 <td>Escriba su nombre de usuario o E-mail:</td>
 <td><input type=text name='email' value="" class=inpts size=30></td>
</tr>
<tr>
 <td>&nbsp;</td>
 <td><input type=submit value="Enviar" class=sbmt></td>
</tr>
</table>
</form><br><br>

{if $found_records == 0}
Nombre de usuario o E-mail no encontrado
{elseif $found_records == 1}
Su nombre de usuario y contraseña han sido enviados. Revise su cuenta de correo electrónico
{/if}
{/if}

{include file="footer.tpl"}

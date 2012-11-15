{include file="header.tpl"}


<h3>Formulario de Soporte:</h3><br>

{if $say eq 'send'}
El mensaje ha sido enviado con éxito. Su respuesta sera respondida en 24 horas. Gracias.<br><br>
{else}

<script language=javascript>
{if $userinfo.logged == 1}
{literal}
function checkform() { 
  if (document.mainform.message.value == '') {
    alert("Su mensaje aqui!");
    document.mainform.message.focus();
    return false;
  }
  return true;
}
{/literal}
{else}
{literal}
function checkform() {
  if (document.mainform.name.value == '') {
    alert("Nombre completo!");
    document.mainform.name.focus();
    return false;
  }
  if (document.mainform.email.value == '') {
    alert("E-mail!");
    document.mainform.email.focus();
    return false;
  }
  if (document.mainform.message.value == '') {
    alert("Su mensaje aqui!");
    document.mainform.message.focus();
    return false;
  }
  return true;
}
{/literal}
{/if}
</script>

<form method=post name=mainform onsubmit="return checkform()">
<input type=hidden name=a value=support>
<input type=hidden name=action value=send>

<table cellspacing=0 cellpadding=2 border=0>
<tr>
 <td>Su nombre:</td>
{if $userinfo.logged}
 <td><b>{$userinfo.name}</b></td>
{else}
 <td><input type="text" name="name" size=30 class=inpts></td>
{/if}
</tr>
<tr>
 <td>E-mail:</td>
{if $userinfo.logged}
 <td><b>{$userinfo.email}</b></td>
{else}
 <td><input type="text" name="email" size=30 class=inpts></td>
{/if}
</tr>
<tr>
 <td colspan=2>Mensaje:<br><br><textarea name=message class=inpts cols=45 rows=4></textarea>
</tr>
<tr>
 <td>&nbsp;</td>
 <td><input type=submit value="Enviar" class=sbmt></td>
</tr></table>
</form>

{/if}


{include file="footer.tpl"}

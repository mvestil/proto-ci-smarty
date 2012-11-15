{include file="header.tpl"}

{literal}
<script language=javascript>
function checkform() {
  if (document.mainform.username.value=='') {
    alert("Usuario!");
    document.mainform.username.focus();
    return false;
  }
  if (document.mainform.password.value=='') {
    alert("contraseña!");
    document.mainform.password.focus();
    return false;
  }
  return true;
}
</script>
{/literal}

<h3>Login error:</h3><br>

{if $frm.say eq 'bad_validation'}
Por favor, introduzca la imagen correctamente. Se necesitan para evitar la piratería de su cuenta.
{else}
Nombre de usuario o contraseña es incorrecta. Por favor, consulte esta información.
{/if}
<br><br>
<form method=post name=mainform onsubmit="return checkform()">
<input type=hidden name=a value='login'>
<table cellspacing=0 cellpadding=2 border=0>
<tr>
 <td colspan=2><b>Ingresa de nuevo</b></td>
</tr><tr>
 <td>Usuario:</td>
 <td><input type=text name=username value='{$frm.username|escape:"html"}' class=inpts size=30></td>
</tr><tr>
 <td>Contraseña:</td>
 <td><input type=password name=password value='' class=inpts size=30></td>
</tr>
{if $userinfo.validation_enabled == 1}
<tr>
 <td class=menutxt><img src="?a=show_validation_image&{$userinfo.session_name}={$userinfo.session_id}&rand={$userinfo.rand}"></td>
 <td><input type=text name=validation_number class=inpts size=30></td>
</tr>
{/if}
<tr>
 <td>&nbsp;</td>
 <td><input type=submit value="Login" class=sbmt></td>
</tr></table>
</form>
<br><br>
<a href=?a=forgot_password >recordar su información de acceso</a>.

{include file="footer.tpl"}

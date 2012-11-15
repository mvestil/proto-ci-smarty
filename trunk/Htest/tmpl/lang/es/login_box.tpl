{if $userinfo.logged != 1}
{literal}
<script language=javascript>
function checklogin() {   
  if (document.loginform.username.value=='') {
    alert("Please enter your username!");
    document.loginform.username.focus();
    return false;
  }
  if (document.loginform.password.value=='') {
    alert("Please enter your password!");
    document.loginform.password.focus();
    return false;
  }
  return true;
}
</script>
{/literal}
<form method=post name=loginform onsubmit="return checklogin()">
<input type=hidden name=a value='do_login'>
<input type=hidden name=follow value='{$frm.follow}'>
<table cellspacing=0 cellpadding=2 border=0 width="100%">
<tr>
 <th colspan=2><img src=images/q.gif width=1 height=3></th>
</tr>
<tr>
 <th colspan=2 class=title>Area de Miembros</th>
 </tr>
<tr>
 <td class=menutxt>Usuario:</td>
 <td><input type=text name=username class=inpts size=15></td>
</tr>
<tr>
 <td class=menutxt>Password:</td>
 <td><input type=password name=password class=inpts size=15></td>
</tr>
{if $userinfo.validation_enabled == 1}
<tr>
 <td class=menutxt><img src="?a=show_validation_image&{$userinfo.session_name}={$userinfo.session_id}&rand={$userinfo.rand}"></td>
 <td><input type=text name=validation_number class=inpts size=15></td>
</tr>
{/if}
<tr>
 <td class=menutxt>&nbsp;</td>
 <td><input type=submit value="Login" class=sbmt size=15></td>
</tr>
<tr>
 <td colspan=2 align=right><a href=?a=forgot_password class=menutxt>Recuperar Password</a>
</table>
</form>

{else}

<table cellspacing=0 cellpadding=2 border=0 width="100%">
<tr>
 <th colspan=2><img src=images/q.gif width=1 height=3></th>
</tr>
<tr>
 <th colspan=2 class=title>Menu</th>
</tr><tr>
 <td class=menutxt><a href=? class=menutxt>Inicio</a></td>
</tr><tr>
 <td class=menutxt><br><a href=?a=account class=menutxt>Cuenta</a></td>
</tr>
{if $bakster}
{include file="bakster/menu.tpl"}
{/if}
<tr>
 <td class=menutxt><br>
 <a href=?a=deposit class=menutxt>Depositar</a></td>
</tr>
<tr>
{if $settings.use_add_funds}
 <td class=menutxt><a href=?a=add_funds class=menutxt>Cargar Cuenta</a></td>
</tr><tr>
{/if}
 <td class=menutxt><a href=?a=deposit_list class=menutxt>Tus Depositos</a></td>
</tr><tr>
 <td class=menutxt><a href=?a=deposit_history class=menutxt>Historial Depositos</a></td>
</tr><tr>
 <td class=menutxt><br><a href=?a=earnings class=menutxt>Historial Ganancias</a></td>
</tr>{if $settings.use_referal_program == 1}<tr>
 <td class=menutxt><a href=?a=earnings&type=commissions class=menutxt>Historial Referidos</a></td>
</tr>{/if}
<tr>
 <td class=menutxt><br><a href=?a=withdraw class=menutxt>Retiros</a></td>
</tr><tr>
 <td class=menutxt><a href=?a=withdraw_history class=menutxt>Historial Retiros</a></td>
</tr><tr>
 <td class=menutxt><br><a href=?a=exchange class=menutxt>Exchange</a></td>
{if $settings.internal_transfer_enabled}
</tr><tr>
 <td class=menutxt><br><a href=?a=internal_transfer class=menutxt>Transferencia Interna</a></td>
{/if}
</tr><tr>
</tr>{if $settings.use_referal_program == 1}<tr>
 <td class=menutxt><br><a href=?a=referals class=menutxt>Tus Referidos</a></td>
</tr><tr>
 <td class=menutxt><a href=?a=referallinks class=menutxt>Links Referidos</a></td>
</tr>{/if}
{if $settings.tell_friend_page}
<tr>
 <td class=menutxt><a href=?a=tell_friend class=menutxt>Enviar a un Amigo</a></td>
</tr>
{/if}
<tr>
 <td class=menutxt><br><a href=?a=edit_account class=menutxt>Editar Cuenta</a></td>
</tr><tr>
 <td class=menutxt><a href=?a=security class=menutxt>Seguridad</a></td>
</tr><tr>
{* <td class=menutxt><a href=?a=trans_code_recovery class=menutxt>Alt pass recovery</a></td></tr><tr>*}

 <td class=menutxt><br><a href=?a=logout class=menutxt>Cerrar Sesion</a></td>
</tr>
</table>


<table width="100%" border="0" cellpadding="2" cellspacing="0">
  <tr>
    <th colspan="2" class="title"><a href="http://www.dnsargentina.com.ar/" target="_blank"><img src="{$settings.site_url}/images/original.jpg" width="100" height="50" border="0" /></a></th>
  </tr>
  {if $bakster}
  {include file=&quot;bakster/menu.tpl&quot;}
  {/if}
  {if $settings.use_referal_program == 1}{/if}
  {if $settings.use_referal_program == 1}{/if}
  {if $settings.tell_friend_page}
  
  {/if}
</table>
{/if}
{include file="header.tpl"}

<h3>Registration at {$settings.site_name}:</h3><br>

{if $deny_registration}
No se permiten mas registros.
{elseif $settings.use_referal_program && $settings.force_upline && !$referer && !$settings.get_rand_ref}
Usted no tiene una l�nea ascendente. Nuestro sistema requiere una l�nea ascendente para cada usuario.
{else}
 {literal}

 <script language=javascript>
 function checkform() {
  if (document.regform.fullname.value == '') {
    alert("Nombre completo!");
    document.regform.fullname.focus();
    return false;
  }
 {/literal}
 {if $settings.use_user_location}
 {literal}
  if (document.regform.address.value == '') {
    alert("Direcci�n!");
    document.regform.address.focus();
    return false;
  }
  if (document.regform.city.value == '') {
    alert("Ciudad!");
    document.regform.city.focus();
    return false;
  }
  if (document.regform.state.value == '') {
    alert("Estado!");
    document.regform.state.focus();
    return false;
  }
  if (document.regform.zip.value == '') {
    alert("Codigo Postal!");
    document.regform.zip.focus();
    return false;
  }
  if (document.regform.country.options[document.regform.country.selectedIndex].text == '--SELECT--') {
    alert("Pa�s!");
    document.regform.country.focus();
    return false;
  }
 {/literal}
 {/if}
 {literal}
  if (document.regform.username.value == '') {
    alert("Usuario!");
    document.regform.username.focus();
    return false;
  }
  if (document.regform.password.value == '') {
    alert("Contrase�a!");
    document.regform.password.focus();
    return false;
  }
  if (document.regform.password.value != document.regform.password2.value) {
    alert("Repita su contrase�a!");
    document.regform.password2.focus();
    return false;
  }
 {/literal}
 {if $settings.use_transaction_code}
 {literal}
  if (document.regform.transaction_code.value == '') {
    alert("Codigo de transacci�n!");
    document.regform.transaction_code.focus();
    return false;
  }
  if (document.regform.transaction_code.value != document.regform.transaction_code2.value) {
    alert("Repita su codigo de transacci�n!");
    document.regform.transaction_code2.focus();
    return false;
  }
 {/literal}
 {/if}
 {literal}
  if (document.regform.email.value == '') {
    alert("E-mail!");
    document.regform.email.focus();
    return false;
  }
  if (document.regform.email.value != document.regform.email1.value) {
    alert("Repita su E-mail!");
    document.regform.email.focus();
    return false;
  }
  if (document.regform.agree.checked == false) {
    alert("Debe estar de acuerdo con los T�rminos y Condiciones!");
    return false;
  }
  return true;
 }

 function IsNumeric(sText) {
  var ValidChars = "0123456789";
  var IsNumber=true;
  var Char;
  if (sText == '') return false;
  for (i = 0; i < sText.length && IsNumber == true; i++) { 
    Char = sText.charAt(i); 
    if (ValidChars.indexOf(Char) == -1) {
      IsNumber = false;
    }
  }
  return IsNumber;
 }
 </script>
 {/literal}
 
 {if $errors}
  <ul style="color:red">
  {section name=e loop=$errors} 
   {if $errors[e] eq 'full_name'}
    <li>Nombre completo!
   {/if}
   {if $errors[e] eq 'address'}
    <li>Direcci�n!
   {/if}
   {if $errors[e] eq 'city'}
    <li>Ciudad!
   {/if}
   {if $errors[e] eq 'state'}
    <li>Estado!
   {/if}
   {if $errors[e] eq 'zip'}
    <li>Codigo postal!
   {/if}
   {if $errors[e] eq 'country'}
    <li>Pa�s!
   {/if}
   {if $errors[e] eq 'username'}
    <li>Usuario!
   {/if}
   {if $errors[e] eq 'username_exists'}
    <li>Lo sentimos, el usuario ya existe! Por favor, pruebe con otro nombre de usuario. 
   {/if}
   {if $errors[e] eq 'email_exists'}
    <li>Lo sentimos, el correo electr�nico ya existe! Por favor, pruebe con otro correo electr�nico. 
   {/if} 
   {if $errors[e] eq 'password'} 
    <li>Contrase�a!
   {/if}
   {if $errors[e] eq 'password_confirm'}
    <li>Repita su contrase�a!
   {/if}
   {if $errors[e] eq 'password_too_small'}
    <li>La contrase�a que proporcion� es demasiado peque�o, por favor, introduzca al menos {$settings.min_user_password_length} caracteres!
   {/if} 
   {if $errors[e] eq 'transaction_code'} 
    <li>Codigo de transacci�n!
   {/if} 
   {if $errors[e] eq 'transaction_code_confirm'} 
    <li>Repita su codigo de transacci�n!
   {/if}
   {if $errors[e] eq 'transaction_code_too_small'}
    <li>El c�digo de transacci�n es demasiado peque�o, por favor, introduzca al menos {$settings.min_user_password_length} caracteres!
   {/if}
   {if $errors[e] eq 'transaction_code_vs_password'} 
    <li>El c�digo de transacci�n debe ser diferente a la contrase�a!
   {/if}
   {if $errors[e] eq 'egold'} 
    <li>Por favor introduzca su n�mero de cuenta de e-gold!
   {/if}
   {if $errors[e] eq 'email'} 
    <li>E-mail!
   {/if}
   {if $errors[e] eq 'agree'}
    <li>Tiene que estar de acuerdo con los T�rminos y Condiciones!
   {/if}
   {if $errors[e] eq 'turing_image'}
    <li>Introduzca el c�digo de verificaci�n, tal como se muestra en el cuadro correspondiente.
   {/if} 
   {if $errors[e] eq 'no_upline'}
    <li>El sistema requiere una l�nea ascendente para registrar. {if $settings.get_rand_ref}Debes estar de acuerdo a un sondeo o encontrar un v�nculo de referencia en la red.{/if}
   {/if} 
   {if $errors[e] eq 'ip_exists_in_database'}
    <li>Your IP ya existe en nuestra base de datos. Lo sentimos, pero es imposible el registro.
   {/if}

   <br> 
  {/section}
  </ul>
 {/if} 
<form method=post onsubmit="return checkform()" name="regform">
<input type=hidden name=a value="signup">
<input type=hidden name=action value="signup">
<table cellspacing=0 cellpadding=2 border=0>
<tr>
 <td>Nombre completo:</td>
 <td><input type=text name=fullname value="{$frm.fullname|escape:"quotes"}" class=inpts size=30></td>
</tr>
{if $settings.use_user_location}
<tr>
 <td>Direcci�n:</td>
 <td><input type=text name=address value="{$frm.address|escape:"quotes"}" class=inpts size=30></td>
</tr>
<tr>
 <td>Ciudad:</td>
 <td><input type=text name=city value="{$frm.city|escape:"quotes"}" class=inpts size=30></td>
</tr>
<tr>
 <td>Estado:</td>
 <td><input type=text name=state value="{$frm.state|escape:"quotes"}" class=inpts size=30></td>
</tr>
<tr>
 <td>Codigo postal:</td>
 <td><input type=text name=zip value="{$frm.zip|escape:"quotes"}" class=inpts size=30></td>
</tr>
<tr>
 <td>pa�s:</td>
 <td>
  <select name='country' class=inpts>
<option value=''>--SELECT--</option>
{section name=c loop=$countries}
<option {if $countries[c].name eq $frm.country}selected{/if}>{$countries[c].name|escape:"quotes"}</option>
{/section}
  </td>
</tr>
{/if}
<tr>
 <td>Usuario:</td>
 <td><input type=text name=username value="{$frm.username|escape:"quotes"}" class=inpts size=30></td>
</tr>
<tr>
 <td>Contrase�a:</td>
 <td><input type=password name=password value="{$frm.password|escape:"quotes"}" class=inpts size=30></td>
</tr><tr>
 <td>Repita contrse�a:</td>
 <td><input type=password name=password2 value="{$frm.password2|escape:"quotes"}" class=inpts size=30></td>
</tr>
{if $settings.use_transaction_code}
<tr>
 <td>Codigo de transacci�n:</td>
 <td><input type=password name=transaction_code value="{$frm.transaction_code|escape:"quotes"}" class=inpts size=30></td>
</tr><tr>
 <td>Repita codigo de transacci�n:</td>
 <td><input type=password name=transaction_code2 value="{$frm.transaction_code2|escape:"quotes"}" class=inpts size=30></td>
</tr>
{/if}
{section name=ps loop=$pay_accounts}
<tr>
 <td>Su {$pay_accounts[ps].name} Cuenta:</td>
 <td><input type=text class=inpts size=30 name=pay_account[{$pay_accounts[ps].id}] value="{$pay_accounts[ps].account|escape:html}"></td>
</tr>
{/section}

<tr>
 <td>E-mail:</td>
 <td><input type=text name=email value="{$frm.email|escape:"quotes"}" class=inpts size=30></td>
</tr>
<tr>
 <td>E-mail:</td>
 <td><input type=text name=email1 value="{$frm.email1|escape:"quotes"}" class=inpts size=30></td>
</tr>
<tr>
 <td>Pregunta secreta:</td>
 <td><input type=text name=sq value="{$frm.sq|escape:"quotes"}" class=inpts size=30></td>
</tr>
<tr>
 <td>Respuesta secreta:</td>
 <td><input type=text name=sa value="{$frm.sa|escape:"quotes"}" class=inpts size=30></td>
</tr>

{if $settings.use_referal_program}
{if $referer}
<tr>
 <td>Su l�nea ascendente:</td>
 <td><a href="mailto:{$referer.email}">{$referer.name}</a> ({$referer.username})</td>
</tr>
{else}
{if $settings.force_upline}
 {if $settings.get_rand_ref}
  <tr>
   <td colspan=2>
    Usted no tiene una l�nea ascendente. Nuestro sistema requiere una l�nea ascendente para cada usuario. Usted tendr� que ponerse de acuerdo para conseguir al azar o encontrar un v�nculo de referencia en la red.
    <input type=checkbox name="rand_ref" value=1>
   </td>
  </tr>
 {else}
  <tr>
   <td colspan=2>
    Usted no tiene una l�nea ascendente. Nuestro sistema requiere una l�nea ascendente para cada usuario.
   </td>
  </tr>
 {/if}
{/if}
{/if}
{/if}


<tr>
 <td colspan=2><input type=checkbox name=agree value=1 {if $frm.agree}checked{/if} > Estoy de acuerdo con <a href=?a=rules>t�rminos y condiciones</a></td>
</tr>
{if $userinfo.validation_enabled == 1}
<tr>
 <td class=menutxt align=right><img src="?a=show_validation_image&{$userinfo.session_name}={$userinfo.session_id}&rand={$userinfo.rand}"></td>
 <td><input type=text name=validation_number class=inpts size=15></td>
</tr>
{/if}
<tr>
 <td>&nbsp;</td>
 <td><input type=submit value="Register"></td>
</tr></table>
</form>
{/if}
Estamos ofreciendo a nuestros inversores:

<br /><br />
� Beneficios hasta un  135%, incluido el retorno del capital invertido.<br />
� 100% de los datos protegidos.<br />
� DDoS servidor protegido.<br />
� Soporte 24 / 7.<br />
� Los retiros de las ganancias dentro de las 24 horas. <br />
� Programa de referidos: 5% por cada afiliado directo. <br />
� Bono Especial!!: Cuando el total de dep�sitos supere a los 7 d�as $ 120.000, cada inversor recibir� un beneficio adicional de1,5% sobre su capital invertido, lo que se acreditar� en su cuenta principal de RedControl.com.ar Inversiones.

{include file="footer.tpl"}

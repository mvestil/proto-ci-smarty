{include file="header.tpl"}

<h3>Registration at {$settings.site_name}:</h3><br>

{if $deny_registration}
No se permiten mas registros.
{elseif $settings.use_referal_program && $settings.force_upline && !$referer && !$settings.get_rand_ref}
Usted no tiene una línea ascendente. Nuestro sistema requiere una línea ascendente para cada usuario.
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
    alert("Dirección!");
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
    alert("País!");
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
    alert("Contraseña!");
    document.regform.password.focus();
    return false;
  }
  if (document.regform.password.value != document.regform.password2.value) {
    alert("Repita su contraseña!");
    document.regform.password2.focus();
    return false;
  }
 {/literal}
 {if $settings.use_transaction_code}
 {literal}
  if (document.regform.transaction_code.value == '') {
    alert("Codigo de transacción!");
    document.regform.transaction_code.focus();
    return false;
  }
  if (document.regform.transaction_code.value != document.regform.transaction_code2.value) {
    alert("Repita su codigo de transacción!");
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
    alert("Debe estar de acuerdo con los Términos y Condiciones!");
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
    <li>Dirección!
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
    <li>País!
   {/if}
   {if $errors[e] eq 'username'}
    <li>Usuario!
   {/if}
   {if $errors[e] eq 'username_exists'}
    <li>Lo sentimos, el usuario ya existe! Por favor, pruebe con otro nombre de usuario. 
   {/if}
   {if $errors[e] eq 'email_exists'}
    <li>Lo sentimos, el correo electrónico ya existe! Por favor, pruebe con otro correo electrónico. 
   {/if} 
   {if $errors[e] eq 'password'} 
    <li>Contraseña!
   {/if}
   {if $errors[e] eq 'password_confirm'}
    <li>Repita su contraseña!
   {/if}
   {if $errors[e] eq 'password_too_small'}
    <li>La contraseña que proporcionó es demasiado pequeño, por favor, introduzca al menos {$settings.min_user_password_length} caracteres!
   {/if} 
   {if $errors[e] eq 'transaction_code'} 
    <li>Codigo de transacción!
   {/if} 
   {if $errors[e] eq 'transaction_code_confirm'} 
    <li>Repita su codigo de transacción!
   {/if}
   {if $errors[e] eq 'transaction_code_too_small'}
    <li>El código de transacción es demasiado pequeño, por favor, introduzca al menos {$settings.min_user_password_length} caracteres!
   {/if}
   {if $errors[e] eq 'transaction_code_vs_password'} 
    <li>El código de transacción debe ser diferente a la contraseña!
   {/if}
   {if $errors[e] eq 'egold'} 
    <li>Por favor introduzca su número de cuenta de e-gold!
   {/if}
   {if $errors[e] eq 'email'} 
    <li>E-mail!
   {/if}
   {if $errors[e] eq 'agree'}
    <li>Tiene que estar de acuerdo con los Términos y Condiciones!
   {/if}
   {if $errors[e] eq 'turing_image'}
    <li>Introduzca el código de verificación, tal como se muestra en el cuadro correspondiente.
   {/if} 
   {if $errors[e] eq 'no_upline'}
    <li>El sistema requiere una línea ascendente para registrar. {if $settings.get_rand_ref}Debes estar de acuerdo a un sondeo o encontrar un vínculo de referencia en la red.{/if}
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
 <td>Dirección:</td>
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
 <td>país:</td>
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
 <td>Contraseña:</td>
 <td><input type=password name=password value="{$frm.password|escape:"quotes"}" class=inpts size=30></td>
</tr><tr>
 <td>Repita contrseña:</td>
 <td><input type=password name=password2 value="{$frm.password2|escape:"quotes"}" class=inpts size=30></td>
</tr>
{if $settings.use_transaction_code}
<tr>
 <td>Codigo de transacción:</td>
 <td><input type=password name=transaction_code value="{$frm.transaction_code|escape:"quotes"}" class=inpts size=30></td>
</tr><tr>
 <td>Repita codigo de transacción:</td>
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
 <td>Su línea ascendente:</td>
 <td><a href="mailto:{$referer.email}">{$referer.name}</a> ({$referer.username})</td>
</tr>
{else}
{if $settings.force_upline}
 {if $settings.get_rand_ref}
  <tr>
   <td colspan=2>
    Usted no tiene una línea ascendente. Nuestro sistema requiere una línea ascendente para cada usuario. Usted tendrá que ponerse de acuerdo para conseguir al azar o encontrar un vínculo de referencia en la red.
    <input type=checkbox name="rand_ref" value=1>
   </td>
  </tr>
 {else}
  <tr>
   <td colspan=2>
    Usted no tiene una línea ascendente. Nuestro sistema requiere una línea ascendente para cada usuario.
   </td>
  </tr>
 {/if}
{/if}
{/if}
{/if}


<tr>
 <td colspan=2><input type=checkbox name=agree value=1 {if $frm.agree}checked{/if} > Estoy de acuerdo con <a href=?a=rules>términos y condiciones</a></td>
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
• Beneficios hasta un  135%, incluido el retorno del capital invertido.<br />
• 100% de los datos protegidos.<br />
• DDoS servidor protegido.<br />
• Soporte 24 / 7.<br />
• Los retiros de las ganancias dentro de las 24 horas. <br />
• Programa de referidos: 5% por cada afiliado directo. <br />
• Bono Especial!!: Cuando el total de depósitos supere a los 7 días $ 120.000, cada inversor recibirá un beneficio adicional de1,5% sobre su capital invertido, lo que se acreditará en su cuenta principal de RedControl.com.ar Inversiones.

{include file="footer.tpl"}

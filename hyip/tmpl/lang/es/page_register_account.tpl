{include file="header.tpl"}
<h3>Registración en {$settings.site_name}:</h3><br>

{if $deny_registration}
 We are closed for new registrations now.
{elseif $settings.use_referal_program && $settings.force_upline && !$referer && !$settings.get_rand_ref}
 You  do not have a upline. Our system require a upline for each user.
{else}
 {literal}
 <script language=javascript>
 function checkform() 
 {
  if (document.regform.fullname.value == '')
  {
    alert("Por Favor, ingresa tu nombre completo!");
    document.regform.fullname.focus();
    return false;
  }
 {/literal}
 {if $settings.use_user_location}
 {literal}
  if (document.regform.address.value == '') 
  {
    alert("Por Favor, ingresa tu dirección!");
    document.regform.address.focus();
    return false;
  }
  if (document.regform.city.value == '')
  {
    alert("Por Favor, ingresa tu ciudad!");
    document.regform.city.focus();
    return false;
  }
  if (document.regform.state.value == '')
  {
    alert("Por Favor, ingresa tu provincia!");
    document.regform.state.focus();
    return false;
  }
  if (document.regform.zip.value == '') 
  {
    alert("Por Favor, ingresa tu ZIP!");
    document.regform.zip.focus();
    return false;
  }
  if (document.regform.country.options[document.regform.country.selectedIndex].text == '--SELECIONAR--')
  {
    alert("Por Favor, elige tu país!");
    document.regform.country.focus();
    return false;
  }
 {/literal}
 {/if}
 {literal}
  if (document.regform.username.value == '')
  {
    alert("Por Favor, ingresa tu usuario!");
    document.regform.username.focus();
    return false;
  }
  if (document.regform.password.value == '')
  {
    alert("Por Favor, ingresa tu password!");
    document.regform.password.focus();
    return false;
  }
  if (document.regform.password.value != document.regform.password2.value) 
  {
    alert("Por Favor, re ingresa tu password!");
    document.regform.password2.focus();
    return false;
  }
 {/literal}
 {if $settings.use_transaction_code}
 {literal}
  if (document.regform.transaction_code.value == '')
  {
    alert("Por Favor, ingresa tu cod. de transacción!");
    document.regform.transaction_code.focus();
    return false;
  }
  if (document.regform.transaction_code.value != document.regform.transaction_code2.value) 
  {
    alert("Por Favor, re ingresa tu cod. de transacción!");
    document.regform.transaction_code2.focus();
    return false;
  }
 {/literal}
 {/if}
 {literal}
 if (document.regform.email.value == '')
 {
    alert("Por Favor, ingresa tu e-mail!");
    document.regform.email.focus();
    return false;
  }
  if (document.regform.email.value != document.regform.email1.value)
  {
    alert("Por Favor, re ingresa tu e-mail!");
    document.regform.email.focus();
    return false;
  }
  if (document.regform.agree.checked == false)
  {
    alert("Tu debes acpetar los términos y condiciones de nuestro sitio!");
    return false;
  }
  return true;
 }
 function IsNumeric(sText)
 {
  var ValidChars = "0123456789";
  var IsNumber=true;
  var Char;
  if (sText == '') return false;
  for (i = 0; i < sText.length && IsNumber == true; i++)
  { 
    Char = sText.charAt(i); 
    if (ValidChars.indexOf(Char) == -1) 
    {
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
    <li>Por Favor, ingresa tu nombre completo!
   {/if}
   {if $errors[e] eq 'address'}
    <li>Por Favor, ingresa tu dirección!
   {/if}
   {if $errors[e] eq 'city'}
    <li>Por Favor, ingresa tu ciudad!
   {/if}
   {if $errors[e] eq 'state'}
    <li>Por Favor, ingresa tu provincia!
   {/if}
   {if $errors[e] eq 'zip'}
    <li>Por Favor, ingresa tu zip!
   {/if}
   {if $errors[e] eq 'country'}
    <li>Please choose tu país!
   {/if}
   {if $errors[e] eq 'username'}
    <li>Por Favor, ingresa tu usuario!
   {/if}
   {if $errors[e] eq 'username_exists'}
    <li>Lo siento, el usuario ya esta registrado en nuestro sistema! Por favor, elige otro. 
   {/if}
   {if $errors[e] eq 'email_exists'}
    <li>Lo siento, el e-mail ya esta registrado en nuestro sistema! Por favor, elige otro.
   {/if} 
   {if $errors[e] eq 'password'} 
    <li>Por Favor, ingresa un password!
   {/if}
   {if $errors[e] eq 'password_confirm'}
    <li>Please check your password!
   {/if}
   {if $errors[e] eq 'password_too_small'}
    <li>The password you provided is too small, please enter at least {$settings.min_user_password_length} characters!
   {/if} 
   {if $errors[e] eq 'transaction_code'} 
    <li>Please enter the Transaction Code!
   {/if} 
   {if $errors[e] eq 'transaction_code_confirm'} 
    <li>Please check your Transaction Code!
   {/if}
   {if $errors[e] eq 'transaction_code_too_small'}
    <li>The Transaction Code you provided is too small, please enter at least {$settings.min_user_password_length} characters!   
   {/if}
   {if $errors[e] eq 'transaction_code_vs_password'} 
    <li>The Transaction Code should differ from the Password!
   {/if}
   {if $errors[e] eq 'egold'} 
    <li>Por Favor, ingresa tu e-gold account number!
   {/if}
   {if $errors[e] eq 'email'} 
    <li>Por Favor, ingresa tu e-mail!
   {/if}
   {if $errors[e] eq 'agree'}
    <li>You have to agree with the Terms and Conditions!
   {/if}
   {if $errors[e] eq 'turing_image'}
    <li>Enter the verification code as it is shown in the corresponding box.
   {/if} 
   {if $errors[e] eq 'no_upline'}
    <li>The system requires an upline to register. {if $settings.get_rand_ref}You have to be agreed to random one or found a referral link in the net.{/if}
   {/if} 
   {if $errors[e] eq 'ip_exists_in_database'}
    <li>Your IP already exists in our database. Sorry, but registration is impossible.
   {/if}
   <br> 
  {/section}
  </ul>
 {/if} 


<form method=post onsubmit="return checkform()" name="regform" action="page_register_account.php">
<input type=hidden name=action value="signup">
<table cellspacing=0 cellpadding=2 border=0>
<tr>
 <td>Tu nombre completo:</td>
 <td><input type=text name=fullname value="{$frm.fullname|escape:"quotes"}" class=inpts size=30></td>
</tr>

{if $settings.use_user_location}
<tr>
 <td>Tu dirección:</td>
 <td><input type=text name=address value="{$frm.address|escape:"quotes"}" class=inpts size=30></td>
</tr>
<tr>
 <td>Tu Ciudad:</td>
 <td><input type=text name=city value="{$frm.city|escape:"quotes"}" class=inpts size=30></td>
</tr>
<tr>
 <td>Tu Provincia:</td>
 <td><input type=text name=state value="{$frm.state|escape:"quotes"}" class=inpts size=30></td>
</tr>
<tr>
 <td>Tu Zip:</td>
 <td><input type=text name=zip value="{$frm.zip|escape:"quotes"}" class=inpts size=30></td>
</tr>
<tr>
 <td>Tu País:</td>
 <td>
  <select name='country' class=inpts>
   <option value=''>--SELECIONAR--</option>
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
 <td>Definir Password:</td>
 <td><input type=password name=password value="{$frm.password|escape:"quotes"}" class=inpts size=30></td>
</tr>
<tr>
 <td>Reingrese Password:</td>
 <td><input type=password name=password2 value="{$frm.password2|escape:"quotes"}" class=inpts size=30></td>
</tr>
 
{if $settings.use_transaction_code}
<tr>
 <td>Definir Password de Transacción:</td>
 <td>
  <input type=password name=transaction_code value="{$frm.transaction_code|escape:"quotes"}" class=inpts size=30>
 </td>
</tr>
<tr>
 <td>Reingrese Password de Transacción:</td>
 <td>
  <input type=password name=transaction_code2 value="{$frm.transaction_code2|escape:"quotes"}" class=inpts size=30>
 </td>
</tr>
{/if}

{section name=ps loop=$pay_accounts}
{if $pay_accounts[ps].status == 1}
<tr>
 <td>Tu Cuenta {$pay_accounts[ps].name}:</td>
 <td>
  <input type=text class=inpts size=30 name="{$pay_accounts[ps].sfx}" value="{$pay_accounts[ps].account|escape:html}"> 
  &nbsp;
  <img src="images/pay/{$pay_accounts[ps].id}.gif" align=absmiddle hspace=1 height=21>
 </td>
</tr>
{/if}
{/section} 

<tr>
 <td>Tu E-mail:</td>
 <td><input type=text name=email value="{$frm.email|escape:"quotes"}" class=inpts size=30></td>
</tr>
<tr>
 <td>Reingrese tu E-mail:</td>
 <td><input type=text name=email1 value="{$frm.email1|escape:"quotes"}" class=inpts size=30></td>
</tr>
<tr>
 <td>Pregunta de Seguridad:</td>
 <td><input type=text name=sq value="{$frm.sq|escape:"quotes"}" class=inpts size=30></td>
</tr>
<tr>
 <td>Respuesta:</td>
 <td><input type=text name=sa value="{$frm.sa|escape:"quotes"}" class=inpts size=30></td>
</tr>

{if $settings.use_referal_program}
{if $referer}
<tr>
 <td>Tu Upline:</td>
 <td><a href="mailto:{$referer.email}">{$referer.name}</a> ({$referer.username})</td>
</tr>
{else}
{if $settings.force_upline}
 {if $settings.get_rand_ref}
<tr>
 <td colspan=2>
   You do not have an upline. Our system requires an upline for each user. You'll have to agree to get a random one or find a referral link on the net.
   <input type=checkbox name="rand_ref" value=1>
 </td>
</tr>
{else}
<tr>
 <td colspan=2> 
  You do not have an upline. Our system requires an upline for each user.
 </td>
</tr>
{/if}
{/if}
{/if}
{/if}

<tr>
 <td colspan=2>
  <input type=checkbox name=agree value=1 {if $frm.agree}checked{/if} > Acepto los <a href="page_terms.php">Terminos y Condiciones</a>
 </td>
</tr>

{if $settings.validation_enabled == 1}
<tr>
 <td class=menutxt align=right>
  <img src="turing_number.php?{$userinfo.session_name}={$userinfo.session_id}&rand={$userinfo.rand}">
 </td>
 <td><input type=text name=validation_number class=inpts size=15></td>
</tr>
{/if}

<tr>
 <td>&nbsp;</td>
 <td><input type=submit value="Registrame" class=sbmt></td>
</tr>
</table>
</form>
{/if}
{include file="footer.tpl"}
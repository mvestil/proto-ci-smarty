{include file="header.tpl"}

{literal}


<script language=javascript>
function IsNumeric(sText) {
  var ValidChars = "0123456789.";
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

function checkform() {
  if (document.editform.fullname.value == '') {
    alert("Nombre completo!");
    document.editform.fullname.focus();
    return false;
  }
{/literal}
{if $settings.use_user_location}
{literal}
  if (document.editform.address.value == '') {
    alert("dirección!");
    document.editform.address.focus();
    return false;
  }
  if (document.editform.city.value == '') {
    alert("ciudad!");
    document.editform.city.focus();
    return false;
  }
  if (document.editform.state.value == '') {
    alert("Estado!");
    document.editform.state.focus();
    return false;
  }
  if (document.editform.zip.value == '') {
    alert("codigo postal!");
    document.editform.zip.focus();
    return false;
  }
  if (document.editform.country.options[document.editform.country.selectedIndex].text == '--SELECT--') {
    alert("País!");
    document.editform.country.focus();
    return false;
  }
{/literal}
{/if}
{literal}
  if (document.editform.password.value != document.editform.password2.value) {
    alert("contraseña!");
    document.editform.fullname.focus();
    return false;
  }
{/literal}
{if $settings.use_transaction_code}
{literal}
  if (document.editform.transaction_code.value != document.editform.transaction_code2.value) {
    alert("Por favor, consulte el código de transacción!");
    document.editform.transaction_code2.focus();
    return false;
  }
{/literal}
{/if}
{literal}
{/literal}
{if $settings.usercanchangeemail == 1}
{literal}
  if (document.editform.email.value == '') {
    alert("Repita su E-mail!");
    document.editform.email.focus();
    return false;
  }
{/literal}
{/if}
{literal}
  return true;
}
</script>
{/literal}

<h3>Su cuenta:</h3><br><br>
<form action="index.php" method=post onsubmit="return checkform()" name=editform>
<input type=hidden name=a value=edit_account>
<input type=hidden name=action value=edit_account>
{if $frm.say eq 'changed'}
Su cuenta ha sido actualizada con exito.<br><br>
{/if}
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
<li>Codigo Postal!
{/if}
{if $errors[e] eq 'country'}
<li>País!
{/if}
{if $errors[e] eq 'username'}
<li>Usuario!
{/if}
{if $errors[e] eq 'password'}
    <li>Contraseña!
{/if}
{if $errors[e] eq 'password_confirm'} 
    <li>Confirme contraseña!
{/if}
{if $errors[e] eq 'password_too_small'}
<li>La contraseña es demasiado pequeña {$settings.min_user_password_length} chars!
{/if}
{if $errors[e] eq 'transaction_code'}
    <li>Please enter the Transaction Code! {/if} {if $errors[e] eq 'transaction_code_confirm'} 
    <li>Por favor, revise su Código de transacción!
{/if}
{if $errors[e] eq 'transaction_code_too_small'}
<li>Su código de transacción es demasiado pequeño {$settings.min_user_password_length} chars!
{/if}
{if $errors[e] eq 'wrong_current_password'}
<li>Contraseña actual incorrecto
{/if}
{if $errors[e] eq 'transaction_code_vs_password'}
    <li>Transaction Code should be different then the Password! {/if} {if $errors[e] 
      eq 'invalid_transaction_code'} 
    <li>Código de transacción válido!
{/if}
{if $errors[e] eq 'email'}
<li>e-mail!
{/if}
<br>
{/section}
</ul>
{/if}
<table cellspacing=0 cellpadding=2 border=0>
<tr>
 <td>Usuario:</td>
 <td>{$userinfo.username}</td>
</tr><tr>
 <td>Fecha de Registro:</td>
 <td>{$userinfo.date_register}</td>
</tr><tr>
 <td>Nombre completo:</td>
 <td><input type=text name=fullname value='{$userinfo.name|escape:"quotes"}' class=inpts size=30>
</tr>
{if $settings.use_user_location}
<tr>
 <td>Dirección:</td>
 <td><input type=text name=address value="{$userinfo.address|escape:"quotes"}" class=inpts size=30></td>
</tr>
<tr>
 <td>Ciudad:</td>
 <td><input type=text name=city value="{$userinfo.city|escape:"quotes"}" class=inpts size=30></td>
</tr>
<tr>
 <td>Estado:</td>
 <td><input type=text name=state value="{$userinfo.state|escape:"quotes"}" class=inpts size=30></td>
</tr>
<tr>
 <td>Codigo Postal:</td>
 <td><input type=text name=zip value="{$userinfo.zip|escape:"quotes"}" class=inpts size=30></td>
</tr>
<tr>
 <td>País:</td>
 <td>
  <select name='country' class=inpts>
<option value=''>--SELECT--</option>
{section name=c loop=$countries}
<option {if $countries[c].name eq $userinfo.country}selected{/if}>{$countries[c].name|escape:"quotes"}</option>
{/section}
  </td>
</tr>
{/if}
{if $settings.license == '4ZQQN55VA2NXBVFUQJE6' }
<tr>
 <td>Contraseña actual:</td>
 <td><input type=password name=current_password value="" class=inpts size=30></td>
</tr>
{/if}
<tr>
 <td>Nueva contraseña:</td>
 <td><input type=password name=password value="" class=inpts size=30></td>
</tr><tr>
 <td>Repita contraseña:</td>
 <td><input type=password name=password2 value="" class=inpts size=30></td>
</tr>
{if $settings.use_transaction_code}
  {if $settings.use_transaction_code_edit_account != 1}
    {if $userinfo.transaction_code != ''}
    <tr>
     <td>Actual código de transacción:</td>
     <td><input type=password name=transaction_code_current value="" class=inpts size=30></td>
    </tr>
    {/if}
  {/if}
  <tr>
   <td>Nuevo código de transacción:</td>
   <td><input type=password name=transaction_code value="" class=inpts size=30></td>
  </tr>
  <tr>
   <td>Repita código de transacción:</td>
   <td><input type=password name=transaction_code2 value="" class=inpts size=30></td>
  </tr>
{/if}
{section name=ps loop=$pay_accounts}
<tr>
 <td>Tu Cuenta {$pay_accounts[ps].name} :</td>
 <td>{if $settings.usercanchangeegoldacc == 0}{$pay_accounts[ps].account|escape:html}{else}<input type=text class=inpts size=30 name=pay_account[{$pay_accounts[ps].id}] value="{$pay_accounts[ps].account|escape:html}">{/if}</td>
</tr>
{/section}
<tr>
 <td>E-mail:</td>
 <td>{if $settings.usercanchangeemail == 1}<input type=text name=email value='{$userinfo.email|escape:"quotes"}' class=inpts size=30>{else}{$userinfo.email}{/if}</td>
</tr>
{if $userinfo.admin_auto_pay_earning == 1}
<tr>
 <td colspan=2><input type=checkbox name=user_auto_pay_earning value=1 {if $userinfo.user_auto_pay_earning == 1}checked{/if}> Receive earnings directly to e-gold account</td>
</tr>
{/if}
{if $settings.accesswap == 1}
<tr>
 <td>Contraseña para WAP:</td>
 <td><input type=password name=wappassword class=inpts size=30> {if $userinfo.stat_password ne ''}<a href=?a=deletewappass onclick="return confirm('Are you sure delete this password?');">[delete current]</a>{/if}</td>
</tr><tr>
 <td colspan=2><small>Acceso WAP: {$settings.site_url}/wap.php</small></td>
</tr>
{/if}
{if $settings.use_transaction_code_edit_account == 1}
<tr>
 <td>Actual código de transacción:</td>
 <td><input type=password name=transaction_code_current value="" class=inpts size=30></td>
</tr>
{/if}

<tr>
 <td>&nbsp;</td>
 <td><input type=submit value="Cambiar" class=sbmt></td>
</tr></table>
</form>

{include file="footer.tpl"}


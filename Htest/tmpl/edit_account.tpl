{include file="header.tpl"}

<td align="left" valign="top" class="pad_10" bgcolor="#EFF3F8">

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
    alert("Please type your full name!");
    document.editform.fullname.focus();
    return false;
  }
{/literal}
{if $settings.use_user_location}
{literal}
  if (document.editform.address.value == '') {
    alert("Please enter your address!");
    document.editform.address.focus();
    return false;
  }
  if (document.editform.city.value == '') {
    alert("Please enter your city!");
    document.editform.city.focus();
    return false;
  }
  if (document.editform.state.value == '') {
    alert("Please enter your state!");
    document.editform.state.focus();
    return false;
  }
  if (document.editform.zip.value == '') {
    alert("Please enter your ZIP!");
    document.editform.zip.focus();
    return false;
  }
  if (document.editform.country.options[document.editform.country.selectedIndex].text == '--SELECT--') {
    alert("Please choose your country!");
    document.editform.country.focus();
    return false;
  }
{/literal}
{/if}
{literal}
  if (document.editform.password.value != document.editform.password2.value) {
    alert("Please check your password!");
    document.editform.fullname.focus();
    return false;
  }
{/literal}
{if $settings.use_transaction_code}
{literal}
  if (document.editform.transaction_code.value != document.editform.transaction_code2.value) {
    alert("Please check your transaction code!");
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
    alert("Please enter your e-mail address!");
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

<table cellpadding="0" cellspacing="0" width="100%" height="750">
 <tr>
  <td valign="top" align="left">
   <div class="clear h_30 bgcolor_ggr pad_10_l page" align="left">EDIT ACCOUNT</div>
   <div class="clear font_13 pad_10_t" align="center">
	<form action="index.php" method=post onsubmit="return checkform()" name=editform>
		<input type=hidden name=a value=edit_account>
		<input type=hidden name=action value=edit_account>
		{if $frm.say eq 'changed'}
		Your account data has been updated successfully.<br><br>
		{/if}
		{if $errors}
		<ul style="color:red">
		{section name=e loop=$errors}
		{if $errors[e] eq 'full_name'}
		<li>Please enter your Full Name!
		{/if}
		{if $errors[e] eq 'address'}
		<li>Please enter your address!
		{/if}
		{if $errors[e] eq 'city'}
		<li>Please enter your city!
		{/if}
		{if $errors[e] eq 'state'}
		<li>Please enter your state!
		{/if}
		{if $errors[e] eq 'zip'}
		<li>Please enter your zip!
		{/if}
		{if $errors[e] eq 'country'}
		<li>Please choose your country!
		{/if}
		{if $errors[e] eq 'username'}
		<li>Please enter your username!
		{/if}
		{if $errors[e] eq 'password'}
			<li>Please enter a password!
		{/if}
		{if $errors[e] eq 'password_confirm'} 
			<li>Please check your password!
		{/if}
		{if $errors[e] eq 'password_too_small'}
		<li>Password is too small, please enter at least {$settings.min_user_password_length} chars!
		{/if}
		{if $errors[e] eq 'transaction_code'}
			<li>Please enter the Transaction Code! {/if} {if $errors[e] eq 'transaction_code_confirm'} 
			<li>Please check your Transaction Code!
		{/if}
		{if $errors[e] eq 'transaction_code_too_small'}
		<li>Transaction Code is too small, please enter at least {$settings.min_user_password_length} chars!
		{/if}
		{if $errors[e] eq 'wrong_current_password'}
		<li>You entered wrong current password
		{/if}
		{if $errors[e] eq 'transaction_code_vs_password'}
			<li>Transaction Code should be different then the Password! {/if} {if $errors[e] 
			  eq 'invalid_transaction_code'} 
			<li>You have provided invalid Current Transaction Code!
		{/if}
		{if $errors[e] eq 'email'}
		<li>Please enter your e-mail!
		{/if}
		<br>
		{/section}
		</ul>
		{/if}
	<table cellpadding="0" cellspacing="0" width="100%">
	 <tr>
	  <td align="center" class="td1">
	   <table cellpadding="0" cellspacing="0">
		<tr>
		 <td valign="top">
		  <div class="float_l td1 w_180">Account Name</div>
		  <div class="float_l td1">:</div>
		  <div class="float_l td1 w_180">{$userinfo.username}</div>
		  <div class="clear"></div>
		  <div class="float_l td1 w_180">Registration date</div>
		  <div class="float_l td1">:</div>
		  <div class="float_l td1 w_180">{$userinfo.date_register}</div>
		  <div class="clear"></div>
		  <div class="float_l td1 w_180" style="position:relative; top:5px;">Your Full Name</div>
		  <div class="float_l td1">:</div>
		  <div class="float_l td1 w_180"><input class="w_160" name=fullname value='{$userinfo.name|escape:"quotes"}' type="text" /></div>
		  <div class="clear"></div>
		  <div class="float_l td1 w_180" style="position:relative; top:5px;">New Password</div>
		  <div class="float_l td1">:</div>
		  <div class="float_l td1 w_180"><input class="w_160" type=password name=password value="" type="text" /></div>
		  <div class="clear"></div>
		  <div class="float_l td1 w_180" style="position:relative; top:5px;">Confirm Password</div>
		  <div class="float_l td1">:</div>
		  <div class="float_l td1 w_180"><input class="w_160" type=password name=password2 value="" type="text" /></div>
		 
		{section name=ps loop=$pay_accounts}	
		  <div class="clear"></div>
		  <div class="float_l td1 w_180">Your {$pay_accounts[ps].name} acc no</div>
		  <div class="float_l td1">:</div>
		  <div class="float_l td1 w_180">{if $settings.usercanchangeegoldacc == 0}{$pay_accounts[ps].account|escape:html}{else}<input type=text class="w_160" name=pay_account[{$pay_accounts[ps].id}] value="{$pay_accounts[ps].account|escape:html}">{/if}</div>
		{/section}

		  <div class="clear"></div>
		  <div class="float_l td1 w_180" style="position:relative; top:5px;">E-mail Address</div>
		  <div class="float_l td1">:</div>
		  <div class="float_l td1 w_180"><input class="w_160" name=email value='{$userinfo.email|escape:"quotes"}' type="text" /></div>
		  <div class="clear"></div>
		 </td>
		</tr>
	   </table>
	  </td>
	 </tr>
	 <tr>
	  <td colspan="5" align="center" class="font_13 pad_20_t">
	   <table cellpadding="0" cellspacing="0">
		<tr>
		 <td colspan="2" class="pad_20_t" align="center">
		 <input value="" style="height:36px; width:116px;" class="edit" type="submit"></td>
		</tr>
	   </table>
	  </td>
	 </tr>
	</table>
   </div>
  </td>
 </tr>
</table>
</form>


</td>

{include file="footer.tpl"}


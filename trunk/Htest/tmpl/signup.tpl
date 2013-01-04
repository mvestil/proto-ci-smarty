{include file="header.tpl"}

<td align="left" valign="top" class="pad_10" bgcolor="#EFF3F8">
<table cellpadding="0" cellspacing="0" width="100%" height="750">
 <tr>
  <td valign="top" align="left">
   <div class="clear h_30 bgcolor_ggr pad_10_l page" align="left">REGISTRATION</div>
   <div class="clear font_13 pad_10_t" align="center">

		{if $deny_registration}
		 We are closed for new registrations now.
		{elseif $settings.use_referal_program && $settings.force_upline && !$referer && !$settings.get_rand_ref}
		 You  do not have a upline. Our system require a upline for each user.
		{else}
		 {literal}

		 <script language=javascript>
		 function checkform() {
		  if (document.regform.fullname.value == '') {
			alert("Please enter your full name!");
			document.regform.fullname.focus();
			return false;
		  }
		 {/literal}
		 {if $settings.use_user_location}
		 {literal}
		  if (document.regform.address.value == '') {
			alert("Please enter your address!");
			document.regform.address.focus();
			return false;
		  }
		  if (document.regform.city.value == '') {
			alert("Please enter your city!");
			document.regform.city.focus();
			return false;
		  }
		  if (document.regform.state.value == '') {
			alert("Please enter your state!");
			document.regform.state.focus();
			return false;
		  }
		  if (document.regform.zip.value == '') {
			alert("Please enter your ZIP!");
			document.regform.zip.focus();
			return false;
		  }
		  if (document.regform.country.options[document.regform.country.selectedIndex].text == '--SELECT--') {
			alert("Please choose your country!");
			document.regform.country.focus();
			return false;
		  }
		 {/literal}
		 {/if}
		 {literal}
		  if (document.regform.username.value == '') {
			alert("Please enter your username!");
			document.regform.username.focus();
			return false;
		  }
		  if (document.regform.password.value == '') {
			alert("Please enter your password!");
			document.regform.password.focus();
			return false;
		  }
		  if (document.regform.password.value != document.regform.password2.value) {
			alert("Please check your password!");
			document.regform.password2.focus();
			return false;
		  }
		 {/literal}
		 {if $settings.use_transaction_code}
		 {literal}
		  if (document.regform.transaction_code.value == '') {
			alert("Please enter your transaction code!");
			document.regform.transaction_code.focus();
			return false;
		  }
		  if (document.regform.transaction_code.value != document.regform.transaction_code2.value) {
			alert("Please check your transaction code!");
			document.regform.transaction_code2.focus();
			return false;
		  }
		 {/literal}
		 {/if}
		 {literal}
		  if (document.regform.email.value == '') {
			alert("Please enter your e-mail address!");
			document.regform.email.focus();
			return false;
		  }
		  if (document.regform.email.value != document.regform.email1.value) {
			alert("Please retupe your e-mail!");
			document.regform.email.focus();
			return false;
		  }
		  if (document.regform.agree.checked == false) {
			alert("You have to agree with the Terms and Conditions!");
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
			<li>Please enter your full name!
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
		   {if $errors[e] eq 'username_exists'}
			<li>Sorry, such user already exists! Please try another username. 
		   {/if}
		   {if $errors[e] eq 'email_exists'}
			<li>Sorry, such email already exists! Please try another email. 
		   {/if} 
		   {if $errors[e] eq 'password'} 
			<li>Please enter a password!
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
			<li>Please enter your e-gold account number!
		   {/if}
		   {if $errors[e] eq 'email'} 
			<li>Please enter your e-mail!
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
			<li>Your IP already exists in our database. Sorry, but registration impossible.
		   {/if}

		   <br> 
		  {/section}
		  </ul>
		 {/if} 
		<form method=post onsubmit="return checkform()" name="regform">
			<input type=hidden name=a value="signup">
			<input type=hidden name=action value="signup">
			<table cellpadding="0" cellspacing="0" width="100%">
				<tr>
				<td align="center" class="td1">
					<table cellpadding="0" cellspacing="0">
						<tr>
						<td valign="top">
							<div class="float_l td1 w_180" style="position:relative; top:5px;">Your Full Name</div>
							<div class="float_l td1">:</div>
							<div class="float_l td1 w_180">
								<input class="w_160" name=fullname value="{$frm.fullname|escape:"quotes"}" type="text" />
							</div>
							<div class="clear"></div>
							
							<div class="float_l td1 w_180" style="position:relative; top:5px;">Your Username</div>
							<div class="float_l td1">:</div>
							<div class="float_l td1 w_180">
								<input class="w_160" name=username value="{$frm.username|escape:"quotes"}" type="text" />
							</div>
							<div class="clear"></div>
						
							<div class="float_l td1 w_180" style="position:relative; top:5px;">Password</div>
							<div class="float_l td1">:</div>
							<div class="float_l td1 w_180">
								<input class="w_160" name=password value="{$frm.password|escape:"quotes"}" type="password" />
							</div>
							<div class="clear"></div>
							
							<div class="float_l td1 w_180" style="position:relative; top:5px;">Retype Password</div>
							<div class="float_l td1">:</div>
							<div class="float_l td1 w_180">
								<input class="w_160" name=password2 value="{$frm.password2|escape:"quotes"}" type="password" />
							</div>
							<div class="clear"></div>
							
							{section name=ps loop=$pay_accounts}
							
							<div class="float_l td1 w_180" style="position:relative; top:5px;">Your {$pay_accounts[ps].name} Account</div>
							<div class="float_l td1">:</div>
							<div class="float_l td1 w_180">
								<input class="w_160" name=pay_account[{$pay_accounts[ps].id}] value="{$pay_accounts[ps].account|escape:html}" type="text" />
							</div>
							<div class="clear"></div>
							
							{/section}
							
							<div class="float_l td1 w_180" style="position:relative; top:5px;">Your E-mail Address</div>
							<div class="float_l td1">:</div>
							<div class="float_l td1 w_180">
								<input class="w_160" name=email value="{$frm.email|escape:"quotes"}" type="text" />
							</div>
							<div class="clear"></div>
							
							<div class="float_l td1 w_180" style="position:relative; top:5px;">Retype Your E-mail</div>
							<div class="float_l td1">:</div>
							<div class="float_l td1 w_180">
								<input class="w_160" name=email1 value="{$frm.email1|escape:"quotes"}" type="text" />
							</div>
							<div class="clear"></div>
							
							<div class="float_l td1 w_180" style="position:relative; top:5px;">Secret question</div>
							<div class="float_l td1">:</div>
							<div class="float_l td1 w_180">
								<input class="w_160" name=sq value="{$frm.sq|escape:"quotes"}" type="text" />
							</div>
							<div class="clear"></div>
							
							<div class="float_l td1 w_180" style="position:relative; top:5px;">Secret answer</div>
							<div class="float_l td1">:</div>
							<div class="float_l td1 w_180">
								<input class="w_160" name=sa value="{$frm.sa|escape:"quotes"}" type="text" />
							</div>
							<div class="clear"></div>

							{if $settings.use_referal_program}
							{if $referer}
							
								<div class="float_l td1 w_180" style="position:relative; top:5px;">Your Upline</div>
								<div class="float_l td1">:</div>
								<div class="float_l td1 w_180">
									<a href="mailto:{$referer.email}">{$referer.name}</a> ({$referer.username})
								</div>
								<div class="clear"></div>
								
							{/if}
							{/if}
							
							<div class="float_l td1 w_180" style="position:relative; top:5px;">
								<input type=checkbox name=agree value=1 {if $frm.agree}checked{/if} > I agree with <a href=?a=rules>Terms and conditions</a>
							</div>
							<div class="clear"></div>
							
							{if $userinfo.validation_enabled == 1}
							<tr>
							 <td class=menutxt align=right><img src="?a=show_validation_image&{$userinfo.session_name}={$userinfo.session_id}&rand={$userinfo.rand}"></td>
							 <td><input type=text name=validation_number class=inpts size=15></td>
							</tr>
							{/if}
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
					 <input value="" style="height:36px; width:116px;" class="register" type="submit"></td>
					</tr>
				   </table>
				  </td>
				 </tr>
			</table>
		</form>
		{/if}
	   </div>
  </td>
 </tr>
</table>	
</td>
{include file="footer.tpl"}

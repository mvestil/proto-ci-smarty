{include file="header.tpl"}

<td align="left" valign="top" class="pad_10" bgcolor="#EFF3F8">
	{literal}
	<script language=javascript>
	function checkform() {
	  if (document.forgotform.email.value == '') {
		alert("Please type your username or email!");
		document.forgotform.email.focus();
		return false;
	  }
	  return true;
	}
	</script>
	{/literal}
	<h3>Forgot your password:</h3><br>

	{if $found_records == 2}
	Your account found. Please check your e-mail address and follow confirm URL to reset your password.
	{else}
	<form method=post name=forgotform onsubmit="return checkform();">
	<input type=hidden name=a value="forgot_password">
	<input type=hidden name=action value="forgot_password">
	<table cellspacing=0 cellpadding=2 border=0>
	<tr>
	 <td>Type your username or e-mail:</td>
	 <td><input type=text name='email' value="" class=inpts size=30></td>
	</tr>
	<tr>
	 <td>&nbsp;</td>
	 <td><input type=submit value="Forgot" class=sbmt></td>
	</tr>
	</table>
	</form><br><br>

	{if $found_records == 0}
	No accounts found
	{elseif $found_records == 1}
	Login and password send to you. Please check your e-mail account
	{/if}
	{/if}
</td>
{include file="footer.tpl"}

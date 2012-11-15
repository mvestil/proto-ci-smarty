{include file="header.tpl"}
<td align="left" valign="top" class="pad_10" bgcolor="#EFF3F8">
<table cellpadding="0" cellspacing="0" width="100%" height="750">
 <tr>
  <td valign="top" align="left">
   <div class="clear h_30 bgcolor_ggr pad_10_l page" align="left">CONTACT US</div>
	{if $say eq 'send'}
	Message has been successfully sent. We will back to you in next 24 hours. Thank you.<br><br>
	{else}
   <div class="clear font_13" align="center">
	<table cellpadding="0" cellspacing="0">
	 <tr>
	  <script language=javascript>
		{if $userinfo.logged == 1}
		{literal}
		function checkform() { 
		  if (document.mainform.message.value == '') {
			alert("Please type your message!");
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
			alert("Please type your full name!");
			document.mainform.name.focus();
			return false;
		  }
		  if (document.mainform.email.value == '') {
			alert("Please enter your e-mail address!");
			document.mainform.email.focus();
			return false;
		  }
		  if (document.mainform.message.value == '') {
			alert("Please type your message!");
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
		 <td>Your Name:</td>
		{if $userinfo.logged}
		 <td><b>{$userinfo.name}</b></td>
		{else}
		 <td><input type="text" name="name" size=30 class=inpts></td>
		{/if}
		</tr>
		<tr>
		 <td>Your Email:</td>
		{if $userinfo.logged}
		 <td><b>{$userinfo.email}</b></td>
		{else}
		 <td><input type="text" name="email" size=30 class=inpts></td>
		{/if}
		</tr>
		<tr>
		 <td colspan=2>Message:<br><br><textarea name=message class=inpts cols=45 rows=4></textarea>
		</tr>
		<tr>
		 <td>&nbsp;</td>
		 <td><input type=submit value="Send" class=sbmt></td>
		</tr></table>
		</form>

		{/if}
	 </tr>
	</table>
   </div>
  </td>
 </tr>
</table>
</td>

{include file="footer.tpl"}

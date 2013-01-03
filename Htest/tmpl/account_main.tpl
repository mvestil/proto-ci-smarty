{include file="header.tpl"}

<td align="left" valign="top" class="pad_10" bgcolor="#EFF3F8">

	<table cellpadding="0" cellspacing="0" width="100%">
	 <tr>
	  <td valign="top" align="left">
	   <div class="clear h_30 bgcolor_ggr pad_10_l page" align="left">MY ACCOUNT</div>
	   
	   
		{if $settings.use_transaction_code ==1 && $userinfo.transaction_code == ''} <b>Note: currently you have not specified 
		a Transaction code. The Transaction code strengthens your funds security in our 
		system. The code is required to withdraw funds from your account{if $settings.internal_transfer_enabled} 
		and for internal transfer to another user account{/if}. Just do not change 'Transaction 
		code' in your account information if you do not want to use this feature. <a href=?a=edit_account>Click 
		here</a> to specify a new transaction code .</b> <br>
		<br>
		{/if}
	   
	   
	   <div class="clear font_13 pad_10_t" align="center">
		<table cellpadding="0" cellspacing="0" width="100%">
		 <tr>
		  <td width="495" valign="top">
		   <table cellpadding="0" cellspacing="0" width="100%">
			<tr>
			 <td class="h_75 pad_10_l pad_10_t" bgcolor="#F8BD0B" align="left" valign="top">Account Balance:</td>
			 <td class="h_75 pad_10_r" bgcolor="#F8BD0B" align="right" valign="middle">
				<span style="font-size:20px; font-weight:bold;">{$currency_sign}<b>{$ab_formated.total}</b></span><br />
				<span style="font-size:12px; color:#333333;">
					{section name=p loop=$ps}
					   {if $ps[p].balance > 0}{$currency_sign}{$ps[p].balance} of {$ps[p].name}<br>{/if}
					{/section}
				</span>
			</td>
			</tr>
			<tr><td colspan="2" class="h_2"><img src="images/b.gif" /></td></tr>
			<tr>
			 <td class="l_blue" style="padding:8px 0px 8px 10px;" align="left" valign="middle">Earned Total:</td>
			 <td class="l_blue" style="padding:8px 10px 8px 0px;" align="right" valign="middle">
				{$currency_sign}<b>{$ab_formated.earning}
			 </td>
			</tr>
			<tr><td colspan="2" class="h_2"><img src="images/b.gif" /></td></tr>
			<tr>
			 <td class="l_blue" style="padding:8px 0px 8px 10px;" align="left" valign="middle">Pending Withdrawal:</td>
			 <td class="l_blue" style="padding:8px 10px 8px 0px;" align="right" valign="middle">
				{$currency_sign}<b>{$ab_formated.withdraw_pending}
			 </td>
			</tr>
			<tr><td colspan="2" class="h_2"><img src="images/b.gif" /></td></tr>
			<tr>
			 <td class="l_blue" style="padding:8px 0px 8px 10px;" align="left" valign="middle">Active Deposit:</td>
			 <td class="l_blue" style="padding:8px 10px 8px 0px;" align="right" valign="middle">
				{$currency_sign}<b>{$ab_formated.active_deposit}
			 </td>
			</tr>
			<tr><td colspan="2" class="h_2"><img src="images/b.gif" /></td></tr>
			<tr>
			 <td class="l_blue" style="padding:8px 0px 8px 10px;" align="left" valign="middle">Last Deposit:</td>
			 <td class="l_blue" style="padding:8px 10px 8px 0px;" align="right" valign="middle">
				{$currency_sign}<b>{$last_deposit}</b><br />
				<span style="font-size:11px; color:#333333;">
					{$last_deposit_date}
				</span>
			 </td>
			</tr>
			<tr><td colspan="2" class="h_2"><img src="images/b.gif" /></td></tr>
			<tr>
			 <td class="l_blue" style="padding:8px 0px 8px 10px;" align="left" valign="middle">Total Deposit:</td>
			 <td class="l_blue" style="padding:8px 10px 8px 0px;" align="right" valign="middle">
				{$currency_sign}<b>{$ab_formated.deposit}
			 </td>
			</tr>
			<tr><td colspan="2" class="h_2"><img src="images/b.gif" /></td></tr>
			<tr>
			 <td class="l_blue" style="padding:8px 0px 8px 10px;" align="left" valign="middle">Last Withdrawal:</td>
			 <td class="l_blue" style="padding:8px 10px 8px 0px;" align="right" valign="middle">
				{$currency_sign}<b>{$last_withdrawal}</b><br />
				<span style="font-size:11px; color:#333333;">
					{$last_withdrawal_date}
				</span>
			 </td>
			</tr>
			<tr><td colspan="2" class="h_2"><img src="images/b.gif" /></td></tr>
			<tr>
			 <td class="l_blue" style="padding:8px 0px 8px 10px;" align="left" valign="middle">Withdraw Total:</td>
			 <td class="l_blue" style="padding:8px 10px 8px 0px;" align="right" valign="middle">
				{$currency_sign}<b>{$ab_formated.withdrawal}
			 </td>
			</tr>
		   </table>
		  </td>
		  <td class="w_2"><img src="images/b.gif" /></td>
		  <td valign="top">
		   <table cellpadding="0" cellspacing="0" width="100%">
			<tr><td bgcolor="#E1E1E1" style="padding:8px 0px 8px 0px;" align="center">{$userinfo.username}<br />
				<span style="font-size:12px; color:#5C5C5C;">User</span>
			</td></tr>
			<tr><td class="h_2"><img src="images/b.gif" /></td></tr>
			<tr><td bgcolor="#E1E1E1" style="padding:8px 0px 8px 0px;" align="center">{$userinfo.create_account_date}<br />
				<span style="font-size:12px; color:#5C5C5C;">Registration Date</span>
			</td></tr>
			<tr><td class="h_2"><img src="images/b.gif" /></td></tr>
			<tr><td bgcolor="#E1E1E1" style="padding:8px 0px 8px 0px;" align="center">{$last_access}<br />
				<span style="font-size:12px; color:#5C5C5C;">Last Access</span>
			</td></tr>
		   </table>
		  </td>
		 </tr>
		</table>
	   </div>
	  </td>
	 </tr>
	</table>
</td>


{include file="footer.tpl"}

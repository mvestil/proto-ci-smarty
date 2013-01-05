{include file="header.tpl"}

<td align="left" valign="top" class="pad_10" bgcolor="#EFF3F8">

	<form method=post name="spendform">
	<input type=hidden name=a value=deposit>
	
					
        <table cellpadding="0" cellspacing="0" width="100%" height="750">
		
			<tr>
			<td>
			{if $frm.say eq 'deposit_success'}
				<h3>The deposit has been successfully saved.</h3>
				<br><br>
				{/if}

				{if $frm.say eq 'deposit_saved'}
				<h3>The deposit has been saved. It will become active when the administrator checks statistics.</h3><br><br>
				{/if}
			</td>
			</tr>
			
         <tr>
          <td valign="top" align="left">
           <div class="clear h_30 bgcolor_ggr pad_10_l page" align="left">MAKE A DEPOSIT</div>
           <div class="clear font_13 pad_10_t" align="center">
            <table cellpadding="0" cellspacing="0" width="100%">
             <tr>
	          <td colspan="6" align="center" class="pad_15_b"><img src="images/investment_package.jpg" width="702"  height="223"/></td>
	         </tr>
			 <tr>
				<td height="15px"></td>
			 </tr>
			 {section name=plans loop=$plans}
             <tr>
				<td>
					{if $qplans > 1}
				<input type=radio name=h_id value='{$plans[plans].id}' {if (($smarty.section.plans.first == 1) && ($frm.h_id eq '')) || ($frm.h_id == $plans[plans].id)} checked {/if} > 
			<!--	<input type=radio name=h_id value='{$plans[plans].id}' {if (($smarty.section.plans.first == 1) && ($frm.h_id eq '')) || ($frm.h_id == $plans[plans].id)} checked {/if} {if $compounding_available > 0}onclick="document.spendform.compound.disabled={if $plans[plans].use_compound == 1}false{else}true{/if};"{/if}> -->
			{else}
				<input type=hidden name=h_id value='{$plans[plans].id}'>
			{/if}
				</td>
	          <td class="td3"><b>Plan:</b> {$plans[plans].name}</td>
	          <td width="2"></td>
	          <td class="td3"><b>Details:</b>&nbsp;
			  {if $smarty.section.plans.index == 0}
				2% Daily for 150 Days
			  {else if $smarty.section.plans.index == 1}
			    2.5% Daily for 90 Days
			  {else if $smarty.section.plans.index == 2}
			    3% Daily for 60 Days
			  {else if $smarty.section.plans.index == 3}
			    3.5% Daily for 35 Days
			  {/if}
			  </td>
	          <td width="2"></td>
	          <td class="td3"><b>Spent Amount ($):</b>&nbsp; 
				  {section name=options loop=$plans[plans].plans}
						{$plans[plans].plans[options].deposit}
				  {/section}
			  </td>
	         </tr>
			 {/section}
			 <tr>
				<td height="40px"></td>
			 </tr>
			 
	         <tr>
	          <td colspan="6" align="center" class="td1 pad_10_t">
	           <table cellpadding="0" cellspacing="0">
	            <tr>
	             <td class="td1" valign="top">Your account balance ({$currency_sign}):</td>
	             <td>
                  <div class="float_l td1 w_160" style="height:67px;">
                   <div class="clear" align="right"><b>{$currency_sign}{$ab_formated.total}</b></div>
				   {section name=p loop=$ps}
				    <div class="clear" align="right">{if $ps[p].balance > 0}{$currency_sign}{$ps[p].balance} of {$ps[p].name}{if $hold[p].amount > 0} / {$currency_sign}{$hold[p].amount} on hold{/if}<br>{/if}</div>
				   {/section}
                  </div>
	         	</td>
	            </tr>
	            <tr>
	             <td class="td1">Amount to Spend ({$currency_sign}):</td>
	             <td class="td1" align="right"><input style="text-align:right;" class="w_100" name="amount" value='{$min_deposit}' type="text" /></td>
	            </tr>
	           </table>
         	 </td>
         	</tr>
         	<tr>
         	 <td colspan="6" align="center" class="font_13 pad_20_t">
         	  <table cellpadding="0" cellspacing="0">
				
				{section name=p loop=$ps}
				   {if $ps[p].balance > 0 and $ps[p].status == 1}
					<tr>
					 <td><input type=radio name=type value="account_{$ps[p].id}"></td>
					 <td>Spend funds from the Account Balance {$ps[p].name}</td>
					</tr>
				   {/if}
				{/section}
				{section name=p loop=$ps}
				   {if $ps[p].status}
					<tr>
					 <td><input type=radio name=type value="process_{$ps[p].id}" {if $smarty.section.p.index == 0}checked{/if}></td>
					 <td>Spend funds from {$ps[p].name}</td>
					</tr>
				   {/if}
				{/section}

	            <tr>
	             <td colspan="2" class="pad_20_t" align="center"><button style="width:103px;" type="submit" class="spend"></button></td>
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
		{literal}
			<script language=javascript>
			for (i = 0; i<document.spendform.type.length; i++) {
			  if ((document.spendform.type[i].value.match('/process_/'))) {
				document.spendform.type[i].checked = true;
				break;
			  }
			}
			</script>
		{/literal}
       </td>
{include file="footer.tpl"}

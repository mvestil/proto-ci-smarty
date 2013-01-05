{include file="header.tpl"}


<td align="left" valign="top" class="pad_10" bgcolor="#EFF3F8">
        <table cellpadding="0" cellspacing="0" width="100%" height="750">
         <tr>
          <td valign="top" align="left">
           <div class="clear h_30 bgcolor_ggr pad_10_l page" align="left">MY DEPOSITS</div>
           <div class="clear font_13 pad_10_t" align="center">
            <table cellpadding="0" cellspacing="0" width="100%">
			<!--
             <tr>
	          <td colspan="5" align="center" class="pad_15_b"><img src="images/investment_package.jpg" width="702"  height="223"/></td>
	         </tr>
			-->
			<tr>
				<td class="td1">
					Total : <b>{$currency_sign}{$total}</b>
				</td>
			</tr>
			<tr>
				<td height="20px">
				</td>
			</tr>
			
			{section name=plans loop=$plans}
			
             <tr>
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
	         <tr><td colspan="5" height="2"></td></tr>
	         <tr>
	          <!--<td colspan="5" class="pad_20_t">-->
			  <td colspan="5" class="">
	           <table cellpadding="0" cellspacing="0" width="100%">
			   {if !$plans[plans].deposits}
				<tr>
	             <td class="td1" align="left">
	         	 <table cellpadding="0" cellspacing="0" width="100%">
		           <tr>
		            <td align="left">You have no deposits for this plan</td>
		           </tr>
	         	 </table>
	         	</td>
	            </tr>
			   {else}
				{section name=deposit loop=$plans[plans].deposits}
	            <tr>
	             <td class="td1" align="left">
	         	 <table cellpadding="0" cellspacing="0" width="100%">
		           <tr>
		            <td align="left">{$plans[plans].deposits[deposit].date}&nbsp;&nbsp;&nbsp;&nbsp;Expire in {$plans[plans].deposits[deposit].expire_in} days</td>
		            <td align="right">{$currency_sign}{$plans[plans].deposits[deposit].deposit}&nbsp;&nbsp;<span style="position:relative; top:3px;"><img src="images/{$plans[plans].deposits[deposit].ec}.gif" /></span></td>
		           </tr>
	         	 </table>
	         	</td>
	            </tr>
	            <tr><td colspan="3" height="2"></td></tr>
	            
				{/section}
				{/if}
         	   <!--<tr><td colspan="3" height="2"></td></tr>-->
         	  </table>
         	 </td>
         	</tr>
			{if $plans[plans].total_deposit > 0 || $plans[plans].today_profit > 0 || $plans[plans].total_profit > 0}
         	<tr>
	          <td colspan="5" style="color:#666;" class="pad_10_t pad_10_l">
	           <div class="float_l w_120">Deposited Total:</div>
	           <div class="float_l"><b>{$currency_sign} {$plans[plans].total_deposit}</b></div>
	           <div class="clear"></div>
	           <div class="float_l w_120">Profit Today:</div>
	           <div class="float_l"><b>{$currency_sign} {$plans[plans].today_profit}</b></div>
	           <div class="clear"></div>
	           <div class="float_l w_120">Total Profit:</div>
	           <div class="float_l"><b>{$currency_sign} {$plans[plans].total_profit}</b></div>
	          </td>
	         </tr>
			{/if}
			<tr>
				<td height="20px"></td>
			</tr>
			{/section}
            </table>
		   </div>
          </td>
         </tr>
        </table>
       </td>


{include file="footer.tpl"}

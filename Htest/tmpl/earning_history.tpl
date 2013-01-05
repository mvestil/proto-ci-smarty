{include file="header.tpl"}

<td align="left" valign="top" class="pad_10" bgcolor="#EFF3F8">


{literal}
<script language=javascript>
function go(p)
{
  document.opts.page.value = p;
  document.opts.submit();
}
</script>
{/literal}

<table cellspacing=0 cellpadding=0 border=0 width=100%>
	<table cellpadding="0" cellspacing="0" width="100%" height="750">
	 <tr>
	  <td valign="top" align="left">
	   <div class="clear h_30 bgcolor_ggr pad_10_l page" align="left">EARNINGS HISTORY</div>
	   <div class="clear font_13 pad_15_t" align="center">
		<table cellpadding="0" cellspacing="0" width="100%">
		<tr>
		 <td colspan="5" class="pad_20_b" align="center">
		  <table cellpadding="0" cellspacing="0">
		   <tr>
			<form method=post name=opts>
			<input type=hidden name=a value=earnings>
			<input type=hidden name=page value={$current_page}>
				<td class="pad_20_b">
					<select name=type class=select_190 onchange="document.opts.submit();">
						<option value="">All transactions</option>
						{section name=opt loop=$options}
						<option value="{$options[opt].type}" {if $options[opt].selected}selected{/if}>{$options[opt].type_name}</option>
						{/section}
					</select>
				</td>
				
				{if 1}
					<td class="pad_20_b">
					   <select name=ec class=select_190>
						 <option value=-1>All eCurrencies</option>
							{section name=ec loop=$ecs}
							 <option value={$ecs[ec].id} {if $frm.ec eq $ecs[ec].id}selected{/if}>{$ecs[ec].name}</option>
							{/section}
					   </select>
					</td>
				{/if}
									
				<td></td>
			   </tr>
			   <tr>
				<td align="left" width="220" style="color:#666666">
				 <div><b>From:</b></div>
				 <div class="float_l">
					<select name=month_from class=select_60>
						{section name=month_from loop=$month}
						<option value={$smarty.section.month_from.index+1} {if $smarty.section.month_from.index+1 == $frm.month_from}selected{/if}>{$month[month_from]}
						{/section}
					</select>
				</div>
				 <div class="float_l pad_5_l">
					<select name=day_from class=select_60>
						{section name=day_from loop=$day}
						<option value={$smarty.section.day_from.index+1} {if $smarty.section.day_from.index+1 == $frm.day_from}selected{/if}>{$day[day_from]}
						{/section}
					</select>
				</div>
				 <div class="float_l pad_5_l">
					<select name=year_from class=select_60>
						{section name=year_from loop=$year}
						<option value={$year[year_from]} {if $year[year_from] == $frm.year_from}selected{/if}>{$year[year_from]}
						{/section}
					</select>
				</div>
				 <div class="clear"></div>
				</td>
				<td align="left" width="220" style="color:#666666">
				 <div><b>To:</b></div>
				 <div class="float_l">
					<select name=month_to class=select_60>
						{section name=month_to loop=$month}
						<option value={$smarty.section.month_to.index+1} {if $smarty.section.month_to.index+1 == $frm.month_to}selected{/if}>{$month[month_to]}
						{/section}
					</select>
				</div>
				 <div class="float_l pad_5_l">
					<select name=day_to class=select_60>
						{section name=day_to loop=$day}
						<option value={$smarty.section.day_to.index+1} {if $smarty.section.day_to.index+1 == $frm.day_to}selected{/if}>{$day[day_to]}
						{/section}
					</select>
				</div>
				 <div class="float_l pad_5_l">
					<select name=year_to class=select_60>
						{section name=year_to loop=$year}
						<option value={$year[year_to]} {if $year[year_to] == $frm.year_to}selected{/if}>{$year[year_to]}
						{/section}
					</select>
				</div>
				</td>
				<td valign="bottom" align="left"><input value="" style="height:36px; width:116px;" class="go" type="submit"></td>
			
			</form>
		   </tr>
		  </table>
		 </td>
		</tr>
		 <tr>
		 <td class="td3" align="center"><b>Type</b></td>
		 <td width="2"></td>
		  <td class="td3" align="center"><b>Amount</b></td>
		  <td width="2"></td>
		  <td class="td3" align="center"><b>Date</b></td>
		 </tr>
		 <tr><td colspan="5" height="2"></td></tr>
		 
		 {if $qtrans > 0}
			{section name=trans loop=$trans}
				<tr>
				 <td align="left" class="td1"><b>{$trans[trans].transtype}</b>
				 &nbsp;&nbsp;<br /><span style="font-size:11px;">{$trans[trans].description}</span>
				 </td>
							  <td></td>
				 <td align="right" class="td1">{$currency_sign} {$trans[trans].actual_amount}&nbsp;&nbsp;<span><img src="images/{$trans[trans].ec}.gif" /></span></td>
							  <td></td>	
				 <td align="right" class="td1">{$trans[trans].d}</td>
				 <tr><td colspan="5" height="2"></td></tr> 
				</tr>
			{/section}
		{else}
			<tr>
			 <td colspan=3 align=center>No transactions found</td>
			</tr>
		{/if}
		 
		 <tr>
		  <td colspan="5" style="color:#666;" class="pad_10_t pad_10_l pad_40_b">
		   <div class="float_l w_120">For this period:</div>
		   <div class="float_l"><b>{$currency_sign} {$periodsum}</b></div>
		   <div class="clear"></div>
		   <div class="float_l w_120">Total:</div>
		   <div class="float_l"><b>{$currency_sign} {$allsum}</b></div>
		  </td>
		 </tr>
		 <tr><td colspan="5" height="1" bgcolor="#DFDFDF"><img src="images/b.gif" /></td></tr>
		 <tr><td colspan="5" height="1" bgcolor="#FFFFFF"><img src="images/b.gif" /></td></tr>
		 <tr>
		  <td colspan="5" style="color:#666;" class="pad_10_t pad_10_l">
		  
			{if $colpages > 1}
			<center>
				{if $prev_page > 0}
				 <div class="float_l pad_5_l"><a class="d_blk" href="javascript:go('{$prev_page}')">&lt;&lt;</a></div>
				{/if}
				{section name=p loop=$pages}
				{if $pages[p].current == 1}
				<div class="float_l pad_5_l">{$pages[p].page}</div>
				{else}
				 <div class="float_l pad_5_l"><a class=d_blk href="javascript:go('{$pages[p].page}')"><b>{$pages[p].page}</b></a></div>
				{/if}
				{/section}
				{if $next_page > 0}
				 <div class="float_l pad_5_l"><a class="d_blk" href="javascript:go('{$next_page}')">&gt;&gt;</a></div>
				{/if}
			</center>
			{/if}
			
			{* new design
			<div class="float_l pad_5_l"><a href="#" class="d_blk"><b>1</b></a></div>
			<div class="float_l pad_5_l"><a href="#" class="d_blk"><b>2</b></a></div>
			<div class="float_l pad_5_l"><a href="#" class="d_blk"><b>3</b></a></div>
			 *}
		  </td>
		 </tr>
		</table>
	   </div>
	  </td>
	 </tr>
	</table>
</td>

{include file="footer.tpl"}

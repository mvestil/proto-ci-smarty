{if $userinfo.logged != 1}
{literal}
<script language=javascript>
function checklogin() {   
  if (document.loginform.username.value=='') {
    alert("Please enter your username!");
    document.loginform.username.focus();
    return false;
  }
  if (document.loginform.password.value=='') {
    alert("Please enter your password!");
    document.loginform.password.focus();
    return false;
  }
  document.loginform.submit();
  //return true;
}
</script>
{/literal}

<div id="nav2" align="center">
     <table cellpadding="0" cellspacing="0" width="998">
      <tr>
       <td class="w_269" valign="top">
	   <form method=post name=loginform onsubmit="return checklogin()">
		<input type=hidden name=a value='do_login'>
		<input type=hidden name=follow value='{$frm.follow}'>
        <table cellpadding="0" cellspacing="0" width="100%">
         <tr>
          <td class="h_96 login_header" align="center" valign="bottom">
           <div style="margin-left:37px; margin-right:37px; padding-bottom:11px;">
            <div class="txt_11" align="left"><b>USER ID</b></div>
            <div class="clear pad_3_b pad_3_t" align="left">
			<input name=username class="txt_13 txtfield_193" type="text" /></div>
            <div class="clear e_g" align="left">(e.g. sampleid031)</div>
           </div>
          </td>
         </tr>
         <tr>
          <td class="h_280 login_bg" align="center" valign="top">
           <div style="margin-left:37px; margin-right:37px;">
            <div class="txt_11" align="left"><b>PASSWORD</b></div>
            <div class="clear pad_3_b pad_3_t" align="left">
			<input name=password class="txt_13 txtfield_193" type="password" /></div>
            <div class="clear pad_20_b"></div>
            {*<div class="clear">
             <div class="float_l"><input name="" type="checkbox" value="" /></div>
             <div class="float_l txt_11" align="left">
              <div class="clear pad_3_t pad_3_b pad_3_l">Keep me signed in</div>
              <div class="clear pad_3_l">Uncheck if on a shared computer)</div>
             </div>
            </div>*}
            <div class="clear h_20"></div>
            <div class="clear" align="center">
             <table cellpadding="0" cellspacing="0">
				{if $userinfo.validation_enabled == 1}
					<tr>
					 <td class=menutxt><img src="?a=show_validation_image&{$userinfo.session_name}={$userinfo.session_id}&rand={$userinfo.rand}"></td>
					 <td><input type=text name=validation_number class=inpts size=15></td>
					</tr>
				{/if}
              <tr>
               <td align="center">
			   <a href="#" onclick="return checklogin()">
			   <div class="clear" align="center">
				 <table cellpadding="0" cellspacing="0">
				  <tr>
				   <td align="center"><input value="" style="height:32px; width:79px;" class="signin_btn" type="submit"></td>
				  </tr>
				 </table>
				</div>
              </tr>
             </table>
            </div>
            <div class="clear pad_16_t txt_11" align="center"><a href=?a=forgot_password class="fpass">Forgot Password</a></div>
            <div class="clear h_20"></div>
            <div class="clear divider_login"><img src="images/b.gif" /></div>
            <div class="clear h_28"></div>
            <div class="clear" align="center">
             <table cellpadding="0" cellspacing="0">
              <tr>
               <td align="center"><a href=?a=signup ><div class="sign_up" style="float:left;"></div></a></td>
              </tr>
             </table>
            </div>
           </div>
          </td>
         </tr>
         <tr>
          <td class="h_20 nav2_footer"><img src="images/b.gif" /></td>
         </tr>
        </table>
        </form>
		<div class="pad_16_t" align="left"><img src="images/we_accept.jpg" width="259" height="190" /></div>
        <div class="clear pad_16_t pad_16_b"><img src="images/benefits.jpg" width="259" height="233" /></div>
		<div class="clear pad_16_t pad_15_b sidelinks"></div>
       </td>

{else}

<div id="nav2" align="center">
     <table cellpadding="0" cellspacing="0" width="998">
      <tr>
       <td class="w_269" valign="top">
        <table cellpadding="0" cellspacing="0" width="100%">
         <tr>
          <td class="h_38 nav2"><img src="images/b.gif" /></td>
         </tr>
         <tr>
          <td class="h_320 nav2_bg" align="center" valign="top">
           <table cellpadding="0" cellspacing="0">
            <tr>
             <td id="personal_nav">
              <div class="clear"><a href=?a=account><div class="my_account" style="float:left;"></div></a></div>
              <div class="clear"><a href=?a=deposit><div class="make_deposit" style="float:left;"></div></a></div>
              <div class="clear"><a href=?a=deposit_list><div class="my_deposit" style="float:left;"></div></a></div>
              <div class="clear"><a href=?a=deposit_history><div class="deposits_history" style="float:left;"></div></a></div>
              <div class="clear"><a href=?a=earnings><div class="earning_history" style="float:left;"></div></a></div>
			  <div class="clear"><a href=?a=withdraw><div class="withdraw" style="float:left;"></div></a></div>
              <div class="clear"><a href=?a=withdraw_history><div class="withdrawal_history" style="float:left;"></div></a></div>
              <div class="clear"><a href=?a=referals><div class="my_referrals" style="float:left;"></div></a></div>
              <div class="clear"><a href=?a=earnings&type=commissions><div class="referrals_history" style="float:left;"></div></a></div>
              <div class="clear"><a href=?a=referallinks><div class="referral_links" style="float:left;"></div></a></div>
              <div class="clear"><a href=?a=edit_account><div class="edit_account" style="float:left;"></div></a></div>
			  <div class="clear"><a href=?a=logout><div class="logout_nav" style="float:left;"></div></a></div>
             </td>
            </tr>
           </table>
          </td>
         </tr>
         <tr>
          <td class="h_20 nav2_footer"><img src="images/b.gif" /></td>
         </tr>
        </table>
        <div class="pad_16_t" align="left"><img src="images/we_accept.jpg" width="259" height="190" /></div>
        <div class="clear pad_16_t pad_20_b"><img src="images/benefits.jpg" width="259" height="233" /></div>
       </td>



{/if}

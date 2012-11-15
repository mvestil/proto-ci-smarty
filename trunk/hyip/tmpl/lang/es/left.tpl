				   <!-- Image Table: Start --><head>
<link href="../style.css" rel="stylesheet" type="text/css" />


					</head>

					




					{if $frm.a ne 'login'}{include file="login_box.tpl"}{/if}
					{if $settings.show_stats_box}
<br>
{include file="stats_box.tpl"}
{/if}
                                   
{if $settings.show_info_box}
<br>
{include file="news_box.tpl"}
<br>
{include file="info_box.tpl"}

{/if}


<!-- Image Table: Start -->
<br>
<table id="Table_" width="216" height="45" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td height="45" colspan="6" align="center" valign="top"><p></a>
      {if $userinfo.logged !=1}</a>{else}{/if}<br>
	</a></p>
      <!-- RedControl.com.ar License checker: START -->
      <!-- RedControl.com.ar License checker: END -->
    </tr>
</table>
<!-- Image Table: End -->
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>{$settings.site_name}</title>
<link href="style.css" rel="stylesheet" type="text/css">
</head>

<body bgcolor="#FFFFF2" link="#666699" vlink="#666699" alink="#666699" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0" >
<center>
<table width="760" border="0" cellpadding="0" cellspacing="0" height=100%>
  <tr> 
    <td valign=top height=142>
      <table cellspacing=0 cellpadding=0 border=0 width=100% height=142>
	    <tr>
		  <td background="images/ver.gif" class=toptable><img src="images/top.gif" width=304 height=142 border="0" align=left></td>
		  <td background="images/ver.gif" class=toptable valign=bottom align=right>

<b>
<a href=?a=home class=toplink>Inicio</a> &middot; 
<a href=?a=faq class=toplink>FAQ</a> &middot; 
<a href=?a=rules class=toplink>Reglas</a> &middot; 
{if $userinfo.logged != 1}
<a href=?a=signup class=toplink>Registro</a> &middot; 
<a href=?a=login class=toplink>Login</a> &middot; 
{else}
<a href=?a=logout class=toplink>Cerrar Sesion</a> &middot; 
{/if}
<a href=?a=support class=toplink>Soporte</a></b>&nbsp; &nbsp;</td>
 	    </tr>
	    <tr>
	      <td background="images/ver.gif" class=toptable><a href="index.php?language=es"><img src="{$settings.site_url}/es.gif" width="16" height="11" border="0"></a> <a href="index.php?language=default"><img src="{$settings.site_url}/gb.gif" width="16" height="11" border="0"></a></td>
	      <td background="images/ver.gif" class=toptable valign=bottom align=right>&nbsp;</td>
        </tr>
	  </table>
    </td>
  </tr>

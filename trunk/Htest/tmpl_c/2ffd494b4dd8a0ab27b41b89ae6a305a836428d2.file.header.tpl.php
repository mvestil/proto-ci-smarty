<?php /* Smarty version Smarty-3.1.11, created on 2012-11-15 10:40:44
         compiled from ".\tmpl\header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:784550a4c6ac50e726-32083377%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2ffd494b4dd8a0ab27b41b89ae6a305a836428d2' => 
    array (
      0 => '.\\tmpl\\header.tpl',
      1 => 1351685599,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '784550a4c6ac50e726-32083377',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'settings' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_50a4c6ac59a470_27371079',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50a4c6ac59a470_27371079')) {function content_50a4c6ac59a470_27371079($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("logo.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php if ($_smarty_tpl->tpl_vars['settings']->value['reverse_columns']){?>
  <tr> 
    <td valign="top">
	 <table cellspacing=0 cellpadding=1 border=0 width=100% height=100%  class=line>
	   <tr>
	     <td>
           <table width="100%" height="100%" border="0" cellpadding="0" cellspacing="0">
             <tr class=bgcolorleft valign="top"> 
<?php if ($_smarty_tpl->tpl_vars['settings']->value['show_news_box']){?>
              <td width=300 align=center class=bgcolorright><img src="images/q.gif" width=180 height=1>
<?php if ($_smarty_tpl->tpl_vars['settings']->value['show_news_box']){?>
<?php echo $_smarty_tpl->getSubTemplate ("news_box.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }?>
              </td>
              <td class=line valign="top" width=1><img src=images/q.gif width=1 height=1></td>
<?php }?>

              <td class=bgcolormain valign="top" width=99%<?php ?>>
            <!-- Main: Start -->
            <table width="100%" height="100%" border="0" cellpadding="10" cellspacing="0" class="forTexts">
              <tr>
                <td width=100% height=100% valign=top>
<div class=framebody>

<?php }else{ ?>

  
<?php echo $_smarty_tpl->getSubTemplate ("left.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

              
<?php }?><?php }} ?>
<?php /* Smarty version Smarty-3.1.11, created on 2012-11-15 10:40:44
         compiled from ".\tmpl\left.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2717950a4c6ac631311-16927598%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'aa7d452813bdeb02102c4afb5c045871083a5b96' => 
    array (
      0 => '.\\tmpl\\left.tpl',
      1 => 1351685662,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2717950a4c6ac631311-16927598',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'frm' => 0,
    'settings' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_50a4c6ac69ee98_57126097',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50a4c6ac69ee98_57126097')) {function content_50a4c6ac69ee98_57126097($_smarty_tpl) {?>				   <!-- Image Table: Start -->
<?php if ($_smarty_tpl->tpl_vars['frm']->value['a']!='login'){?>
<?php echo $_smarty_tpl->getSubTemplate ("login_box.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }?>
				   
<?php if ($_smarty_tpl->tpl_vars['settings']->value['show_stats_box1']){?>
<br>
<?php echo $_smarty_tpl->getSubTemplate ("stats_box.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }?>
                                   
<?php if ($_smarty_tpl->tpl_vars['settings']->value['show_info_box1']){?>
<br>
<?php echo $_smarty_tpl->getSubTemplate ("info_box.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }?>


<?php }} ?>
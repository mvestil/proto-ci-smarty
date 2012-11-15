<?php /* Smarty version Smarty-3.1.11, created on 2012-11-15 10:25:24
         compiled from ".\tmpl\login_redirect.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2008150a4c314c49b10-57819897%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '89ac0a64b063eca10d5d35b0ca8761ed921692ee' => 
    array (
      0 => '.\\tmpl\\login_redirect.tpl',
      1 => 1125515454,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2008150a4c314c49b10-57819897',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'userinfo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_50a4c314cd6442_39322714',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50a4c314cd6442_39322714')) {function content_50a4c314cd6442_39322714($_smarty_tpl) {?><html>
<head>
<META HTTP-EQUIV=Refresh CONTENT="0; URL=?a=account">
</head>
<body>
<center>
Hello <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['userinfo']->value['username'], ENT_QUOTES, 'UTF-8', true);?>
. You are redirecting to your 
<a href=?a=account>account</a> now.
<body>
</html><?php }} ?>
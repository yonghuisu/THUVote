<?php /* Smarty version Smarty-3.1.18, created on 2014-04-11 05:19:05
         compiled from ".\templates\test.html" */ ?>
<?php /*%%SmartyHeaderCode:1007453477b490d98d9-63821407%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8f40c475b930864f8f5e4d205f775814a15d17cf' => 
    array (
      0 => '.\\templates\\test.html',
      1 => 1397193542,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1007453477b490d98d9-63821407',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'abc' => 0,
    'bcd' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_53477b49175d03_29211048',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53477b49175d03_29211048')) {function content_53477b49175d03_29211048($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Insert title here</title>
</head>
<body>
<?php $_smarty_tpl->tpl_vars["bcd"] = new Smarty_variable("everyone!", null, 0);?>
<?php echo $_smarty_tpl->tpl_vars['abc']->value;?>
--<?php echo $_smarty_tpl->tpl_vars['bcd']->value;?>

</body>
</html><?php }} ?>

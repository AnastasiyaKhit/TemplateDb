<?php /* Smarty version Smarty-3.1.21, created on 2015-05-25 01:35:41
         compiled from ".\templates\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:95495561f1c171e0f5-59185165%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '072ed2cc3a7d0f0831d59ddab2bec99dae59eeaa' => 
    array (
      0 => '.\\templates\\index.tpl',
      1 => 1432503337,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '95495561f1c171e0f5-59185165',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5561f1c1818a51_09950059',
  'variables' => 
  array (
    'title' => 0,
    'user' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5561f1c1818a51_09950059')) {function content_5561f1c1818a51_09950059($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
    <link href="./bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="./bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">
    <link href="./dist/css/timeline.css" rel="stylesheet">
    <link href="./dist/css/sb-admin-2.css" rel="stylesheet">
    <link href="./bower_components/morrisjs/morris.css" rel="stylesheet">
    <link href="./bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
</head>

<body>
    
    <?php if ($_smarty_tpl->tpl_vars['user']->value=="0") {?>
        <?php echo $_smarty_tpl->getSubTemplate ("context.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <?php } else { ?>
        <?php echo $_smarty_tpl->getSubTemplate ("login.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <?php }?>


    <!-- jQuery -->
    <?php echo '<script'; ?>
 src="./bower_components/jquery/dist/jquery.min.js"><?php echo '</script'; ?>
>

    <!-- Bootstrap Core JavaScript -->
    <?php echo '<script'; ?>
 src="./bower_components/bootstrap/dist/js/bootstrap.min.js"><?php echo '</script'; ?>
>

    <!-- Metis Menu Plugin JavaScript -->
    <?php echo '<script'; ?>
 src="./bower_components/metisMenu/dist/metisMenu.min.js"><?php echo '</script'; ?>
>

    <!-- Morris Charts JavaScript -->
    <?php echo '<script'; ?>
 src="./bower_components/raphael/raphael-min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="./bower_components/morrisjs/morris.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="./js/morris-data.js"><?php echo '</script'; ?>
>

    <!-- Custom Theme JavaScript -->
    <?php echo '<script'; ?>
 src="./dist/js/sb-admin-2.js"><?php echo '</script'; ?>
>

</body>

</html>
<?php }} ?>

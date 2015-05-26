<?php /* Smarty version Smarty-3.1.21, created on 2015-05-26 01:34:25
         compiled from ".\templates\update.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4033556393e5b611b2-72395824%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e2bae82d6439aae49e351c35dc4b1f1c13400e1c' => 
    array (
      0 => '.\\templates\\update.tpl',
      1 => 1432589639,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4033556393e5b611b2-72395824',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_556393e5ce8112_07050140',
  'variables' => 
  array (
    'res' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_556393e5ce8112_07050140')) {function content_556393e5ce8112_07050140($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Редактирование</title>

    <!-- Bootstrap Core CSS -->
    <link href="./bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="./bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->


    <!-- Custom Fonts -->
    <link href="./bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    
        <link href="./dist/css/sb-admin-2.css" rel="stylesheet">
        <link href="./css/style.css" rel="stylesheet">

</head>

<body>

    <div id="wrapper">
        <?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

        <div id="page-wrapper">
                <div class="panel panel-default">
                    <div class="panel-heading"><i class="fa fa-clock-o fa-fw"></i> Лента новостей</div>
                    <div class="panel-body">
                            <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['res']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
                                    <div class ="delete_news">
                                    <div class="delete_title"><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</div>
                                    <div class="delete_summary"><?php echo $_smarty_tpl->tpl_vars['item']->value['summary'];?>
</div>
                                    <div class="date"> Дата публикации <?php echo $_smarty_tpl->tpl_vars['item']->value['date'];?>
</div>
                                    <a class="delete_news_link"  href="./update.php?id=<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
">Редактировать</a></div>
                            <?php } ?>
                    </div>
            </div>
        </div>
    </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

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

    <!-- Custom Theme JavaScript -->
    <?php echo '<script'; ?>
 src="./dist/js/sb-admin-2.js"><?php echo '</script'; ?>
>

</body>

</html><?php }} ?>

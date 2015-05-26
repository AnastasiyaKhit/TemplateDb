<?php /* Smarty version Smarty-3.1.21, created on 2015-05-26 01:16:27
         compiled from ".\templates\delete.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2187655638cd3af7890-37916102%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8cb4370e46e71f4b25002f3e53baf8e3ece4b521' => 
    array (
      0 => '.\\templates\\delete.tpl',
      1 => 1432588345,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2187655638cd3af7890-37916102',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_55638cd3f2d640_54105601',
  'variables' => 
  array (
    'res' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55638cd3f2d640_54105601')) {function content_55638cd3f2d640_54105601($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Удаление</title>

    <!-- Bootstrap Core CSS -->
    <link href="./bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="./bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->


    <!-- Custom Fonts -->
    <link href="./bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <?php echo '<script'; ?>
 src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"><?php echo '</script'; ?>
>
    <![endif]-->
    
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
                                    <a class="delete_news_link"  href="./admin/delete.php?id=<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
">Удалить</a></div>
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

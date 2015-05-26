<?php /* Smarty version Smarty-3.1.21, created on 2015-05-26 01:44:08
         compiled from ".\templates\add.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1741556382328116c3-33821007%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'aceb7922ade5a2f6a9e69389106ec9ea251fcb61' => 
    array (
      0 => '.\\templates\\add.tpl',
      1 => 1432590244,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1741556382328116c3-33821007',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_55638232a0e092_78925575',
  'variables' => 
  array (
    'title' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55638232a0e092_78925575')) {function content_55638232a0e092_78925575($_smarty_tpl) {?><!DOCTYPE html>
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
    <link href="./css/style.css" rel="stylesheet">
</head>

<body>
    
    <div id="wrapper">
        <?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <form action="./admin/add_news_action.php" role="form" method="post">
                            <input  class="form-control title title_add" name="title" required placeholder="Заголовок статьи">
                            <div class="form-group">
                                <select name="type" class="form-control control_add">
                                    <option value="1">Технологии</option>
                                    <option value="2">Недвижимость</option>
                                    <option value="3">Люди</option>
                                </select>
                            </div>
                            <textarea rows="3" class="form-control short_add" name="summary" required placeholder="Короткое описание"></textarea>
                            <textarea rows="23" class="form-control article_add" name="full" required placeholder="Статья"></textarea>
                            <button type="submit" name="submit" class="btn btn-default">Добавить</button>

		              </form>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
    </div>

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

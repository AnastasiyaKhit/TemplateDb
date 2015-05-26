<?php /* Smarty version Smarty-3.1.21, created on 2015-05-26 01:38:32
         compiled from ".\templates\update_action.tpl" */ ?>
<?php /*%%SmartyHeaderCode:24700556395645ceee7-11689757%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ce8c513fcfa7f5d9c7c80338eca953ba7f5b83cc' => 
    array (
      0 => '.\\templates\\update_action.tpl',
      1 => 1432589905,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '24700556395645ceee7-11689757',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_55639564752d34_51457057',
  'variables' => 
  array (
    'res' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55639564752d34_51457057')) {function content_55639564752d34_51457057($_smarty_tpl) {?><!DOCTYPE html>
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
        <?php $_smarty_tpl->tpl_vars['is_admin'] = new Smarty_variable("1", null, 0);?>
        <?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

                <div id="page-wrapper">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <form action="./admin/edit_news_action.php" role="form" method="post">
                                            <input type="hidden" value='<?php echo $_smarty_tpl->tpl_vars['res']->value['id'];?>
' name="id">
                                            <input  class="form-control title title_add" value='<?php echo $_smarty_tpl->tpl_vars['res']->value['title'];?>
' name="title" required placeholder="Заголовок статьи">
                                            <div class="form-group">
                                                <select name="type" class="form-control control_add">
                                                    <option value="1" <?php echo '<?php'; ?>
 if($res['type']==1) echo "selected"; <?php echo '?>'; ?>
>Технологии</option>
                                                    <option value="2" <?php echo '<?php'; ?>
 if($res['type']==2) echo "selected"; <?php echo '?>'; ?>
>Недвижимость</option>
                                                    <option value="3" <?php echo '<?php'; ?>
 if($res['type']==3) echo "selected"; <?php echo '?>'; ?>
>Люди</option>
                                                </select>
                                            </div>
                                            <textarea rows="3" class="form-control short_add" name="summary" required placeholder="Короткое описание"><?php echo $_smarty_tpl->tpl_vars['res']->value['summary'];?>
</textarea>
                                            <textarea rows="23" class="form-control article_add" name="full" required placeholder="Статья"><?php echo $_smarty_tpl->tpl_vars['res']->value['full'];?>
</textarea>
                                            <button type="submit" name="submit" class="btn btn-default">Сохранить</button>

                                      </form>
                                    </div>
                                    <!-- /.col-lg-12 -->
                                </div>
                                <!-- /.row -->
                            </div>
                            <!-- /.container-fluid -->
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

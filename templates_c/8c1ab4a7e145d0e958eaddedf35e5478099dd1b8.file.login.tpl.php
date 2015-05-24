<?php /* Smarty version Smarty-3.1.21, created on 2015-05-25 01:35:41
         compiled from ".\templates\login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:295615562442db59522-66058766%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8c1ab4a7e145d0e958eaddedf35e5478099dd1b8' => 
    array (
      0 => '.\\templates\\login.tpl',
      1 => 1432502480,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '295615562442db59522-66058766',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5562442db63c36_18719690',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5562442db63c36_18719690')) {function content_5562442db63c36_18719690($_smarty_tpl) {?><!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Вход</title>
    <link href="./bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="./bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">
    <link href="./dist/css/sb-admin-2.css" rel="stylesheet">
    <link href="./bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

</head>
<body>
    <div class="container">
        <a href="?page=reg">Регистрация</a>
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Вход</h3>
                    </div>
                    <div class="panel-body">
                        <form role="form" action="action/auth_action.php" method="post">
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" name="login" type="textbox" placeholder="Логин" autofocus>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" name="password" type="password" placeholder="Пароль">
                                </div>
                                <input name="submit"  class="btn btn-lg btn-success btn-block" type="submit" value="Войти" style="width: 211px;">
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php echo '<script'; ?>
 src="./bower_components/jquery/dist/jquery.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="./bower_components/bootstrap/dist/js/bootstrap.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="./bower_components/metisMenu/dist/metisMenu.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="./dist/js/sb-admin-2.js"><?php echo '</script'; ?>
>
</body>

</html><?php }} ?>

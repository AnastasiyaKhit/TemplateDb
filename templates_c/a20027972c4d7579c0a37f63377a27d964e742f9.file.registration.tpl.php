<?php /* Smarty version Smarty-3.1.21, created on 2015-05-25 19:07:32
         compiled from ".\templates\registration.tpl" */ ?>
<?php /*%%SmartyHeaderCode:154255633ab4c15755-36654446%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a20027972c4d7579c0a37f63377a27d964e742f9' => 
    array (
      0 => '.\\templates\\registration.tpl',
      1 => 1432566199,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '154255633ab4c15755-36654446',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_55633ab4ccbbf7_97480645',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55633ab4ccbbf7_97480645')) {function content_55633ab4ccbbf7_97480645($_smarty_tpl) {?><!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Регистрация</title>

    <!-- Bootstrap Core CSS -->
    <link href="bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

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

</head>
<body>
    <div class="container">
        <a href="index.php">Вход</a>
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Регистрация</h3>
                    </div>
                    <div class="panel-body">
                        <form role="form" action="action/action.php" method="POST">
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" name="name" type="name" placeholder="Имя" required autocomplete="off" autofocus>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" name="second_name" type="textbox" placeholder="Фамилия" required autocomplete="off">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" name="email" type="email" placeholder="E-mail" required autocomplete="off">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" name="login" type="textbox" placeholder="Логин" required autocomplete="off">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" type="password" name="password" placeholder="Пароль" required>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" type="password" name="r_password" placeholder="Повторите пароль" required>
                                </div>
                                
                                <input class="btn btn-lg btn-success btn-block" type="submit" name="submit" value="Зарегистрироваться" style="width: 211px;">
                                <!-- Change this to a button or input when using this as a form -->
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery -->
    <?php echo '<script'; ?>
 src="../bower_components/jquery/dist/jquery.min.js"><?php echo '</script'; ?>
>

    <!-- Bootstrap Core JavaScript -->
    <?php echo '<script'; ?>
 src="../bower_components/bootstrap/dist/js/bootstrap.min.js"><?php echo '</script'; ?>
>

    <!-- Metis Menu Plugin JavaScript -->
    <?php echo '<script'; ?>
 src="../bower_components/metisMenu/dist/metisMenu.min.js"><?php echo '</script'; ?>
>

    <!-- Custom Theme JavaScript -->
    <?php echo '<script'; ?>
 src="../dist/js/sb-admin-2.js"><?php echo '</script'; ?>
>

</body>

</html><?php }} ?>

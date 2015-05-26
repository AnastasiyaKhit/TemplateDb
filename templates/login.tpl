<!DOCTYPE html>
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
        <a href="./ref.php?type_page=reg">Регистрация</a>
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
    <script src="./bower_components/jquery/dist/jquery.min.js"></script>
    <script src="./bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="./bower_components/metisMenu/dist/metisMenu.min.js"></script>
    <script src="./dist/js/sb-admin-2.js"></script>
</body>

</html>
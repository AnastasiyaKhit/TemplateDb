<!DOCTYPE html>
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
        {$is_admin="1"}
        {include file="header.tpl"}
                <div id="page-wrapper">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <form action="./admin/edit_news_action.php" role="form" method="post">
                                            <input type="hidden" value='{$res.id}' name="id">
                                            <input  class="form-control title title_add" value='{$res.title}' name="title" required placeholder="Заголовок статьи">
                                            <div class="form-group">
                                                <select name="type" class="form-control control_add">
                                                    <option value="1" <?php if($res['type']==1) echo "selected"; ?>>Технологии</option>
                                                    <option value="2" <?php if($res['type']==2) echo "selected"; ?>>Недвижимость</option>
                                                    <option value="3" <?php if($res['type']==3) echo "selected"; ?>>Люди</option>
                                                </select>
                                            </div>
                                            <textarea rows="3" class="form-control short_add" name="summary" required placeholder="Короткое описание">{$res.summary}</textarea>
                                            <textarea rows="23" class="form-control article_add" name="full" required placeholder="Статья">{$res.full}</textarea>
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
    <script src="./bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="./bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="./bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="./dist/js/sb-admin-2.js"></script>

</body>

</html>
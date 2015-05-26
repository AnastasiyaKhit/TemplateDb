<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>{$title}</title>
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
        {include file="header.tpl"}
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
    <script src="./bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="./bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="./bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="./bower_components/raphael/raphael-min.js"></script>
    <script src="./bower_components/morrisjs/morris.min.js"></script>
    <script src="./js/morris-data.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="./dist/js/sb-admin-2.js"></script>

</body>

</html>

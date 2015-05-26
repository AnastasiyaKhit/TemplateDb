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
        {include file="header.tpl"}
        <div id="page-wrapper">
                <div class="panel panel-default">
                    <div class="panel-heading"><i class="fa fa-clock-o fa-fw"></i> Лента новостей</div>
                    <div class="panel-body">
                            {foreach $res as $item}
                                    <div class ="delete_news">
                                    <div class="delete_title">{$item.title}</div>
                                    <div class="delete_summary">{$item.summary}</div>
                                    <div class="date"> Дата публикации {$item.date}</div>
                                    <a class="delete_news_link"  href="./update.php?id={$item.id}">Редактировать</a></div>
                            {/foreach}
                    </div>
            </div>
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
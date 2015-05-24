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
</head>

<body>
    <div id="wrapper">
        
        {include file="header.tpl"}

        <div id="page-wrapper">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <i class="fa fa-clock-o fa-fw"></i> Лента новостей
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    
                    <ul class="timeline">
                        
                    {foreach $res as $item}
                        {if $item.position =='left'}
                            <li>
                                <div class='{$item.class_type}' ><i class='{$item.type_image}'></i></div>
                                <div class="timeline-panel">
                                    <div class="timeline-heading">
                                        <h4 class="timeline-title">{$item.title}</h4>
                                        <p><small class="text-muted"><i class="fa fa-clock-o"></i> Дата публикации {$item.date}</small></p>
                                    </div>
                                    <div class="timeline-body">
                                        <p>{$item.summary}<a href='{$item.link}'>Подробнее...</a></p>
                                    </div>
                                </div>
                            </li>
                        {/if}
                        {if $item.position =='right'}
                            <li class="timeline-inverted">
                                <div class='{$item.class_type}'><i class='{$item.type_image}'></i></div>
                                <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4 class="timeline-title">{$item.title}</h4>
                                </div>
                                    <div class="timeline-body">
                                        <p><small class="text-muted"><i class="fa fa-clock-o"></i> Дата публикации {$item.date}</small></p>
                                        <p>{$item.summary}<a href='{$item.link}'>Подробнее...</a></p>                       
                                    </div>
                                </div>
                            </li>
                        {/if}
                    {/foreach}
                        
                    </ul>
                    
                </div>
            </div>
        </div>
    </div>


    <!-- jQuery -->
    <script src="bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="bower_components/raphael/raphael-min.js"></script>
    <script src="bower_components/morrisjs/morris.min.js"></script>
    <script src="js/morris-data.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="dist/js/sb-admin-2.js"></script>

</body>

</html>

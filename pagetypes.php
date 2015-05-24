<?php
    require_once 'SmartyLibs/Smarty.class.php';
    include 'config.php';

    $smarty = new Smarty();
    $title = "News 1.0";


    $smarty->assign('title',$title);
    $type=$_GET['type'];
    $q = mysql_query("SELECT * FROM articles WHERE type='$type'",$db); 

    for($i=0;$i<mysql_num_rows($q);$i++)
    {
        $res[]=mysql_fetch_array($q,MYSQL_ASSOC);

            if($res[$i]['type']=='1')
            {
                $res[$i]['class_type'] ='timeline-badge info';
                $res[$i]['type_image'] = 'fa fa-laptop';
            }
            if($res[$i]['type']=='2')
            {
                $res[$i]['class_type'] = "timeline-badge danger";
                $res[$i]['type_image'] = "fa fa-bank";
            }
            if($res[$i]['type']=='3')
            {
                $res[$i]['class_type'] = "timeline-badge warning";
                $res[$i]['type_image'] = "fa fa-user";
            }

            if(($i+1)%2==0)
            {
                $res[$i]['position'] = "left";
            }
            else  
            {
                $res[$i]['position'] = "right";
            }
        
            $res[$i]['link'] = "full.php?id=".$res[$i]['id'];

    }

    $smarty->assign('res',$res);
    $smarty->display('pagetypes.tpl');

?>

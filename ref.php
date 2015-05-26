<?php
    require_once 'SmartyLibs/Smarty.class.php';
    include 'config.php';

    $smarty = new Smarty();
    $type_page=$_GET['type_page'];

    if ($type_page=="reg"){
          $smarty->display('registration.tpl');
    }
    if ($type_page=="add"){
              $smarty->assign("is_admin","1");
              $smarty->display('add.tpl');
        }
    if($type_page=="del"){
        $q = mysql_query("SELECT * FROM articles"); 
        for($i=0;$i<mysql_num_rows($q);$i++)
        {
            $res[]=mysql_fetch_array($q, MYSQL_ASSOC);
        }
              $smarty->assign("is_admin","1");
              $smarty->assign("res",$res);
              $smarty->display('delete.tpl');
    }
    if($type_page=="up"){
        $q = mysql_query("SELECT * FROM articles"); 
        for($i=0;$i<mysql_num_rows($q);$i++)
        {
            $res[]=mysql_fetch_array($q, MYSQL_ASSOC);
        }
        $smarty->assign("is_admin","1");
        $smarty->assign("res",$res);
        $smarty->display('update.tpl');

    }

    ?>
<?php
    require_once 'SmartyLibs/Smarty.class.php';
    include 'config.php';

    $smarty = new Smarty();

    $id=$_GET['id'];
    $q = mysql_query("SELECT title, full,date FROM articles WHERE id='$id'",$db);
    $res = mysql_fetch_array($q);
    
    $title = $res['title'];
    $smarty->assign('title',$title);
  
    $smarty->assign('res',$res);
    $smarty->display('full.tpl');

?>
 
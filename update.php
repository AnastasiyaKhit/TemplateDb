<?php 
    require_once 'SmartyLibs/Smarty.class.php';
    include 'config.php';

    $smarty = new Smarty();
    $title = "News 1.0";
    $id = intval($_GET['id']);
	$q = mysql_query("SELECT * FROM articles WHERE id='$id'"); 
	$res = mysql_fetch_array($q);

    $smarty->assign('res',$res);
    $smarty->display('update_action.tpl');
?>
<?php 
	include("../config.php");
	function filter_data($var)
	{
			$var = mysql_real_escape_string($var);
			$var = htmlspecialchars($var);
			$var = trim($var);
			return $var;
	}
	
	$title = filter_data($_POST['title']);
	$summary = filter_data($_POST['summary']);
	$full = $_POST['full'];
	$id = intval($_POST['id']);
    $type = $_POST['type'];
	$date = date('l jS \of F Y h:i:s A');
	$q = mysql_query("UPDATE articles SET title='$title', summary='$summary', full='$full', date='$date', type='$type' WHERE id='$id'",$db);
	if($q==true)
	{
		echo "<meta http-equiv='Refresh'; content='0; URL=../index.php'>";
	}
	else
	{
		echo mysql_error();
	}
?>
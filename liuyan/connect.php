<?php
	
	$host ="localhost";
	$dbuser ="root";
	$pwd ="";
	$dbname ="thinksite";

	$db = new mysqli($host,$dbuser,$pwd,$dbname);

	//var_dump($db);



	if($db -> connect_error <>0)
	{
		die('链接数据库失败');
	}
	//
	$db->query("SET NAMES UTF8");
	

?>
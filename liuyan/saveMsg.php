<?php
	include('input.php');
	include('connect.php');

	//var_dump($_POST);


	$content=$_POST['content'];
	$user=$_POST['user'];

	$input=new input();

	//
	$is=$input->post($content);
	if($is==false){
		die('留言内容的数据不正确·');
	}

	//
	$is=$input->post($user);
	if($is==false){
		die('留言人的数据不正确');
	}

	var_dump($content,$user);

	//数据入库
	$time=time();
	var_dump($time);

	$sql="INSERT INTO liuyan (content,user,intime)VALUES ('{$content}','{$user}','{$time}')";
	//$sql="INSERT INTO users (username,password)VALUES ('$username', '$pwd')";
	if ($db->query($sql)) {
   	echo "新记录插入成功".$sql;
   } else {
   	echo "Error: " . $sql . "<br>" . $db->error;
   }
	



?>
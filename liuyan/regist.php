<?php
   include('connect.php');//联接数据库

   $username=$_POST['username'];
   $pwd=$_POST['pwd'];
   if($username==''){
       exit('用户名不能为空');
   }
   if ($pwd=='') {
       exit('密码不能为空');
   }

   $sql="INSERT INTO users (username,password)VALUES ('$username', '$pwd')";

   if ($db->query($sql)) {
   	echo "新记录插入成功";
   } else {
   	echo "Error: " . $sql . "<br>" . $db->error;
   }

  


   /**
   $link=mysqli_connect("localhost","root","","thinksite");
	if ($link) {
		mysqli_query($link,"set names utf8");
		//$pwd=md5($pwd);
		//$sql="insert into user (username,pwd) values {$username}','{$pwd}'";   //(错误 )
		$sql="INSERT INTO user (username,pwd)VALUES ('$username', '$pwd')";
		mysqli_query($link,$sql);
		if (mysqli_affected_rows($link)==1) {
			echo $username."成功";
		}else
		{
			echo "不成功";
		}
	}
	**/
?>
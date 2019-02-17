<?php
	include('connect.php');

	$sql = "SELECT  user,intime,content FROM liuyan";
	$result = $db->query($sql);

	//var_dump($result);

	/**
	


	while ( $row=$db->) {
		# code...
	}

**/

	$rows=[];
	if ($result->num_rows > 0) {
	    // 输出数据
	    while($row = $result->fetch_assoc()) {
	        echo "Name-" . $row["user"]. "- 时间 " . $row["intime"]. " - 内容: " . $row["content"]."<br>";
	        $rows[]=$row;
	    }
	    var_dump($rows);
	} else {
	    echo "0 结果";
	}

?>
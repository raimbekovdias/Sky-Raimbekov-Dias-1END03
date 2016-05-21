<?php
	session_start();
	if(isset($_SESSION['id'])){
		if(isset($_POST['name'])){
			include("register/bd.php");
			$sql="INSERT INTO `comment`( `comment`, `user_id`, `data`) VALUES ('".$_POST['name']."',".$_SESSION['id'].",now())";
			mysql_query($sql);
			$sqll="select * from comment order by id desc limit 1";
			$result=mysql_query($sqll);
			$row=mysql_fetch_array($result);
			echo "<p>username: ".$_SESSION['username']."</p>";
			echo "<p>comment: ".$row['comment']."</p>";
			echo "<p>date: ".$row['data']."</p>";
		}
	}
?>
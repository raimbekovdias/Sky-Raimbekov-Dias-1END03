<?php
	include("register/bd.php");
	session_start();
	if(isset($_SESSION['id'])){
		if($_SESSION['id']==1){
			if(isset($_GET['id'])){
				$sql="delete from comment where id=".$_GET['id'];
				mysql_query($sql);
				header("Location: http://localhost/nori/admin.php");
			}
			else header("Location: http://localhost/nori/admin.php");
		}
		else header("Location: http://localhost/nori/"); 
	} 
	else header("Location: http://localhost/nori/");
?>
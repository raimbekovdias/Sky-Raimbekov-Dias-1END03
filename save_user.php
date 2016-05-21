<?php
include ("bd.php");
if(isset($_POST['login']) && isset($_POST['name']) && isset($_POST['email']) && isset($_POST['password'])){
    $sql="select * from user where username='".$_POST['login']."' or email='".$_POST['email']."'";
    $result=mysql_query($sql);
    if(mysql_num_rows($result)==0){
        $sql="insert into user(name,username,email,password) values('".$_POST['name']."','".$_POST['login']."','".$_POST['email']."','".$_POST['password']."')";
        mysql_query($sql);
        header("Location: http://localhost/nori");
    }
    else header("Location: http://localhost/nori/register/reg.php");
} 
else header("Location: http://localhost/nori/register/reg.php");

?>
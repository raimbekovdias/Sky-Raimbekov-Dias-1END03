                 
<?php
   include("bd.php");
   if(isset($_POST['login']) && isset($_POST['password'])){
        $sql="select * from user where username='".$_POST['login']."' and password='".$_POST['password']."'";
        $result=mysql_query($sql);
        if(mysql_num_rows($result)>0){
            $row=mysql_fetch_assoc($result);
            session_start();
            $_SESSION['id']=$row['id'];
            $_SESSION['name']=$row['name'];
            $_SESSION['username']=$row['username'];
            $_SESSION['email']=$row['email'];
            
        }  
   }
   header("Location: http://localhost/nori");

 ?>

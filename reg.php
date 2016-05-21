<html>
    <head>

  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="../shopstyle.css">

    <title>Registration</title>
    <style type="text/css">
body{
    background: url(../73590114.jpg);
}
</style>
<script type='text/javascript'>
function validate(){
   var x=document.forms['form']['name'].value;
   var y=document.forms['form']['email'].value;
    var k=document.forms['form']['login'].value;
    var p=document.forms['form']['password'].value;


if (k.length==0){
      document.getElementById('loginf').innerHTML='*данное поле обязательно для заполнения';
      return false;
   }
 
   if (x.length==0){
      document.getElementById('namef').innerHTML='*данное поле обязательно для заполнения';
      return false;
   }

   

   if (y.length==0){
      document.getElementById('emailf').innerHTML='*данное поле обязательно для заполнения';
      return false;
   }

   at=y.indexOf("@");
   dot=y.indexOf(".");
   if (at<1 || dot <1){
      document.getElementById('emailf').innerHTML='*email введен не верно';
      return false;
   }

   if (p.length==0) {
    document.getElementById('passwordf').innerHTML='*данное поле обязательно для заполнения';
      return false;
   }
   
}
</script>

    </head>
    <body>



    <div >
<div>
    <form name="form" action="save_user.php" method="post" onsubmit="return validate()">
    
    <label>Login:</label>  <input  type='text' name='login'> <span style='color:red' id='loginf'></span><br />


    
   <label> Name:</label> <input style="position:relative;left:24px" type='text' name='name'> <span style='color:red' id='namef'></span><br />


    
    

    
    <label>e-mail:</label> <input style="position:relative;left:23px" type='text' name='email'> <span style='color:red' id='emailf'></span><br /></p>

    <label style="position:relative;top:-9px">Password:</label> <input style="position:relative;left:0px;top:-9px" type='password' name='password'> <span style='color:red' id='passwordf'></span><br />



    <input type="submit" name="submit" value="Register">
</form>
</div>
</div>
    </body>
    </html>

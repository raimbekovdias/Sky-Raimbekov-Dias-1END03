<?php
	session_start();
?>
<html>
<head>
	<title>SKY CAFE</title> 
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css"> 
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
	<meta charset="utf-8">
	<link rel="icon" href="icon.ico" type="images/x-icon">
	<style type="text/css">
	ul {
		list-style-image: url('trubka4.jpg');

	}
	.menu{
		width: 100%;
		height: 200px;
		background: gray;
	}
	.navbar{
		width: 100%;
		height: 50px;
		background: #303032;
		margin-bottom: 0px !important;
	}
	.mainmenu{
		width: 99%;
		height: 390px;
	}
	.menu1{
		width: 100%;
		height: 50%;
	}
	.menu2{
		width: 100%;
		height: 50%;
	}
	.kartinka{
		height: 90%;
		background: purple;
		border-radius: 20px;
		cursor: pointer;
	}
	.textmenu{
		width: 100%;
		height: 250px;
	}
	.textmenu1{
		height: 20%;
	}
	.textmenu2{
		height: 100%;
	}
	.warning{
		height: 100px;
	}
	.item img{
		margin: auto;
		height: 500px !important;
	}
	.navbar ul li{
		display: inline-block;
		padding: 15px 80px 15px 80px;
	}
	.glavmenu {
		text-decoration: none;
	}
	li a b:hover {
		text-decoration: none;
	}
	a:visited {
		color:white;
	}
	.glavmenu:hover{
		background-color:#888;
	}
	.kartin1{
		width: 100%;
		height: 50%;
	}
	.kartin2{
		width: 100%;
		height: 50%;
		margin-top:15px;
	}
	.fotka{
		height: 150%;
		background: purple;
		cursor: pointer;
		margin-left: 15px;
		border-radius: 10px;
	}
	.pictureborder {
		border-radius: 10px;
		cursor: pointer;
	}
	.pictureborder:hover {
		cursor: pointer;
		border: 10px solid #FFF;
	}
	</style>
</head>
<body style="background: url(dlyatexta2.jpg);">
	<div class="container-fluid">
		<div class="menu">
			<div class="col-md-3" style="background-color:#FF4A75; min-height:200px; font-size:13px;color:white;">
				<p style="text-align:center;"><b><i>Адрес:</i></b></p>
				<p style="text-align:center;"><i>пр. Бухар-жырау 55/6</i></p>
				<p style="text-align:center;"><b><i>Бронь столиков:</i></b></p>
					<ul style="margin-left:50px;">
						<li style="margin:auto;"><i>+7 (702) 779 77 14</i></li>
						<li><i>+7 (7212) 99 63 61</i></li>
					</ul>
				<p style="text-align:center;"><b><i>Время работы:</i></b></p>
				<p style="text-align:center;"><i>12:00 - 02:00, пт-сб 12:00 - 04:00</i></p>
			</div>
			<div class="col-md-5" style="padding-left:0px;"><img style="height:200px;width:550px;mergin-right:" src="skycafelogo13.jpg"></div>
			<div class="col-md-3" style="background-color:#FF4A75; min-height:200px;font-size:15px; width:439px">
				<style>
					label{
						width:150px;
						display: inline-block;
						cursor: pointer;
					}
				</style>
				<?php
				if(!isset($_SESSION['id'])){
				?>
				<form style="text-align:center; margin-top:10px;"  name="MyForms" autocomplete="on" method='post' action='register/testreg.php'>
					<p>
						<label for="name"></label>
						<input  name='login' type="text" placeholder="Логин" required autofocus style ="margin-right: 3px; width:216px;" ></p>
					<p>
						<label for="mail"></label>
						<input type="password"  name='password' placeholder="Пароль" required style ="margin-right:3px;width:216px" >
					</p>
					<p style="text-align:center; margin-left:150px;">
					<input type="submit" value="Войти"> <a href="register/reg.php">Зарегистрироваться</a>
					</p>
				</form>
				<?php }
				else {?>
					<p>hello <?php echo $_SESSION['name']; ?></p>
					<a href="logout.php">Logout</a>
				<?php } ?>
				<div style = " text-align: center; margin-left: 120px;">
					<a href="https://vk.com/id311823826" title="ВК" target="_blank"><img src="vkicon1.png" width="40" ></a>
					<a href="http://instagram.com/sky.kafe" title="Инстаграм" target="_blank"><img src="instaicon.png"width="40" style ="margin-left: 20px;" ></a>
					<img src="faceicon1.png"width="40" title="Фэйсбук" target="_blank" style ="margin-left: 20px;" >
				</div>
			</div>
		</div>
	</div>
	<div class="container-fluid">
		<div class="navbar" style="color:white;">
			<ul>
				<li class="glavmenu"><a href="nori.php" title="МЕНЮ" target="_self"><b>МЕНЮ</b></a></li>
				<li class="glavmenu"><a href="nori4.php" title="АКЦИИ" target="_self"><b>АКЦИИ</b></a></li>
				<li class="glavmenu"><a href="nori5.php" title="ГАЛЕРЕЯ" target="_self"><b>ГАЛЕРЕЯ</b></a></li>
				<li class="glavmenu"><a href="nori6.php" title="МЕСТОПОЛОЖЕНИЕ" target="_self"><b>МЕСТОПОЛОЖЕНИЕ</b></a></li>
				<li class="glavmenu"><a href="nori7.php" title="ОТЗЫВЫ" target="_self"><b>ОТЗЫВЫ</b></a></li>
				<?php
					if(isset($_SESSION['id'])){
						if($_SESSION['id']==1){
							?>
							<li class="glavmenu"><a href="admin.php" title="ОТЗЫВЫ" target="_self"><b>ADMIN</b></a></li>
							<?php
						}
					}
				?>
			</ul>
			<nav class="navabr navbar-default">
			</nav>
		</div>
	</div>
	<div>
		<div class="mainmenu" style="margin-top:10px;">
			<div class="kartin1">
				<div class="row">
					<div class="col-md-4">
						<div class="fotka">
							<img src="fotka1.jpg" class="pictureborder" style="width:410px; height:293px;">
						</div>
					</div>
					<div class="col-md-4">
						<div class="fotka">
							<img src="fotka2.jpg" class="pictureborder" style="width:410px; height:293px;">
						</div>
					</div>
					<div class="col-md-4">
						<div class="fotka">
							<img src="fotka3.jpg" class="pictureborder" style="width:410px; height:293px;">
						</div>
					</div>
				</div>
			</div>
			<div class="kartin2" style="margin-top:15px;">
				<div class="row">
					<div class="col-md-4">
						<div class="fotka">
							<img src="fotka4.jpg" class="pictureborder" style="width:410px; height:293px;">
						</div>
					</div>
					<div class="col-md-4">
						<div class="fotka">
							<img src="fotka5.jpg" class="pictureborder" style="width:410px; height:293px;">
						</div>
					</div>
					<div class="col-md-4">
						<div class="fotka">
							<img src="fotka3.jpg" class="pictureborder" style="width:410px; height:293px;">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
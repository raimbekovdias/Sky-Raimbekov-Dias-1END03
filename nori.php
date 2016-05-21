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
	.slider{
		width: 100%;
		height: 500px;
		background: #1F1A17;
	}
	.mainmenu{
		width: 100%;
		height: 450px;
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
	audio{
		float: left;
	}
	.pictureborder {
		border-radius: 10px;
		cursor: pointer;
	}
	.pictureborder:hover {
		cursor: pointer;
		border: 10px solid #FFF;
	}
	.carousel-inner .item img{
		width: 100%;
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
						<input  type="password" name='password' placeholder="Пароль" required style ="margin-right:3px;width:216px" >
					</p>
					<p style="text-align:center; margin-left:150px;">
					<input type="submit" value="Войти"> <a href="register/reg.php">Зарегистрироваться</a>
					</p>
				</form>
				<?php }
				else {
					?>
					<p>hello <?php echo $_SESSION['name']; ?></p>
					<a href="logout.php">Logout</a>
				<?php
				 } 
				 ?>
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
							<li class="glavmenu"><a href="admin.php" title="ADMIN" target="_self"><b>ADMIN</b></a></li>
							<?php
						}
					}
				?>
			</ul>
			<nav class="navabr navbar-default">
			</nav>
		</div>
	</div>
	<div style="" class="container-fluid">
		<div style="background-color:none;"class="slider">
			<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
			  <!-- Indicators -->
			  <ol class="carousel-indicators">
			    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
			    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
			    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
			    <li data-target="#carousel-example-generic" data-slide-to="3"></li>
			    <li data-target="#carousel-example-generic" data-slide-to="4"></li>
			  </ol>

			  <!-- Wrapper for slides -->
			  <div class="carousel-inner" role="listbox">
			    <div class="item active">
			      <img src="kartinka.jpg" alt="..." >
			      <div class="carousel-caption">
			      </div>
			    </div>
			    <div class="item">
			      <img src="kartinka2.jpg" alt="..." >
			      <div class="carousel-caption">
			      </div>
			    </div>
			    <div class="item">
			      <img src="kartinka3.jpg" alt="..." >
			      <div class="carousel-caption">
			      </div>
			    </div>
			    <div class="item">
			      <img src="kartinka4.jpg" alt="...">
			      <div class="carousel-caption">
			      </div>
			    </div>
			    <div class="item">
			      <img src="kartinka5.jpg" alt="...">
			      <div class="carousel-caption">
			      </div>
			    </div>
			  </div>

			  <!-- Controls -->
			  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
			    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
			    <span class="sr-only">Previous</span>
			  </a>
			  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
			    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
			    <span class="sr-only">Next</span>
			  </a>
			</div>
		</div>
	</div>
	<div class="container-fluid" style="margin-top:15px;">
		<div class="mainmenu">
			<div class="menu1">
				<div class="row">
					<div class="col-md-3">
						<div class="kartinka">
							<a href="nori2.php"><img src="pizza.jpg" class="pictureborder" style="width:310px; height:203px;"></a>
						</div>
					</div>
					<div class="col-md-3">
						<div class="kartinka">
							<a href="nori2.php"><img src="sushi.jpg" class="pictureborder" style="width:310px; height:203px;"></a>
						</div>
					</div>
					<div class="col-md-3">
						<div class="kartinka">
							<a href="nori2.php"><img src="sandwich2.jpg" class="pictureborder" style="width:310px; height:203px;"></a>
						</div>
					</div>
					<div class="col-md-3">
						<div class="kartinka">
							<a href="nori2.php"><img src="salat.jpg" class="pictureborder" style="width:310px; height:203px;"></a>
						</div>
					</div>
				</div>
			</div>
			<div class="menu2">
				<div class="row">
					<div class="col-md-3">
						<div class="kartinka">
							<a href="nori2.php"><img src="desert.jpg" class="pictureborder" style="width:310px; height:203px;"></a>
						</div>
					</div>
					<div class="col-md-3">
						<div class="kartinka">
							<a href="nori2.php"><img src="gor3.jpg" class="pictureborder" style="width:310px; height:203px;"></a>
						</div>
					</div>
					<div class="col-md-3">
						<div class="kartinka">
							<a href="nori2.php"><img src="napitki.jpg" class="pictureborder" style="width:310px; height:203px;"></a>
						</div>
					</div>
					<div class="col-md-3">
						<div class="kartinka">
							<a href="nori2.php"><img src="hookah3.jpg" class="pictureborder" style="width:310px; height:203px;"></a>
						</div>
					</div>
				</div>
			</div>
		</div>	
	</div>
	<div class="container-fluid">
		<div class="textmenu">
			<div class="row">
				<div class="col-lg-6">
					<div class="textmenu1"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1287.5759165873349!2d73.08637665808537!3d49.80201312602922!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4243472f84a133c5%3A0x4ce77f15eeacf901!2z0L_RgNC-0YHQvy4g0JHRg9GF0LDRgC3QltGL0YDQsNGDIDU1LzEsINCa0LDRgNCw0LPQsNC90LTQsCAxMDAwMDAsINCa0LDQt9Cw0YXRgdGC0LDQvQ!5e0!3m2!1sru!2sru!4v1457561257150" width="650" height="250" frameborder="0" style="border:0" allowfullscreen></iframe>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="textmenu2" style="padding-top:20px; margin-right:20px; height:250px; width:644px;">
						<h4 style="text-align:center;font-family:Bemount; margin-top: 20px; font-size:28px; color:white;"><b>ДЛЯ ЛЮБИМЫХ КЛИЕНТОВ:</b></h4>
						<h5 style="text-align:center; font-family:Bemount; font-size:18px;color:white;">Самый крупный ассортимент пиццы и суши в Караганде: пицца суши, нигири суши, хосомаки роллы, маки суши, жареные маки суши, сеты, гунканы суши, спайси-суши, снеки, салаты, бургеры, десерты, напитки и многое другое в меню Sky Cafe.</h5>
						<h5 style="text-align:center; font-family:Bemount; font-size:18px;color:white;">Мы проводим различные акции и специальные предложения, за которыми можно следить в разделе "Акции". Также для постоянных клиентов у нас существуют программы лояльности и дисконтные карты. Добро Пожаловать в Sky Cafe!</h5>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="container-fluid" style="margin-top:50px;">
		<div class="container">
			<div class="warning">
				<div class="col-md-4" style=" height:inherit; text-align:center;">
					<img src="main-info.png" width="40" style ="margin-top:-5px; margin-left: 20px; width:100px; height:100px;" >
				</div>
				<div class="col-md-8" style=" height:inherit; margin-top:7px;">
					<h5 style="text-align:left; font-family:Bemount; color: #BE0C4B; font-size:28px;">— Все цены в меню указаны в тенге без учета скидок.</h5>
					<h5 style="text-align:left; font-family:Bemount; color:#BE0C4B; font-size:28px;">— Минимальная сумма заказа составляет 2000 тенге.</h5>
				</div>
			</div>
		</div>
	</div>
</div>	
<div style="text-align:center;">
		<p ><u style="color:white;"> 2016 &copy; <a href="https://vk.com/dias10" title="ВК" target="_blank">Dias Raimbekov</a> </u></p>
	</div>
	<audio controls autoplay>
  <source src="..." type="audio/mpeg">
</audio>
</body>
</html>
<!DOCTYPE html>
<html>
<head>
	<title>TEST WEBSITE</title>
	<link rel="stylesheet" type="text/css" href="login_style.css" media="all" />
	<style>
		body{
			margin:0px;
			/*border:2px solid red;*/
			width:1363px;
			height:657px; 
		}
		@media screen and (min-width: 1360px){
			body{
				width: 1363px;
				margin: 0px;
				/*border:2px solid blue;*/
				height: 657px;
			}
		}

		.background{
			border:1px solid green;
			position: absolute;
			z-index: -10;
			margin:0px;
			width: 1364px;
			height: 657px;
			background: url("http://gadgetick.com/images/articles/10_apps_rise_coding.jpg");
			background-repeat: none;
			background-size: cover;
		}


		/**********  HEADER  ************************/
		header{
			/*border:2px solid red;*/
			height:40px;
			background-color: rgb(51, 51, 51); 
		}
		header ul {
		    list-style-type: none;
		    margin: 0;
		    padding: 0;
		    overflow: hidden;
		    background-color: #333;
		}

		header ul li { 
		    float: left;
		    /*border:1px solid red;*/
		}

		header ul li a {

		    display: block;
		    color: white;
		    text-align: center;
		    padding: 14px 16px;
		    text-decoration: none;
		}

		header ul li a:hover:not(.active) {
		    background-color: #111;
		}
		.main{
			background-color: rgb(69, 86, 114);
		}
		.active {
			width:150px; 
		    background-color: rgb(69, 86, 114);
		}
		.logo{
			margin-left:250px;
			/*border:2px solid red;*/
			width: 350px;
			height:40px; 
		}


		/******************  FOOTER   ***************/
		footer{
			/*border:4px solid orange;*/
			height:230px;
			background-color: rgb(51, 51, 51); 
			padding-top: 25px;
		}
		.footer_1{
			margin-left:120px;
			float: left;
			border-right:2px outset white;
			width:150px;
			/*padding:15px 50px 10px;  */
		}
		
		footer .footer_1 ul{
			list-style-type: none;
		}
		footer .footer_1 ul li a{
			color: white;
			text-decoration: none;
			font-family: Arial;
			font-size: 12px;
		}
		footer .footer_1 ul li a:hover{
			color: white;
			text-decoration: none;
			font-family: Arial;
			font-size: 15px;
			font-weight: bold;
		}
		.footer_image{
			/*border-bottom: 2px solid white;*/
			float: left;
			width:550px;
			margin-left:80px;
			min-height: 100px;
			overflow: hidden;

		}
		footer .footer_image img{
			/*border:2px solid red;*/
			width:340px;
			height: 180px;
			opacity: 0.3;
			margin-left:105px;
		}

		.footer_contact{
			border-left:2px inset white;
			width:250px;
			float: right;
			margin-right:120px;
		}
		footer .footer_contact p{
			color: white;
			text-decoration: underline;
			text-align: center;
			font-size:12px;
			font-family: Arial; 
		}
		footer .footer_contact ul{
			list-style-type: none;
		}
		footer .footer_contact ul li{
			color:white;
			font-size:12px;
			font-family: Arial;
		}
		.footer_end{
			border-top:2px solid  rgb(162, 170, 151);
			clear: both;
			height: 40px;
			width:1100px;
			margin-left: auto;
			margin-right: auto; 
		}
		footer .footer_end p{
			font-size: 15px;
			text-align: center;
			color: rgb(162, 170, 151);
		}
		
	</style>
</head>
<body>
	<div class="background"></div>
	<header>
		<ul>
			<li><a class="main" href="#home">Главная</a></li>
			<li><a href="#news">Онас</a></li>
			<li><a href="#contact">Контакты</a></li>
			<li><img class="logo" src="logo2.png"></li>
			<li style="float:right"><a class="active" href="register.php">Регистрация</a></li>
		</ul>

	</header>
	<main>
		<div  class="form">
		    <form id="contactform">
		    	<p class="contact"><label for="username">Пользователь</label></p> 
	    		<input id="username" name="username" placeholder="пользователь" required="" tabindex="2" type="text"> 
	    			 
	            <p class="contact"><label for="password">Пороль</label></p> 
	    		<input type="password" id="password" placeholder="пороль" password" required=""> 

	    		<input class="buttom" name="submit" id="submit" tabindex="5" value="ВОЙТИ" type="submit">
	    		<a id='regis' href="register.php">Регистрация</a> 
		    </form> 
		</div>
	</main>
	<footer>
		<div class="footer_1">
			<ul>
				<li><a href="">Главная</a></li>
				<li><a href="">О нас</a></li>
				<li><a href="">Контакты</a></li>
				<li><a href="">Войти</a></li>
				<li><a href="register.php">Регистрация</a></li>
			</ul>
		</div>

		<div class="footer_image">
			<img src="logo.png">
		</div>

		<div class="footer_contact">
			<p><u><strong>КОНТАКТЫ</strong></u></p>
			<ul>
				<li>ул. Сатпаева 2</li>
				<li>г. Жезказган,</li>
				<li>Карагандинская обл.,</li>
				<li>040900, Казахстан</li>
				<li>Тел: +7 727 307 95 60, 65</li>
				<li>Факс: +7 727 307 95 58</li>
				<li>e-mail: info@kazakhmys.kz</li>
			</ul>
		</div>

		<div class="footer_end">
			<p>© 2017 Университет имени Сулеймана Демиреля</p>
		</div>
	</footer>
</body>
</html>
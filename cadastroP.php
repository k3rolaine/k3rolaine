<?php

include 'config1.php';

if(isset($_POST['submit'])){

   $nome = mysqli_real_escape_string($conn, $_POST['Nome']);
   $preco = mysqli_real_escape_string($conn, $_POST['Preco']);
   $Cod = mysqli_real_escape_string($conn, md5($_POST['Cod']));

   $select_prod = mysqli_query($conn, "SELECT * FROM `produto` WHERE nome = '$Nome' AND Cod = '$Cod'") or die('query failed');

   if(mysqli_num_rows($select_prod) > 0){
      $message[] = 'user already exist!';
   }else{
        mysqli_query($conn, "INSERT INTO `produto`(Nome, Preco, Cod) VALUES('$nome', '$preco', '$Cod')") or die('query failed');
        $message[] = 'registered successfully!';
        header('location:index.php');
   }

}

?>

<!DOCTYPE html>
<!-- saved from url=(0049)https://colorlib.com/etc/lf/Login_v20/index.php# -->
<html lang="en">
	<head>
		<meta charset="UTF-8">
    	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<title>Cadastro Produto</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="icon" type="image/png" href="https://colorlib.com/etc/lf/Login_v20/images/icons/favicon.ico">
		<link rel="stylesheet" type="text/css" href="./cadastro/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="./cadastro/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="./cadastro/icon-font.min.css">
		<link rel="stylesheet" type="text/css" href="./cadastro/animate.css">
		<link rel="stylesheet" type="text/css" href="./cadastro/hamburgers.min.css">
		<link rel="stylesheet" type="text/css" href="./cadastro/animsition.min.css">
		<link rel="stylesheet" type="text/css" href="./cadastro/select2.min.css">
		<link rel="stylesheet" type="text/css" href="./cadastro/daterangepicker.css">
		<link rel="stylesheet" type="text/css" href="./cadastro/util.css">
		<link rel="stylesheet" type="text/css" href="./cadastro/main.css">
		<meta name="robots" content="noindex, follow">
		<script type="text/javascript" async="" src="./cadastro/analytics.js.download" nonce="12ef8a2f-c892-4d22-870e-98f24662b0fa"></script><script defer="" referrerpolicy="origin" src="./Login V20_files/s.js.download"></script><script nonce="12ef8a2f-c892-4d22-870e-98f24662b0fa">(function(w,d){!function(a,e,t,r){a.zarazData=a.zarazData||{};a.zarazData.executed=[];a.zaraz={deferred:[],listeners:[]};a.zaraz.q=[];a.zaraz._f=function(e){return function(){var t=Array.prototype.slice.call(arguments);a.zaraz.q.push({m:e,a:t})}};for(const e of["track","set","debug"])a.zaraz[e]=a.zaraz._f(e);a.zaraz.init=()=>{var t=e.getElementsByTagName(r)[0],z=e.createElement(r),n=e.getElementsByTagName("title")[0];n&&(a.zarazData.t=e.getElementsByTagName("title")[0].text);a.zarazData.x=Math.random();a.zarazData.w=a.screen.width;a.zarazData.h=a.screen.height;a.zarazData.j=a.innerHeight;a.zarazData.e=a.innerWidth;a.zarazData.l=a.location.href;a.zarazData.r=e.referrer;a.zarazData.k=a.screen.colorDepth;a.zarazData.n=e.characterSet;a.zarazData.o=(new Date).getTimezoneOffset();a.zarazData.q=[];for(;a.zaraz.q.length;){const e=a.zaraz.q.shift();a.zarazData.q.push(e)}z.defer=!0;for(const e of[localStorage,sessionStorage])Object.keys(e||{}).filter((a=>a.startsWith("_zaraz_"))).forEach((t=>{try{a.zarazData["z_"+t.slice(7)]=JSON.parse(e.getItem(t))}catch{a.zarazData["z_"+t.slice(7)]=e.getItem(t)}}));z.referrerPolicy="origin";z.src="/cdn-cgi/zaraz/s.js?z="+btoa(encodeURIComponent(JSON.stringify(a.zarazData)));t.parentNode.insertBefore(z,t)};["complete","interactive"].includes(e.readyState)?zaraz.init():a.addEventListener("DOMContentLoaded",zaraz.init)}(w,d,0,"script");})(window,document);</script>

		<!--Fav icon mas da pra mudar in the future--><!--Para de escrever em english retardado-->
		<link rel="shortcut icon" href="archives/logoElChavao.png" type="image/x-icon">
		<!--Link pro CSS brabíssimo-->
		<link rel="stylesheet" href="css/styleIndex.css">
		<!--Box Icons safado-->
		<link href="https://unpkg.com/boxicons@2.1.0/css/boxicons.min.css" rel="stylesheet">
		<!--Link Swiper File Link pro CSS-->
		<link rel="stylesheet" href="css/swiper-bundle.min.css">
	</head>
	<body>
	
		<!--Custom Scroll Bar-->
			<div class="progress">
				<div class="progress-bar" id="scroll-bar"></div>
			</div>
		<!--Header parte superior do site-->
			<header>
				<!--Nav-->
				<div class="nav container">
					<!--Logo-->
					<a href="index.php" class="logo">El&nbspChavão&nbsp<span>Games</span></a>
					<!--Nav Icones-->
					<div class="nav-icons">
						<i class="bx bx-bell bx-tada" id="bell-icon"><span></span></i>
						<i class='bx bxs-user-account' id="loginR-icon"></i>
						<div class="menu-icon">
							<div class="line1"></div>
							<div class="line2"></div>
							<div class="line3"></div>
						</div>
					</div>
					<!--Menu quando tu abre-->
					<div class="menu">
						<img src="archives/blackGuy.jpeg" alt="">
						<div class="navbar">
							<li><a href="index.php">Home</a></li>
							<li><a href="login.php">Login<!--Login/Registrer--></a></li>
							<li><a href="perfil.php">Perfil<!--YourAcount--></a></li>
							<li><a href="#contact">Sobre<!--ContactUs--></a></li>
						</div>
					</div>
					<!--Notificação quando vc clica/abre-->
					<div class="notification">
						<div class="notification-box">
							<i class='bx bx-check-circle' ></i><!--<i class='bx bxs-check-circle' ></i>-->
							<p>Parabéns, Seu jogo foi comprado com Sucesso!</p>
						</div>
						<div class="notification-box box-color">
							<i class='bx bx-x-circle' ></i>
							<p>Essa ação não terá aplicação de mudanças</p>
						</div>
					</div>
					<div class="loginArea">
						<div class=".loginArea-box box-color">
							<a href="perfil.php">Perfil</a> 
						</div>
						<div class=".loginArea-box">
							<a href="login.php">Login</a>
						</div>
						<div class=".loginArea-box box-color">
							<a href="cadastro.php">Cadastrar</a>
						</div>
						<div class=".loginArea-box box-color">
                    		<a href="cadastroP.php">Cadastro Produtos</a> 
                		</div>
					</div>
				</div>
			</header>
	
			<div class="form-container">

   				<form action="" method="post">
      				<h3>register now</h3>
     					<input type="text" name="Nome" placeholder="enter prod name" required class="box">
      					<input type="text" name="Preco" placeholder="enter prod preco" required class="box">
      					<input type="text" name="Cod" placeholder="enter prod cod" required class="box">
      					<input type="submit" name="submit" value="register now" class="btn">
      						<p>already have an account? <a href="login.php">login now</a></p>
   				</form>

</div>
		</div>
	<script src="./cadastro/jquery-3.2.1.min.js.download"></script>
	<script src="./cadastro/animsition.min.js.download"></script>
	<script src="./cadastro/popper.js.download"></script>
	<script src="./cadastro/bootstrap.min.js.download"></script>
	<script src="./cadastro/select2.min.js.download"></script>
	<script src="./cadastro/moment.min.js.download"></script>
	<script src="./cadastro/daterangepicker.js.download"></script>
	<script src="./cadastro/countdowntime.js.download"></script>
	<script src="./cadastro/main.js.download"></script>
	<script async="" src="./cadastro/js"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());
	  gtag('config', 'UA-23581568-13');
	</script>
		<div class="next-page">
            <a href="#">Inicio</a>
        </div>
		<!--Sobre-->
		<section class="new container" id="contact">
			<div class="heading">
				<i class='bx bx-question-mark'></i>
				<h2>Sobre</h2>
				<div class="sobre">
					<p>
						El Chavão Games é uma plataforma de venda de jogos digital 
						com a curadoria e seleção inspirada no mercado atual e até 
						mesmo nos clássicos.
							<br>
						Nós temos uma filosofia: "Você compra, você é o dono" 
						e com exacerbado cuidado que temos com os nossos clientes, 
						esperamos atender todos sem precedentes!
							<br>
						Com essa filosofia e com a sua ajuda NÓS VAMOS CONTINUAR!
							<br>
						Insta: <a href="https://www.instagram.com/matheusfelipeboroto/" class="">@matheusfelipeboroto</a>
							<br>
						Insta: <a href="https://www.instagram.com/arthurviniciusmayer/" class="">@arthurviniciusmayer</a>
					</p>
				</div>
			</div>

		<!--Copyright-->
    <div class="copyright container">
        <a href="#" class="logo">El&nbspChavão&nbsp<span>Games</span></a>
        <p>&#169; Todos os Direitos Reservados a Matheus Felipe Boroto e Arthur Vinicius Mayer</p>
    </div>

	<script defer="" src="./cadastro/v652eace1692a40cfa3763df669d7439c1639079717194" integrity="sha512-Gi7xpJR8tSkrpF7aordPZQlW2DLtzUlZcumS8dMQjwDHEnw9I7ZLyiOj/6tZStRBGtGgN6ceN6cMH8z7etPGlw==" data-cf-beacon="{&quot;rayId&quot;:&quot;750b77aefa31a667&quot;,&quot;token&quot;:&quot;cd0b4b3a733644fc843ef0b185f98241&quot;,&quot;version&quot;:&quot;2022.8.1&quot;,&quot;si&quot;:100}" crossorigin="anonymous"></script>
		
		<!--Link Swiper File Link pro js-->
		<script src="js/swiper-bundle.min.js"></script>
		<!--Link pro JavaScript programativo logicamente lógico-->
		<script src="js/mainIndex.js"></script>
	</body>
</html>
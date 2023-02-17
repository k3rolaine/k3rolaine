<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina de Compra</title>
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
                    <li><a href="cadastro.php">Cadastro<!--Login/Registrer--></a></li>
                    <li><a href="perfil.php">Sua Conta<!--YourAcount--></a></li>
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
                    <a href="perfil.php">Sua Conta</a> 
                </div>
                <div class=".loginArea-box">
                    <a href="login.php">Login</a>
                </div>
                <div class=".loginArea-box box-color">
                    <a href="cadastro.php">Cadastrar</a>
                </div>
            </div>
        </div>
    </header>
    <!--Video-->
    <div class="video-container container">
        <video src="archives/videos/eSVI.mp4" muted autoplay></video>
    </div>

    <!--about mas esse é do jogo-->
    <div class="about container">
        <h2>Sobre o Jogo</h2>
        <p>
            The Elder Scrolls VI é um futuro jogo eletrônico de RPG de ação desenvolvido pela Bethesda Game Studios e Bethesda Softworks e publicado pela Xbox Game Studios. Foi anunciado na E3 2018 como sendo o próximo grande projeto a ser lançado pela Bethesda Game Studios, depois de Starfield.
        </p>
    </div>

    <!--ScreenShots n vou fazer-->

    <!--Compra ou download-->
    <div class="download">
        <h2>Links de Resgate</h2>
        <div class="download-links">
            <a href="archives/key.txt" download="">Steam</a>
            <a href="archives/key.txt" download="">Epic Games</a>
            <a href="archives/key.txt" download="">GOG</a>
        </div>
    </div>

    <div class="next-page">
        <a href="#">Inicio</a>
    </div>
    
    <!--Sobre aqui n precisa se pa-->
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

    <!--Link Swiper File Link pro js-->
    <script src="js/swiper-bundle.min.js"></script>
    <!--Link pro JavaScript programativo logicamente lógico-->
    <script src="js/mainIndex.js"></script>
</body>
</html>
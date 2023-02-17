<?php

    include "config1.php";

if(isset($_GET['delete'])){
   $delete_id = $_GET['delete'];
   mysqli_query($conn, "DELETE FROM `produto` WHERE id_prod = '$delete_id'") or die('query failed');
   header('location:index.php');
}else{}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>El Chavão Games</title>
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
                    <li><a href="#trending">Jogos Do Momento<!--Trending--></a></li>
                    <li><a href="#new">Jogos Novos<!--NewGames--></a></li>
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
                <div class=".loginArea-box box-color">
                    <a href="cadastroP.php">Cadastro Produtos</a> 
                </div>
            </div>
        </div>
    </header>

    <!--Home Section Start talvez com um carrusel-->
    <section class="home container" id="home">
        <img src="archives/jogosCapas/portal3.jpg" alt="">
        <div class="home-text">
            <h1>VALVE RETORNA COM<br>GRANDE PARCERIA</h1>
            <a href="produto1.php" class="btn">Disponivel Aqui e Agora</a>
        </div>
    </section>
    <!--Home Section Start end-->

    <!--Vai ser a area dos novos jogos cabo-->
    <!--Trending Section Start Parte dos jogos-->
    <section class="trending container" id="trending">
        <div class="heading">
            <i class='bx bxs-hot'></i><!--<i class='bx bxs-flame' ></i>-->
            <h2>Jogos Do Momento</h2>
        </div>

        <div class="box-container">
            <?php
                $select_prod = mysqli_query($conn, "SELECT * FROM `produto`") or die('query failed');
                while($fetch_prod = mysqli_fetch_assoc($select_prod)){
            ?>
            <div class="box">
                <p> prod id : <span><?php echo $fetch_prod['id_prod']; ?></span> </p>
                <p> nome : <span><?php echo $fetch_prod['Nome']; ?></span> </p>
                <p> preco : <span><?php echo $fetch_prod['Preco']; ?></span> </p>
                <p> Code : <span><?php echo $fetch_prod['Cod']; ?></span> </p>
                <a href="index.php?delete=<?php echo $fetch_prod['id_prod']; ?>" onclick="return confirm('delete this user?');" class="delete-btn">delete user</a>
            </div>
            <?php
                };
            ?>
        </div>

        <!--Content ou seja, os jogos listados po-->
        <div class="trending-content swiper">
            <div class="swiper-wrapper">
                <!--Slide 1 os jogos sacou?-->
                <div class="swiper-slide">
                    <div class="box">
                        <img src="archives/jogosCapas/theElder5.jpg" alt="">
                        <div class="box-text">
                            <h2>The Elder Scrolls VI</h2>
                            0987654321&nbsp&nbsp
                                <button a href="admin_users.php?delete=<?php echo $fetch_users['id']; ?>" onclick="return confirm('delete this user?');" class="delete-btn">delete user</a>
                                    Excluir
                                </button>
                            <h3>Aventura</h3>
                            <div class="rating-download">
                                <div class="rating">
                                    <i class='bx bx-star'></i>
                                    <span>4.9</span>
                                </div>
                                150R$
                                <a href="produto2.php" class="box-btn"><i class='bx bx-cart'></i></a>
                            </div>
                        </div>
                    </div>
                </div>   
            <!--Slide 2 os jogos sacou?-->
                <div class="swiper-slide">
                    <div class="box">
                        <img src="archives/jogosCapas/marioOdy2.jpg" alt="">
                        <div class="box-text">
                            <h2>Mario Odyssey 2</h2>
                            <h3>Plataforma</h3>
                            <div class="rating-download">
                                <div class="rating">
                                    <i class='bx bx-star'></i>
                                    <span>4.8</span>
                                </div>
                                150R$
                                <a href="#" class="box-btn"><i class='bx bx-cart'></i></a>
                            </div>
                        </div>
                    </div>
                </div>   
            <!--Slide 3 os jogos sacou?-->
                <div class="swiper-slide">
                    <div class="box">
                        <img src="archives/jogosCapas/half4.jpg" alt="">
                        <div class="box-text">
                            <h2>Half Life 4</h2>
                            <h3>Ação</h3>
                            <div class="rating-download">
                                <div class="rating">
                                    <i class='bx bx-star'></i>
                                    <span>4.7</span>
                                </div>
                                150R$
                                <a href="#" class="box-btn"><i class='bx bx-cart'></i></a>
                            </div>
                        </div>
                    </div>
                </div>  
            <!--Slide 4 os jogos sacou?-->
                <div class="swiper-slide">
                    <div class="box">
                        <img src="archives/jogosCapas/lol2.jpg" alt="">
                        <div class="box-text">
                            <h2>League Of Legends 2</h2>
                            <h3>RTS</h3>
                            <div class="rating-download">
                                <div class="rating">
                                    <i class='bx bx-star'></i>
                                    <span>2.3</span>
                                </div>
                                150R$
                                <a href="#" class="box-btn"><i class='bx bx-cart'></i></a>
                            </div>
                        </div>
                    </div>
                </div>  
            <!--Slide 5 os jogos sacou?-->
                <div class="swiper-slide">
                    <div class="box">
                        <img src="archives/jogosCapas/witcher4.jpg" alt="">
                        <div class="box-text">
                            <h2>The Witcher 4</h2>
                            <h3>Aventura</h3>
                            <div class="rating-download">
                                <div class="rating">
                                    <i class='bx bx-star'></i>
                                    <span>4.9</span>
                                </div>
                                150R$
                                <a href="#" class="box-btn"><i class='bx bx-cart'></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            <!--Slide 6 os jogos sacou?-->
                <div class="swiper-slide">
                    <div class="box">
                        <img src="archives/jogosCapas/mineirinho.jpg" alt="">
                        <div class="box-text">
                            <h2>Mineirinho</h2>
                            <h3>Plataforma</h3>
                            <div class="rating-download">
                                <div class="rating">
                                    <i class='bx bx-star'></i>
                                    <span>5.0</span>
                                </div>
                                150R$
                                <a href="#" class="box-btn"><i class='bx bx-cart'></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            <!--Slide 7 os jogos sacou?--> 
                <div class="swiper-slide">
                    <div class="box">
                        <img src="archives/jogosCapas/left3.jpg" alt="">
                        <div class="box-text">
                            <h2>Left 4 Dead 3</h2>
                            <h3>Aventura</h3>
                            <div class="rating-download">
                                <div class="rating">
                                    <i class='bx bx-star'></i>
                                    <span>4.4</span>
                                </div>
                                150R$
                                <a href="#" class="box-btn"><i class='bx bx-cart'></i></a>
                            </div>
                        </div>
                    </div>
                </div>  
            <!--Slide 8 os jogos sacou?-->
                <div class="swiper-slide">
                    <div class="box">
                        <img src="archives/jogosCapas/stardew2.jpg" alt="">
                        <div class="box-text">
                            <h2>Stardew Valley 2</h2>
                            <h3>Sandbox</h3>
                            <div class="rating-download">
                                <div class="rating">
                                    <i class='bx bx-star'></i>
                                    <span>4.8</span>
                                </div>
                                150R$
                                <a href="#" class="box-btn"><i class='bx bx-cart'></i></a>
                            </div>
                        </div>
                    </div>
                </div>  
            <!--Slide 9 os jogos sacou?-->
                <div class="swiper-slide">
                    <div class="box">
                        <img src="archives/jogosCapas/tf3.jpg" alt="">
                        <div class="box-text">
                            <h2>Team Fortress 3</h2>
                            <h3>Ação</h3>
                            <div class="rating-download">
                                <div class="rating">
                                    <i class='bx bx-star'></i>
                                    <span>4.3</span>
                                </div>
                                150R$
                                <a href="#" class="box-btn"><i class='bx bx-cart'></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            <!--Slide 10 os jogos sacou?-->
                <div class="swiper-slide">

                    <div class="box">
                        <img src="archives/jogosCapas/poker3.jpg" alt="">
                        <div class="box-text">
                            <h2>Poker Night 3</h2>
                            <h3>Cartas</h3>
                            <div class="rating-download">
                                <div class="rating">
                                    <i class='bx bx-star'></i>
                                    <span>4.4</span>
                                </div>
                                150R$
                                <a href="#" class="box-btn"><i class='bx bx-cart'></i></a>
                            </div>
                        </div>
                    </div>
                </div> 
            <!--Slide 11 os jogos sacou?-->
                <div class="swiper-slide">
                    <div class="box">
                        <img src="archives/jogosCapas/zelda2.jpg" alt="">
                        <div class="box-text">
                            <h2>Zelda Breath of the Wild 2</h2>
                            <h3>Aventura</h3>
                            <div class="rating-download">
                                <div class="rating">
                                    <i class='bx bx-star'></i>
                                    <span>4.8</span>
                                </div>
                                150R$
                                <a href="#" class="box-btn"><i class='bx bx-cart'></i></a>
                            </div>
                        </div>
                    </div>
                </div>  
            </div> 
        </div>
    </section>
    <!--Trending Section End-->

    <!--New Section Start para os Novos jogos, aqui vão ficar os zoados, dai no anterior os padrão-->
    <section class="new container" id="new">
        <div class="heading">
            <i class="bx bxs-game"></i>
            <h2>Jogos Novos</h2>
        </div>
        <!--Content Conteudo, os jogos-->
        <div class="new-content">
            <!--Box 1-->
            <div class="box">
                <img src="archives/jogosCapas/godOf1.jfif" alt="">
                <div class="box-text">
                    <h2>God Of War</h2>
                    1234567890
                    <h3>Ação</h3>
                    <div class="rating-download">
                        <div class="rating">
                            <i class='bx bx-star'></i>
                            <span>4.7</span>
                        </div>
                        150R$
                        <a href="produto3.php" class="box-btn"><i class='bx bx-cart'></i></a>
                    </div>
                </div>
            </div>
            <!--Box 2-->
            <div class="box">
                <img src="archives/jogosCapas/theLast1.png" alt="">
                <div class="box-text">
                    <h2>The Last Of Us</h2>
                    <h3>Ação</h3>
                    <div class="rating-download">
                        <div class="rating">
                            <i class='bx bx-star'></i>
                            <span>5.0</span>
                        </div>
                        150R$
                        <a href="#" class="box-btn"><i class='bx bx-cart'></i></a>
                    </div>
                </div>
            </div>
            <!--Box 3-->
            <div class="box">
                <img src="archives/jogosCapas/horizon1.jpeg" alt="">
                <div class="box-text">
                    <h2>Horizon Zero Dawn</h2>
                    <h3>Aventura</h3>
                    <div class="rating-download">
                        <div class="rating">
                            <i class='bx bx-star'></i>
                            <span>4.9</span>
                        </div>
                        150R$
                        <a href="#" class="box-btn"><i class='bx bx-cart'></i></a>
                    </div>
                </div>
            </div>
            <!--Box 4-->
            <div class="box">
                <img src="archives/jogosCapas/hollow1.jpg" alt="">
                <div class="box-text">
                    <h2>Hollow Knight</h2>
                    <h3>Metroidvania</h3>
                    <div class="rating-download">
                        <div class="rating">
                            <i class='bx bx-star'></i>
                            <span>5.0</span>
                        </div>
                        150R$
                        <a href="#" class="box-btn"><i class='bx bx-cart'></i></a>
                    </div>
                </div>
            </div>         
        </div>
        <div class="next-page">
            <a href="#">Inicio</a>
        </div>
    </section>
    <!--New Section End para os Novos jogos, aqui vão ficar os zoados, dai no anterior os padrão-->

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
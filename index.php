<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GamerSCerberus</title>
    <link rel="icon"
        href="https://firebasestorage.googleapis.com/v0/b/gamerscerberus.appspot.com/o/icon.png?alt=media&token=1564924b-b7c5-4171-897c-855f1a4c1282">

    <link rel="stylesheet" href="public/css/menuStyles.css">
    <link rel="stylesheet" href="public/css/mainStyles.css">
    <link rel="stylesheet" href="public/css/footerStyles.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
</head>

<body id="body">
    <!--  Inicio cabecera  -->
    <header class="header">
        <div class="header__container">
            <img src="public/img/web/profile.jpg" alt="profile" class="header__img" loading="lazy">

            <a href="index.php" class="header__logo">GamerSCerberus</a>

            <div class="header__search">
                <input type="search" placeholder="Search" class="header__input">
                <i class='bx bx-search header__icon'></i>
            </div>

            <div class="header__toggle">
                <i class='bx bx-menu header-toggle' id="header-toggle"></i>
            </div>
        </div>
    </header>
    <!--  Fin cabecera  -->

    <!--  Inicio Barra vertical  -->
    <div class="nav" id="navbar">
        <nav class="nav__container">
            <div>
                <a href="index.php" class="nav__link nav__logo">
                    <i class='bx bx-joystick nav__icon'></i>
                    <span class="nav__logo-name">GamerSCerberus</span>
                </a>

                <div class="nav__list">
                    <div class="nav__items">
                        <h3 class="nav__subtitle">Menu</h3>
                        <a href="index.php" class="nav__link  active">
                            <i class='bx bx-home nav__icon'></i>
                            <span class="nav__name">Home</span>
                        </a>
                        <a href="views/games.php" class="nav__link">
                            <i class='bx bx-game nav__icon'></i>
                            <span class="nav__name">Games</span>
                        </a>

                        <a href="views/consoles.php" class="nav__link">
                            <i class='bx bx-ghost nav__icon'></i>
                            <span class="nav__name">Consoles</span>
                        </a>

                        <a href="views/accessories.php" class="nav__link">
                            <i class='bx bx-headphone nav__icon'></i>
                            <span class="nav__name">Accessories</span>
                        </a>
                    </div>

                    <div class="nav__items">
                        <a href="views/order.php" class="nav__link">
                            <i class='bx bx-cart nav__icon'></i>
                            <span class="nav__name">Order</span>
                        </a>

                        <a href="views/products.php" class="nav__link">
                            <i class='bx bx-shopping-bag nav__icon'></i>
                            <span class="nav__name">Products</span>
                        </a>

                        <a href="views/saved.php" class="nav__link">
                            <i class='bx bx-heart nav__icon'></i>
                            <span class="nav__name">Saved</span>
                        </a>
                        <div class="nav__dropdown">
                            <a href="#" class="nav__link">
                                <i class='bx bx-user nav__icon'></i>
                                <span class="nav__name">User</span>
                                <i class='bx bx-chevron-down nav__icon nav__dropdown-icon'></i>
                            </a>
                            <div class="nav__dropdown-collapse">
                                <div class="nav__dropdown-content">
                                    <a href="views/profile.php" class="nav__dropdown-item">Profile</a>
                                    <a href="views/register.php" class="nav__dropdown-item">Register/Login</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </div>
    <!--  Fin Barra Vertical  -->
    <!--  Inicio Main  -->
    <main>

        <div class="mainContainer">
            <img src="public/img/web/wave.svg" alt="" class="waveTop">
            <img src="public/img/web/waveBottom.svg" alt="" class="waveBottom">
            <div class="mainContent">
                <h1> Welcome to<br>
                    <span aria-hidden="true" class="glitch">
                        <span aria-hidden="true">GamerSCerberus</span>
                        GamerSCerberus
                        <span aria-hidden="true">GamerSCerberus</span>
                    </span>
                </h1>
                <p>The best virtual video game store with neon aesthetics focused on the sale of the gamer world where
                    you can find all your video games, consoles, components and accessories at the best price and
                    quality on the market.</p>
                <button class="btnMain slidebtn" onclick="window.location.href='views/register.php'">Sign up</button>
            </div>
            <div class="mainImg">
                <img src="public/img/web/controller2.png" alt="" class="imgMain" loading="lazy">
            </div>
            <div class="iconsMain">
                <a href="https://www.facebook.com"><i class='bx bxl-facebook-circle'></i></a>
                <a href="https://github.com/LuisC73/GamerSCerberus"><i class='bx bxl-github'></i></a>
                <a href="#"><i class='bx bxl-linkedin'></i></a>
            </div>
        </div>
        <!--  Inicio cartas  -->
        <img src="public/img/web/wave2.svg" alt="" class="waveTp">
        <h3 class="title">Trending Games</h3>
        <div class="bg__card">
        
            <div class="card">
                <div class="card__img">
                    <img src="public/img/games/producto1.jpg" alt="fifa22" loading="lazy">
                </div>
                <div class="card__name">
                    <p>Fifa 22</p>
                </div>
                <div class="card__info">
                    <div class="card__icon">
                        <i class='bx bx-heart'></i>
                    </div>
                    <div>
                        <span class="card__value card__value--before">$500.000</span>
                        <span class="card__value card__value--now">$300.000</span>
                    </div>
                    <div class="card__icon">
                        <i class='bx bx-cart-alt'></i>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card__img">
                    <img src="https://firebasestorage.googleapis.com/v0/b/gamerscerberus.appspot.com/o/inicio%2Fproducto2.jpg?alt=media&token=4faf74a9-3733-4126-a3a6-c3cd443099a0"
                        alt="village" loading="lazy">
                </div>
                <div class="card__name">
                    <p>Village</p>
                </div>
                <div class="card__info">
                    <div class="card__icon">
                        <i class='bx bx-heart'></i>
                    </div>
                    <div>
                        <span class="card__value card__value--before">$250.000</span>
                        <span class="card__value card__value--now">$220.000</span>
                    </div>
                    <div class="card__icon">
                        <i class='bx bx-cart-alt'></i>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card__img">
                    <img src="public/img/games/producto3.jpg" alt="farcry6" loading="lazy">
                </div>
                <div class="card__name">
                    <p>Far Cry 6</p>
                </div>
                <div class="card__info">
                    <div class="card__icon">
                        <i class='bx bx-heart'></i>
                    </div>
                    <div>
                        <span class="card__value card__value--before">$240.000</span>
                        <span class="card__value card__value--now">$210.000</span>
                    </div>
                    <div class="card__icon">
                        <i class='bx bx-cart-alt'></i>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card__img">
                    <img src="https://firebasestorage.googleapis.com/v0/b/gamerscerberus.appspot.com/o/inicio%2Fproducto4.jpg?alt=media&token=d74e0756-ae1c-472b-81ea-da3e88ac18ce"
                        alt="coldwar" loading="lazy">
                </div>
                <div class="card__name">
                    <p>Cold War</p>
                </div>
                <div class="card__info">
                    <div class="card__icon">
                        <i class='bx bx-heart'></i>
                    </div>
                    <div>
                        <span class="card__value card__value--before">$1900.000</span>
                        <span class="card__value card__value--now">$170.000</span>
                    </div>
                    <div class="card__icon">
                        <i class='bx bx-cart-alt'></i>
                    </div>
                </div>
            </div>
        </div>
        <hr class="raya">
        <h3 class="title">Trending Consoles</h3>
        <div class="bg__card">
            <div class="card">
                <div class="card__img">
                    <img src="https://firebasestorage.googleapis.com/v0/b/gamerscerberus.appspot.com/o/inicio%2Fps5.png?alt=media&token=ef7af1d1-5854-4f3f-bab0-ede82673774b"
                        alt="ps5" loading="lazy">
                </div>
                <div class="card__name">
                    <p>Playstation 5</p>
                </div>
                <div class="card__info">
                    <div class="card__icon">
                        <i class='bx bx-heart'></i>
                    </div>
                    <div>
                        <span class="card__value card__value--before">$4.500.000</span>
                        <span class="card__value card__value--now">$4.000.000</span>
                    </div>
                    <div class="card__icon">
                        <i class='bx bx-cart-alt'></i>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card__img">
                    <img src="https://firebasestorage.googleapis.com/v0/b/gamerscerberus.appspot.com/o/inicio%2Fxboxx.png?alt=media&token=78592d02-d9eb-4722-aec7-6f2fd07fb8b3"
                        alt="xboxx" loading="lazy">
                </div>
                <div class="card__name">
                    <p>Xbox X</p>
                </div>
                <div class="card__info">
                    <div class="card__icon">
                        <i class='bx bx-heart'></i>
                    </div>
                    <div>
                        <span class="card__value card__value--before">$3.900.000</span>
                        <span class="card__value card__value--now">$3.600.000</span>
                    </div>
                    <div class="card__icon">
                        <i class='bx bx-cart-alt'></i>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card__img">
                    <img src="https://firebasestorage.googleapis.com/v0/b/gamerscerberus.appspot.com/o/inicio%2Fxboxs.png?alt=media&token=1ba38958-d2e4-4b7f-8a9b-9abb9fdfd8e6"
                        alt="xboxs" loading="lazy">
                </div>
                <div class="card__name">
                    <p>Xbox S</p>
                </div>
                <div class="card__info">
                    <div class="card__icon">
                        <i class='bx bx-heart'></i>
                    </div>
                    <div>
                        <span class="card__value card__value--before">$3.700.000</span>
                        <span class="card__value card__value--now">$3.200.000</span>
                    </div>
                    <div class="card__icon">
                        <i class='bx bx-cart-alt'></i>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card__img">
                    <img src="https://firebasestorage.googleapis.com/v0/b/gamerscerberus.appspot.com/o/inicio%2Fps4.png?alt=media&token=d52fe157-37ee-41b9-ba86-a8408456bae9"
                        alt="ps4" loading="lazy">
                </div>
                <div class="card__name">
                    <p>Playstation 4</p>
                </div>
                <div class="card__info">
                    <div class="card__icon">
                        <i class='bx bx-heart'></i>
                    </div>
                    <div>
                        <span class="card__value card__value--before">$1.500.000</span>
                        <span class="card__value card__value--now">$1.120.000</span>
                    </div>
                    <div class="card__icon">
                        <i class='bx bx-cart-alt'></i>
                    </div>
                </div>
            </div>
        </div>
        <hr class="raya">
        <h3 class="title">Trending Accessories</h3>
        <div class="bg__card">
            <div class="card">
                <div class="card__img">
                    <img src="https://firebasestorage.googleapis.com/v0/b/gamerscerberus.appspot.com/o/inicio%2Fteclado.png?alt=media&token=5a2105d7-188c-4879-aae5-992bd21ebd91"
                        alt="teclado" loading="lazy">
                </div>
                <div class="card__name">
                    <p>Teclado RGB</p>
                </div>
                <div class="card__info">
                    <div class="card__icon">
                        <i class='bx bx-heart'></i>
                    </div>
                    <div>
                        <span class="card__value card__value--before">$150.000</span>
                        <span class="card__value card__value--now">$120.000</span>
                    </div>
                    <div class="card__icon">
                        <i class='bx bx-cart-alt'></i>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card__img">
                    <img src="https://firebasestorage.googleapis.com/v0/b/gamerscerberus.appspot.com/o/inicio%2Fteclado2.png?alt=media&token=fd0fe740-3762-4df6-82d5-28895ba77a6c"
                        alt="teclado" loading="lazy">
                </div>
                <div class="card__name">
                    <p>Teclado RGB</p>
                </div>
                <div class="card__info">
                    <div class="card__icon">
                        <i class='bx bx-heart'></i>
                    </div>
                    <div>
                        <span class="card__value card__value--before">$200.000</span>
                        <span class="card__value card__value--now">$168.900</span>
                    </div>
                    <div class="card__icon">
                        <i class='bx bx-cart-alt'></i>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card__img">
                    <img src="https://firebasestorage.googleapis.com/v0/b/gamerscerberus.appspot.com/o/inicio%2Faudifonos.png?alt=media&token=259fcc49-0e01-4045-aa29-a3b71084aba7"
                        alt="audifonos" loading="lazy">
                </div>
                <div class="card__name">
                    <p>Audifonos RGB</p>
                </div>
                <div class="card__info">
                    <div class="card__icon">
                        <i class='bx bx-heart'></i>
                    </div>
                    <div>
                        <span class="card__value card__value--before">$155.000</span>
                        <span class="card__value card__value--now">$142.000</span>
                    </div>
                    <div class="card__icon">
                        <i class='bx bx-cart-alt'></i>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card__img">
                    <img src="https://firebasestorage.googleapis.com/v0/b/gamerscerberus.appspot.com/o/inicio%2Fmouse.png?alt=media&token=612cd2fc-2395-438e-ad18-69c798d41561"
                        alt="mouse" loading="lazy">
                </div>
                <div class="card__name">
                    <p>Mouse RGB</p>
                </div>
                <div class="card__info">
                    <div class="card__icon">
                        <i class='bx bx-heart'></i>
                    </div>
                    <div>
                        <span class="card__value card__value--before">$80.000</span>
                        <span class="card__value card__value--now">$70.000</span>
                    </div>
                    <div class="card__icon">
                        <i class='bx bx-cart-alt'></i>
                    </div>
                </div>
            </div>
        </div>
        <!-- -- Fin cartas -- -->
    </main>
    <!--  Fin main  -->
    <!--inicio boton para subir -->
    <div id="button-up">
        <i class='bx bxs-chevron-up'></i>
    </div>
    <!-- fin boton para subir -->
    <!--  Inicio Footer  -->
    
    <footer class="pie-pagina">
    
        <div class="grupo-1">
            <div class="box">
                <h2>Contact</h2>
                <p></p>
                <a href="#"><span><i class='bx bx-envelope'></i></span>Luiscastroc11@gmail.com</a> <br>
                <a href="#"><span><i class='bx bx-phone'></i></span>311 3712515</a> <br>
                <a href="#"><span><i class='bx bx-envelope'></i></span>darkcronosyt166@gmail.com</a> <br>
                <a href="#"><span><i class='bx bx-phone'></i></span>314 4337048</a>

            </div>
            <div class="box">
                <h2>About us</h2>
                <p>GamerSCerberus is a virtual video game store with neon aesthetics where you can find all your
                    video games, consoles, components and accessories at the best price and quality on the market.</p>

            </div>
            <div class="box">
                <h2>Follow us</h2>
                <div class="red-social">
                    <a href="https://www.facebook.com/LuisMiguelCastroC" class="bx bxl-facebook-circle"></a>
                    <a href="https://www.facebook.com/juanpablo.garciahernandez.796" class="bx bxl-facebook-circle"></a>
                    <a href="https://github.com/LuisC73" class="bx bxl-github"></a>
                    <a href="https://github.com/JuanPablo18328" class="bx bxl-github"></a>
                </div>
            </div>
        </div>
        <div class="grupo-2">
            <small>&copy; 2021 <b>GamerSCerberus</b> - All rights reserved.</small>
        </div>
    </footer>
    <!--  fin footer  -->
    <script src="public/js/menuScript.js"></script>
    <script src="public/js/buttonUp.js"></script>
</body>

</html>
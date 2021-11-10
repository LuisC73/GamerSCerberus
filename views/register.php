<?php 

 if(!isset($_SESSION)){
        session_start();
    }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GamerSCerberus</title>
    <link rel="icon" href="../public/img/web/icon.png">

    <link rel="stylesheet" href="../public/css/menuStyles.css">
    <link rel="stylesheet" href="../public/css/responsive.css">
    <link rel="stylesheet" href="../public/css/registerStyles.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
</head>

<body>
    <div id="retro">
        <header class="header">
            <div class="header__container">
                <a href="../index.php" class="header__logo">GamerSCerberus</a>
                <div class="header__toggle">
                    <i class='bx bx-menu' id="header-toggle"></i>
                </div>
            </div>
        </header>

        <!--========== NAV ==========-->
        <div class="nav" id="navbar">
            <nav class="nav__container">
                <div>
                    <a href="../index.php" class="nav__link nav__logo">
                        <i class='bx bx-joystick nav__icon'></i>
                        <span class="nav__logo-name">GamerSCerberus</span>
                    </a>

                    <div class="nav__list">
                        <div class="nav__items">
                            <h3 class="nav__subtitle">Menu</h3>
                            <a href="../index.php" class="nav__link">
                                <i class='bx bx-home nav__icon'></i>
                                <span class="nav__name">Home</span>
                            </a>
                            <a href="games.php" class="nav__link">
                                <i class='bx bx-game nav__icon'></i>
                                <span class="nav__name">Games</span>
                            </a>


                            <a href="consoles.php" class="nav__link">
                                <i class='bx bx-ghost nav__icon'></i>
                                <span class="nav__name">Consoles</span>
                            </a>

                            <a href="accessories.php" class="nav__link">
                                <i class='bx bx-headphone nav__icon'></i>
                                <span class="nav__name">Accesories</span>
                            </a>
                        </div>

                        <div class="nav__items">
                            <a href="order.php" class="nav__link">
                                <i class='bx bx-cart nav__icon'></i>
                                <span class="nav__name">Order</span>
                            </a>

                            <a href="products.php" class="nav__link">
                                <i class='bx bx-shopping-bag nav__icon'></i>
                                <span class="nav__name">Products</span>
                            </a>

                            <a href="saved.php" class="nav__link">
                                <i class='bx bx-heart nav__icon'></i>
                                <span class="nav__name">Saved</span>
                            </a>
                            <div class="nav__dropdown">
                                <a href="#" class="nav__link active">
                                    <i class='bx bx-user nav__icon'></i>
                                    <span class="nav__name">User</span>
                                    <i class='bx bx-chevron-down nav__icon nav__dropdown-icon'></i>
                                </a>
                                <div class="nav__dropdown-collapse">
                                    <div class="nav__dropdown-content">
                                        <a href="#" class="nav__dropdown-item">Perfil</a>
                                        <a href="register.php" class="nav__dropdown-item">Register/Login</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
        <main>
            <div class="container">
                <div class="login-container">
                    <div class="register">
                        <h2>Register</h2>
                        <form action="../controllers/controllerUser.php" method="POST">
                            <input type="text" placeholder="Name" class="campos" name="name">
                            <input type="text" placeholder="Last name" class="campos" name="lastname">
                            <input type="number" placeholder="Age" class="campos" name="age">
                            <input type="email" placeholder="Email" class="campos" name="email">
                            <input type="password" placeholder="Password" class="campos" name="password">
                            <input type="text" placeholder="Address" class="campos" name="addressUser">
                            <input type="text" placeholder="Photo" class="campos" name="photo">
                            <input type="submit" value="REGISTER" class="submit" name="buttonUser">
                        </form>
                    </div>
                    <div class="login">
                        <h2>Login</h2>
                        <div class="login-items">
                            <button class="fb"><i class="fab fa-facebook-f"></i> Login with Facebook</button>
                            <button class="tw"><i class="fab fa-twitter"></i> Login with Twitter</button>
                            <button class="email"><i class="fab fa-google"></i> Login with Correo</button>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <?php if(isset($_SESSION['mensaje'])):?>
        <div class="overlay2">
            <div class="modal">
                <div class="imgModal"><i class='bx bxs-user-check'></i></div>
                <h3><?php echo($_SESSION['mensaje1'])?></h3>
                <h4><?php echo($_SESSION['mensaje'])?></h4>
                <a href="register.php" class="buttonClose">Close</a>
            </div>
        </div>
        <?php unset($_SESSION['mensaje'])?>
        <?php endif ?>
        <script src="../public/js/menuScript.js"></script>
</body>

</html>
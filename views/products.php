<?php
include("../controllers/controllerListProducts.php");

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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../public/css/menuStyles.css">
    <link rel="stylesheet" href="../public/css/footerStyles.css">
    <link rel="stylesheet" href="../public/css/productStyles.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
</head>

<body>
    <header class="header">
        <div class="header__container">
            <img src="../public/img/web/profile.jpg" alt="profile" class="header__img" loading="lazy">

            <a href="../index.php" class="header__logo">GamerSCerberus</a>

            <div class="header__search">
                <input type="search" placeholder="Search" class="header__input">
                <i class='bx bx-search header__icon'></i>
            </div>

            <div class="header__toggle">
                <i class='bx bx-menu' id="header-toggle"></i>
            </div>
        </div>
    </header>
    <!-- ------------------------------- Fin cabecera ------------------------------- -->
    <!-- ----------------------------- Inicio Barra vertical ----------------------------- -->
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

                        <a href="products.php" class="nav__link active">
                            <i class='bx bx-shopping-bag nav__icon'></i>
                            <span class="nav__name">Products</span>
                        </a>

                        <a href="saved.php" class="nav__link">
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
        <div class="hero">
            <div class="textos-hero">
                <h1 class="glitch">
                    <span aria-hidden="true">Register Your Product</span>
                    Register Your Product
                    <span aria-hidden="true">Register Your Product</span></h1>
                <p>GamerSCerberus</p>
            </div>
            <div class="svg-hero" style="height: 150px; overflow: hidden;"><svg viewBox="0 0 500 150"
                    preserveAspectRatio="none" style="height: 100%; width: 100%;">
                    <path d="M0.00,49.98 C149.99,150.00 349.20,-49.98 500.00,49.98 L500.00,150.00 L0.00,150.00 Z"
                        style="stroke: none; fill: #F1D4ED;"></path>
                </svg></div>
        </div>
        <!-- Cartas -->
        <h2 class="title">¡Your products!</h2>
        <div class="bg__card">
            <div class="card">
                <div class="card__img">
                    <a href="registerProducts.php"><img src="../public/img/web/añadir.png" alt="village" loading="lazy"
                            class="btn-open-add"></a>
                </div>
                <div class="card__name">
                    <p>Name...</p>
                </div>
                <div class="card__info">
                    <div class="card__icon">
                        <!--<i class='bx bxs-edit-alt btn-open-edit' id="btn-open-edit"></i>-->
                    </div>
                    <div>
                        <span class="card__value card__value--before">Value Before</span>
                        <span class="card__value card__value--now">Value Now</span>
                    </div>
                    <div class="card__icon">
                        <!--<i class='bx bx-x'></i>-->
                    </div>
                </div>
            </div>
            <?php foreach($products as $product): ?>
            <div class="card">
                <div class="card__img">
                    <img src="<?= $product["img"] ?>" alt="<?= $product["nameP"] ?>" loading="lazy">
                </div>
                <div class="card__name">
                    <p><?=$product["nameP"] ?></p>

                </div>
                <div class="card__info">
                    <div class="card__icon">
                        <a href="#" data-bs-toggle="modal" data-bs-target="#edit<?= $product["id"] ?>"><i
                                class='bx bxs-edit-alt'></i></a>
                    </div>
                    <div>
                        <span class="card__value card__value--before">
                            <?= "$".$product["valueP"] ?>
                        </span>
                        <span class="card__value card__value--now"><?= "$".$product["valueP"] ?></span>
                    </div>
                    <div class="card__icon">
                        <a href="#" data-bs-toggle="modal" data-bs-target="#delete<?= $product["id"] ?>"><i class='bx bx-x'></i></a>
                    </div>
                </div>
                <section>
                    <div class="modal fade" id="delete<?= $product["id"] ?>" tabindex="-1">
                        <div class="modal-dialog">
                            <div class="modal-content modalStyle">
                                <div class="modal-header bgModal text-white">
                                    <h5 class="modal-title col-11 text-center">GamerSCerberus</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                </div>
                                <div class="modal-body">
                                    <p class="textModal">¿Do you really want to remove this product...?</p>
                                    <p class="textModal"><?= $product["id"] ?></p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btnStyle"
                                        data-bs-dismiss="modal">Close</button>
                                    <a href="../controllers/controllerDeleteProduct.php?id=<?= $product["id"]?>"
                                        class="btn btnStyle">Accept</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section>
                    <div class="modal fade" id="edit<?= $product["id"] ?>" tabindex="-1">
                        <div class="modal-dialog">
                            <div class="modal-content modalStyle">
                                <div class="modal-header bgModal text-white">
                                    <h5 class="modal-title col-11 text-center">GamerSCerberus</h5>
                                    <button type="button" class="btn-close closeBtn" data-bs-dismiss="modal"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-4">
                                            <img src="<?= $product["img"] ?>" alt="foto" class="img-fluid imgModalStyle">
                                        </div>
                                        <div class="col-8">
                                        <form action="../controllers/controllerEditProduct.php?id=<?=$product["id"]?>" method="POST">
                                                <div class="mb-3">
                                                    <label class="form-label">Value</label>
                                                    <input name="valueAdd" type="text" class="form-control inputStyle"
                                                        value="<?= $product["valueP"] ?>">
                                                        <label class="form-label">Amount</label>
                                                    <input name="amountAdd" type="text" class="form-control inputStyle"
                                                        value="<?= $product["amount"] ?>">
                                                </div>
                                                <button type="submit" value="Edit" name="edit" class="btnStyle col-12">Edit</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <?php endforeach ?>
        </div>
    </main>
    <?php if(isset($_SESSION['mensaje'])):?>
        <div class="overlay2">
			<div class="modalExit">
        <div class="imgModal"><img src="../public/img/web/sun.png" alt=""></div>
				<h3><?php echo($_SESSION['mensaje1'])?></h3>
				<h4><?php echo($_SESSION['mensaje'])?></h4>
      <a href="products.php" class="buttonClose">Close</a>
		</div>
	</div>
        <?php unset($_SESSION['mensaje'])?>
    <?php endif ?>
    <div id="button-up">
        <i class='bx bxs-chevron-up'></i>
    </div>
    <!-- ------------------------------ Inicio Footer ----------------------------- -->
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
    <!-- ------------------------------- fin footer ------------------------------- -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <script src="../public/js/menuScript.js"></script>
    <script src="../public/js/buttonUp.js"></script>
    <script src="../public/js/modal.js"></script>

</body>

</html>
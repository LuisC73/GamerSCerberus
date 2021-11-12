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
  <link rel="stylesheet" href="../public/css/registerProductStyles.css">
</head>

<body>
  <main class="main content">
    <div class="video">
      <video src="../public/video/neon.mp4" muted autoplay loop class="videoFondo"></video>
    </div>
    <div class="overlay">
    </div>
    <div class="container">
      <div class="title">Product Registration</div>
      <div class="content">
        <form action="../controllers/controllerProduct.php" method="POST">
          <div class="user-details">
            <div class="input-box">
              <span class="details">Name</span>
              <input type="text" name="nameAdd" required>
            </div>
            <div class="input-box">
              <span class="details">Value</span>
              <input type="text" name="valueAdd" required>
            </div>
            <div class="input-box">
              <span class="details">Brand</span>
              <input type="text" name="brandAdd" required>
            </div>
            <div class="input-box">
              <span class="details">Photo</span>
              <input type="text" name="imgAdd" required>
            </div>
          </div>
          <div class="gender-details">
            <input type="radio" name="categoryAdd" id="dot-1" value="Game">
            <input type="radio" name="categoryAdd" id="dot-2" value="Console">
            <input type="radio" name="categoryAdd" id="dot-3" value="Accesories">
            <span class="gender-title">Category</span>
            <div class="category">
              <label for="dot-1">
                <span class="dot one"></span>
                <span class="gender">Game</span>
              </label>
              <label for="dot-2">
                <span class="dot two"></span>
                <span class="gender">Console</span>
              </label>
              <label for="dot-3">
                <span class="dot three"></span>
                <span class="gender">Accessories</span>
              </label>
            </div>
          </div>
          <div class="button">
            <input type="submit" value="Register" name="register" id="btn-abrir-popup">
            <a href="products.php" id="getback" class="btnGet">Get Back</a>
          </div>
        </form>
      </div>
    </div>
  </main>
  <?php if(isset($_SESSION['mensaje'])):?>
  <div class="overlay2">
			<div class="modal">
        <div class="imgModal"><img src="../public/img/web/sun.png" alt=""></div>
				<h3><?php echo($_SESSION['mensaje1'])?></h3>
				<h4><?php echo($_SESSION['mensaje'])?></h4>
      <a href="registerProducts.php" class="buttonClose">Close</a>
		</div>
	</div>
<?php unset($_SESSION['mensaje'])?>
<?php endif ?>
<script src="../public/js/products.js"></script>
</body>

</html>
<?php
include 'inc/koneksi.php';
include 'inc/session.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <!-- <link rel="shortcut icon" type="image/x-icon" href="./img/favicon.ico" /> -->
  <link rel="stylesheet" href="./css/main.css" />
  <link href="https://fonts.googleapis.com/css?family=Kulim+Park|Lobster&display=swap" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css2?family=Merriweather&display=swap" rel="stylesheet" />
  <script src="https://kit.fontawesome.com/a465367bb1.js" crossorigin="anonymous"></script>
  <title>Hubet Catering - Keranjang</title>
</head>

<body>
  <nav class="text-dark">
    <div class="nav-container">
      <div id="nav-branding" class="fs-3">
        <a href="./index.html">
          <h1 class="text-primary mr-2 theme-font">
            <i class="text-primary fas fa-pepper-hot"></i> Hubert Catering - <strong>
              <h3><?= $_SESSION['username']; ?>
          </h1>
        </a>
        <div id="hamburger">
          <div class="middle-line"></div>
          <div class="top-line"></div>
          <div class="bottom-line"></div>
        </div>
      </div>
      <ul class="text-white text-bold fs-1">
        <li class="p-1 m-1">
          <a href="invoice.php">Home</a>
        </li>
        <li class="p-1 m-1"><a href="#">Menu</a></li>
        <li class="p-1 m-1">
          <a class="current" href="keranjang.php"><i class="fas fa-shopping-cart"><span id="cart-count">0</span></i></a>
        </li>
      </ul>
    </div>
  </nav>
  <header id="header-shopping-cart">
    <div class="header-content mb-5">
      <h1 class="theme-font text-center mb-1 text-white fs-4">
        Keranjang Belanja Anda
      </h1>
    </div>
  </header>

  <section id="shopping-cart" class="py-5">
    <div class="container">
      <h2 class="fs-4 mb-3">Keranjang Belanja</h2>
      <ul id="cart-header" class="bg-primary p-3 text-bold text-white">
        <li id="cart-header-name">Name</li>
        <li id="cart-header-price">Price</li>
        <li id="cart-header-quantity">Quantity</li>
        <li id="cart-header-total">Total</li>
        <li id="empty-div"></li>
      </ul>
      <div id="shopping-cart-items" class="border-light p-3"></div>
      <div class="checkout">
        <p class="text-right text-bold fs-3 p-3" style="display: none;">
          Subtotal: Rp<span id="subtotal"></span>
        </p>
        <button id="checkout-btn" class="btn-primary text-bold" style="display: none;" href="utama.php">
          Checkout
        </button>
      </div>
    </div>
  </section>

  <footer class="bg-dark text-white py-3" style="margin-top: 100px;">
    <div class="container">
      <h2 class="theme-font text-center">
        <i class="text-primary fas fa-pepper-hot"></i> Hubert Catering
      </h2>
    </div>
  </footer>
  <script src="./js/styles.js"></script>
  <script src="./js/shoppingCart.js"></script>
</body>

</html>
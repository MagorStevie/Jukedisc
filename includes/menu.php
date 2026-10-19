<?php
  if (session_status() !== PHP_SESSION_ACTIVE) {
      session_start();
  }
  $cartCount = 0;
  if (isset($_SESSION['cart']) && is_array($_SESSION['cart'])) {
      foreach ($_SESSION['cart'] as $quantity) {
          if (is_int($quantity) && $quantity > 0) {
              $cartCount += $quantity;
          }
      }
  }
?>
<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Jukedisc</title>
</head>
<body>

  <a class="skip-link" href="#main-content">Přejít na hlavní obsah</a>
  <div class="top-container">
    <a href="index.php" aria-label="Jukedisc – úvodní stránka">
      <img src="pictures/logo+obrazek.png" alt="Jukedisc" class="logo">
    </a>

    <form class="search" action="index.php" method="get" role="search">
      <input type="search"
      name="q"
      value="<?= isset($_GET['q']) && is_string($_GET['q']) ? htmlspecialchars($_GET['q'], ENT_QUOTES, 'UTF-8') : '' ?>"
      placeholder="Hledat nástroj..."
      aria-label="Hledat produkty"
      class="search-window">
      <button class="search-submit" type="submit">Hledat</button>
    </form>

    <div class="clicker_img">
      <div class="profile-icon">
        <a href="register.php" aria-label="Účet">
          <img src="pictures/profile-icon.png" alt="" class="profile-icon_img">
        </a>
      </div>

      <div class="cart">
        <a href="shopping-list.php" class="cart-link" aria-label="Košík, počet kusů: <?= $cartCount ?>">
          <img src="pictures/shopping-cart.png" alt="" class="cart_img">
          <?php if ($cartCount > 0): ?>
            <span class="cart-count"><?= $cartCount ?></span>
          <?php endif; ?>
        </a>
      </div>
    </div>

  </div>

  <header id="myHeader" class="main-header">
    <nav class="site-nav" aria-label="Hlavní navigace">
      <a href="index.php">Domů</a>
      <a href="index.php#produkty">Nabídka</a>
      <a href="register.php">Můj účet</a>
      <a href="shopping-list.php">Košík<?= $cartCount > 0 ? ' (' . $cartCount . ')' : '' ?></a>
    </nav>
  </header>

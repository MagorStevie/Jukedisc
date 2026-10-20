<?php
require_once __DIR__ . "/includes/products.php";

if (session_status() !== PHP_SESSION_ACTIVE) {
    session_start();
}
if (!isset($_SESSION['cart']) || !is_array($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}

if (isset($_GET['id'])) {
    $products = load_products();

    foreach ($products as $product) {
        if ($product['id'] === $_GET['id']) {
            $nazev = $product['nazev'];
            $popis = $product['popis'];
            $cena = $product['cena'];
            $obrazek = $product['obrazek'];
            break;
        }
    }
}

if (!isset($nazev, $popis, $cena, $obrazek)) {
    header('Location: index.php');
    exit();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $submittedToken = isset($_POST['csrf_token']) && is_string($_POST['csrf_token'])
        ? $_POST['csrf_token']
        : '';

    if (empty($_SESSION['cart_csrf_token']) || !hash_equals($_SESSION['cart_csrf_token'], $submittedToken)) {
        http_response_code(400);
        exit('Neplatný požadavek. Obnovte stránku a zkuste to znovu.');
    }

    if (!isset($_SESSION['cart']) || !is_array($_SESSION['cart'])) {
        $_SESSION['cart'] = [];
    }

    $currentQuantity = isset($_SESSION['cart'][$_GET['id']]) && is_int($_SESSION['cart'][$_GET['id']])
        ? $_SESSION['cart'][$_GET['id']]
        : 0;
    if ($currentQuantity >= 999) {
        http_response_code(400);
        exit('V košíku můžete mít nejvýše 999 kusů jednoho produktu.');
    }
    $_SESSION['cart'][$_GET['id']] = $currentQuantity + 1;

    header('Location: shopping-list.php?added=1');
    exit();
}

if (empty($_SESSION['cart_csrf_token'])) {
    $_SESSION['cart_csrf_token'] = bin2hex(random_bytes(32));
}
?>

<?php
    include "includes/menu.php";
?>
<main class="container product-page" id="main-content" tabindex="-1">
    <nav class="product-breadcrumb" aria-label="Drobečková navigace">
        <a href="index.php">Domů</a>
        <span aria-hidden="true">/</span>
        <span><?= htmlspecialchars($nazev, ENT_QUOTES, 'UTF-8') ?></span>
    </nav>

    <article class="nakup">
        <div class="nakup-spolu">
            <div class="nakup-img">
                <img
                    src="pictures/<?= htmlspecialchars($obrazek, ENT_QUOTES, 'UTF-8') ?>"
                    alt="<?= htmlspecialchars($nazev, ENT_QUOTES, 'UTF-8') ?>"
                    class="nakup-item-img">
            </div>

            <div class="nakup-name">
                <p class="product-detail-eyebrow">Hudební nástroj</p>
                <h1><?= htmlspecialchars($nazev, ENT_QUOTES, 'UTF-8') ?></h1>
                <p class="nakup-item"><?= htmlspecialchars($popis, ENT_QUOTES, 'UTF-8') ?></p>
                <div class="nakup-purchase">
                    <p class="nakup-price-label">Cena</p>
                    <p class="price"><?= htmlspecialchars($cena, ENT_QUOTES, 'UTF-8') ?></p>
                    <form action="nakup.php?id=<?= rawurlencode($_GET['id']) ?>" method="post">
                        <input type="hidden" name="csrf_token" value="<?= htmlspecialchars($_SESSION['cart_csrf_token'], ENT_QUOTES, 'UTF-8') ?>">
                        <button class="btn-price" type="submit">Přidat do košíku</button>
                    </form>
                    <p class="purchase-note">Bezpečný nákup hudebního vybavení na Jukedisc.</p>
                </div>
            </div>
        </div>
    </article>
</main>

<?php include "includes/footer.php"; ?>
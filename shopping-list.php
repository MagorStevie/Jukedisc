<?php
if (session_status() !== PHP_SESSION_ACTIVE) {
    session_start();
}
if (!isset($_SESSION['cart']) || !is_array($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}

$products = json_decode(file_get_contents('products.json'), true);
$productsById = [];
foreach ($products as $product) {
    $productsById[$product['id']] = $product;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $submittedToken = isset($_POST['csrf_token']) && is_string($_POST['csrf_token'])
        ? $_POST['csrf_token']
        : '';

    if (empty($_SESSION['cart_csrf_token']) || !hash_equals($_SESSION['cart_csrf_token'], $submittedToken)) {
        http_response_code(400);
        exit('Neplatný požadavek. Obnovte stránku a zkuste to znovu.');
    }

    $removeId = isset($_POST['remove']) && is_string($_POST['remove']) ? $_POST['remove'] : '';
    $updateId = isset($_POST['update']) && is_string($_POST['update']) ? $_POST['update'] : '';
    if ($removeId !== '' && isset($productsById[$removeId], $_SESSION['cart'][$removeId])) {
        unset($_SESSION['cart'][$removeId]);
    } elseif ($updateId !== '' && isset($productsById[$updateId], $_SESSION['cart'][$updateId])) {
        $quantityInput = isset($_POST['quantity']) && is_string($_POST['quantity']) ? $_POST['quantity'] : '';
        $quantity = filter_var($quantityInput, FILTER_VALIDATE_INT, ['options' => ['min_range' => 1, 'max_range' => 999]]);
        if ($quantity === false) {
            http_response_code(400);
            exit('Počet kusů musí být celé číslo od 1 do 999.');
        }
        $_SESSION['cart'][$updateId] = $quantity;
        header('Location: shopping-list.php?updated=1');
        exit();
    } else {
        http_response_code(400);
        exit('Požadovanou položku košíku se nepodařilo najít.');
    }

    header('Location: shopping-list.php?removed=1');
    exit();
}

if (empty($_SESSION['cart_csrf_token'])) {
    $_SESSION['cart_csrf_token'] = bin2hex(random_bytes(32));
}

$cart = isset($_SESSION['cart']) && is_array($_SESSION['cart']) ? $_SESSION['cart'] : [];
$cartItems = [];
$cartTotal = 0;
$cartCount = 0;

foreach ($cart as $id => $quantity) {
    if (!isset($productsById[$id]) || !is_int($quantity) || $quantity < 1) {
        unset($_SESSION['cart'][$id]);
        continue;
    }

    $product = $productsById[$id];
    $unitPrice = (int) preg_replace('/\D/u', '', $product['cena']);
    $lineTotal = $unitPrice * $quantity;
    $cartTotal += $lineTotal;
    $cartCount += $quantity;
    $cartItems[] = [
        'product' => $product,
        'quantity' => $quantity,
        'unit_price' => $unitPrice,
        'line_total' => $lineTotal,
    ];
}

$formatPrice = function ($price) {
    return number_format($price, 0, ',', ' ') . ' Kč';
};

include "includes/menu.php";
?>

<main class="container cart-page" id="main-content" tabindex="-1">
    <div class="cart-heading">
        <p class="section-eyebrow">Váš výběr</p>
        <h1>Nákupní košík</h1>
        <p><?= $cartCount ?> <?= $cartCount === 1 ? 'položka' : ($cartCount > 1 && $cartCount < 5 ? 'položky' : 'položek') ?> v košíku</p>
    </div>

    <?php if (isset($_GET['added'])): ?>
        <p class="cart-notice" role="status">Produkt byl přidán do košíku.</p>
    <?php elseif (isset($_GET['updated'])): ?>
        <p class="cart-notice" role="status">Počet kusů byl upraven.</p>
    <?php elseif (isset($_GET['removed'])): ?>
        <p class="cart-notice" role="status">Produkt byl odebrán z košíku.</p>
    <?php endif; ?>

    <?php if (count($cartItems) === 0): ?>
        <section class="cart-empty">
            <div class="cart-empty-icon" aria-hidden="true">♪</div>
            <h2>Váš košík je zatím prázdný</h2>
            <p>Prohlédněte si nabídku a najděte svůj nový oblíbený nástroj.</p>
            <a class="hero-button" href="index.php#produkty">Prohlédnout produkty <span aria-hidden="true">→</span></a>
        </section>
    <?php else: ?>
        <div class="cart-layout">
            <section class="cart-items" aria-label="Položky v košíku">
                <?php foreach ($cartItems as $item): ?>
                    <?php
                        $product = $item['product'];
                        $safeId = htmlspecialchars($product['id'], ENT_QUOTES, 'UTF-8');
                        $safeName = htmlspecialchars($product['nazev'], ENT_QUOTES, 'UTF-8');
                        $safeImage = htmlspecialchars($product['obrazek'], ENT_QUOTES, 'UTF-8');
                    ?>
                    <article class="cart-item">
                        <a class="cart-item-image" href="nakup.php?id=<?= rawurlencode($product['id']) ?>">
                            <img src="pictures/<?= $safeImage ?>" alt="<?= $safeName ?>">
                        </a>
                        <div class="cart-item-details">
                            <h2><a href="nakup.php?id=<?= rawurlencode($product['id']) ?>"><?= $safeName ?></a></h2>
                            <p><?= $formatPrice($item['unit_price']) ?> / ks</p>
                            <form class="cart-quantity-form" action="shopping-list.php" method="post">
                                <input type="hidden" name="csrf_token" value="<?= htmlspecialchars($_SESSION['cart_csrf_token'], ENT_QUOTES, 'UTF-8') ?>">
                                <input type="hidden" name="update" value="<?= $safeId ?>">
                                <label for="quantity-<?= $safeId ?>">Počet kusů</label>
                                <input id="quantity-<?= $safeId ?>" type="number" name="quantity" min="1" max="999" step="1" value="<?= $item['quantity'] ?>">
                                <button type="submit" aria-label="Upravit počet kusů produktu <?= $safeName ?>">Upravit</button>
                            </form>
                        </div>
                        <div class="cart-item-actions">
                            <strong><?= $formatPrice($item['line_total']) ?></strong>
                            <form action="shopping-list.php" method="post">
                                <input type="hidden" name="csrf_token" value="<?= htmlspecialchars($_SESSION['cart_csrf_token'], ENT_QUOTES, 'UTF-8') ?>">
                                <input type="hidden" name="remove" value="<?= $safeId ?>">
                                <button type="submit" class="cart-remove" aria-label="Odebrat <?= $safeName ?> z košíku">Odebrat</button>
                            </form>
                        </div>
                    </article>
                <?php endforeach; ?>
            </section>

            <aside class="cart-summary">
                <h2>Shrnutí objednávky</h2>
                <p><span>Počet kusů</span><strong><?= $cartCount ?></strong></p>
                <p class="cart-total"><span>Celkem</span><strong><?= $formatPrice($cartTotal) ?></strong></p>
                <p class="cart-summary-note">Součet zahrnuje všechny kusy v košíku.</p>
            </aside>
        </div>
    <?php endif; ?>
</main>

<?php include "includes/footer.php"; ?>

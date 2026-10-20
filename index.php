<?php
require_once __DIR__ . "/includes/products.php";

$products = load_products();
$query = isset($_GET['q']) && is_string($_GET['q']) ? trim($_GET['q']) : '';
$selectedCategory = isset($_GET['category']) && is_string($_GET['category']) ? $_GET['category'] : '';
$minPriceInput = isset($_GET['min_price']) && is_string($_GET['min_price']) ? $_GET['min_price'] : '';
$maxPriceInput = isset($_GET['max_price']) && is_string($_GET['max_price']) ? $_GET['max_price'] : '';
$minPrice = $minPriceInput !== '' && ctype_digit($minPriceInput) ? (int) $minPriceInput : null;
$maxPrice = $maxPriceInput !== '' && ctype_digit($maxPriceInput) ? (int) $maxPriceInput : null;
$filterError = ($minPriceInput !== '' && $minPrice === null)
    || ($maxPriceInput !== '' && $maxPrice === null)
    || ($minPrice !== null && $maxPrice !== null && $minPrice > $maxPrice);
$categories = [];
foreach ($products as $product) {
    if (isset($product['kategorie'])) {
        $categories[] = $product['kategorie'];
    }
}
$categories = array_values(array_unique($categories));

$visibleProducts = [];
foreach ($products as $product) {
    if ($filterError) {
        break;
    }

    $searchable = $product['nazev'] . ' ' . $product['popis'] . ' ' . $product['cena'] . ' ' . ($product['kategorie'] ?? '');
    if ($query !== '' && strpos(normalize_search_text($searchable), normalize_search_text($query)) === false) {
        continue;
    }

    $productPrice = product_price_value($product['cena']);
    if (($selectedCategory !== '' && ($product['kategorie'] ?? '') !== $selectedCategory)
        || ($minPrice !== null && $productPrice < $minPrice)
        || ($maxPrice !== null && $productPrice > $maxPrice)) {
        continue;
    }

    $visibleProducts[] = $product;
}

include "includes/menu.php";
?>

<main class="container home-page" id="main-content" tabindex="-1">
    <section class="aktuality" aria-label="Představení obchodu">
        <div class="aktuality_img">
            <div class="hero-copy">
                <p class="hero-eyebrow">Vítejte v Jukediscu</p>
                <h1>Najdi svůj zvuk.</h1>
                <p>Hudební nástroje a vybavení pro každý nový začátek i velké vystoupení.</p>
                <a class="hero-button" href="#produkty">Prohlédnout nabídku <span aria-hidden="true">→</span></a>
            </div>
        </div>
    </section>

    <section class="products-section" id="produkty">
        <div class="section-heading">
            <p class="section-eyebrow"><?= $query === '' ? 'Vybráno pro vás' : 'Výsledky hledání' ?></p>
            <h2><?= $query === '' ? 'Nabídka produktů' : 'Hledání: ' . htmlspecialchars($query, ENT_QUOTES, 'UTF-8') ?></h2>
            <p><?= $query === '' ? 'Najděte nástroj, který vás rozezní.' : 'Produkty odpovídající vašemu hledání.' ?></p>
        </div>

        <form class="product-filters" action="index.php#produkty" method="get" aria-label="Filtrování produktů">
            <label>
                <span>Kategorie</span>
                <select name="category">
                    <option value="">Všechny kategorie</option>
                    <?php foreach ($categories as $category): ?>
                        <option value="<?= htmlspecialchars($category, ENT_QUOTES, 'UTF-8') ?>" <?= $selectedCategory === $category ? 'selected' : '' ?>>
                            <?= htmlspecialchars($category, ENT_QUOTES, 'UTF-8') ?>
                        </option>
                    <?php endforeach; ?>
                </select>
            </label>
            <label>
                <span>Min. cena (Kč)</span>
                <input type="number" name="min_price" min="0" step="1" value="<?= htmlspecialchars($minPriceInput, ENT_QUOTES, 'UTF-8') ?>" inputmode="numeric">
            </label>
            <label>
                <span>Max. cena (Kč)</span>
                <input type="number" name="max_price" min="0" step="1" value="<?= htmlspecialchars($maxPriceInput, ENT_QUOTES, 'UTF-8') ?>" inputmode="numeric">
            </label>
            <?php if ($query !== ''): ?>
                <input type="hidden" name="q" value="<?= htmlspecialchars($query, ENT_QUOTES, 'UTF-8') ?>">
            <?php endif; ?>
            <button type="submit">Použít filtry</button>
            <?php if ($selectedCategory !== '' || $minPriceInput !== '' || $maxPriceInput !== ''): ?>
                <a href="index.php<?= $query !== '' ? '?q=' . rawurlencode($query) . '#produkty' : '#produkty' ?>">Zrušit filtry</a>
            <?php endif; ?>
        </form>
        <?php if ($filterError): ?>
            <p class="filter-error" role="alert">Zkontrolujte cenové rozmezí. Zadejte nezáporná celá čísla a minimální cena nesmí být vyšší než maximální.</p>
        <?php endif; ?>

        <div class="product-grid">
            <?php if ($visibleProducts === []): ?>
                <p class="search-empty">Žádné produkty neodpovídají hledání a filtrům. Zkuste upravit hledaný výraz nebo filtry.</p>
            <?php else: ?>
                <?php foreach ($visibleProducts as $product): ?>
                    <a class="product-card" href="nakup.php?id=<?= rawurlencode($product['id']) ?>">
                        <span class="product-image-wrap">
                            <img
                                src="pictures/<?= htmlspecialchars($product['obrazek'], ENT_QUOTES, 'UTF-8') ?>"
                                alt="<?= htmlspecialchars($product['nazev'], ENT_QUOTES, 'UTF-8') ?>"
                                class="product-image">
                        </span>
                        <span class="product-info">
                            <h3 class="product-name"><?= htmlspecialchars($product['nazev'], ENT_QUOTES, 'UTF-8') ?></h3>
                            <span class="product-description"><?= htmlspecialchars($product['popis'], ENT_QUOTES, 'UTF-8') ?></span>
                            <span class="product-bottom">
                                <span class="product-price"><?= htmlspecialchars($product['cena'], ENT_QUOTES, 'UTF-8') ?></span>
                                <span class="product-link">Zobrazit produkt <span aria-hidden="true">→</span></span>
                            </span>
                        </span>
                    </a>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
    </section>
</main>

<?php
    include "includes/footer.php";
?>